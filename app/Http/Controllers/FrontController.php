<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Mail;

class FrontController extends Controller
{


    public function getAirport(Request $request) {
		
		$term = strtolower($request->input('term')); //required parameter
		
		$data = $this->getAirportFromDB($term);

		if($request->input('type') === 'origin'){
			/*if(Session::has('org_data')){
				Session::forget('org_data');
			}*/
			Session::put('org_data', json_encode($data));
		}//dd(Session::get('org_data'));
		if($request->input('type') === 'destination'){
			/*if(Session::has('dep_data')){
				Session::forget('dep_data');
			}*/
			Session::put('dep_data', json_encode($data));
		}
		print_r(json_encode($data));
		return;
	
	}


	/**
	 * call method in getAirport 
	 */


	function getAirportFromDB($term){
                try {
                    $ter =  "'".$term."'";
                 
			//$data = DB::table('airports')->where('code', 'like', strtoupper($term).'%')->orwhere('cityName', 'like', $term.'%')->select('cityName','code','name as value')/*->orderBy('cityName','DESC')*/->orderBy('code','ASC')->get();//dd($data);
			//$data = DB::select("SELECT cityName, code, name as value FROM airports WHERE code LIKE '".strtoupper($term)."%' or cityName LIKE '".$term."%' ORDER BY code='".strtoupper($term)."' DESC");//dd($data);
			//DB::enableQueryLog();
			$data = DB::select("SELECT 
			cities.nameCity as cityName, 
			airports.codeIataAirport as code, 
			airports.nameAirport as value FROM airports join cities on airports.codeIataCity = cities.codeIataCity WHERE airports.codeIataAirport LIKE '".strtoupper($term)."%' or cities.nameCity LIKE '%".$term."%' ORDER BY airports.codeIataAirport='".strtoupper($term)."' DESC");//dd($data);
                        //$data = DB::select("call SearchFlight(".$ter.")");
			
			if(!count($data)){
				$data = [];
			} else {
	            foreach($data as $d){
	                $d->value =  ucfirst(strtolower($d->cityName)) .', ' . ucfirst(strtolower($d->value)) . ' ( '.$d->code.' )';
	                $d->text =  ucfirst(strtolower($d->cityName)) . ' ( '.$d->code.' )';
	                $d->cityName = ucfirst(strtolower($d->cityName));
	        	}
	        }
		}catch(\Exception $e){
			$data = [];
		}
		return $data;
	}

  public function searchflightnew(Request $request){
		
    	$is_return = $request->is_return?'true':'false';
		$res=array();
		$origin=$request->origin;
		$dst=$request->destination;
		$departureDate=$request->departureDate;
		$returnDate=$request->returnDate;
		$customRadio=$is_return;
		$passenger=$request->passenger;
		$class=$request->class;

    	if(isset($request->departureDate) && isset($request->returnDate) && $is_return) {
          	
          
          	$url = "http://66.42.124.77/amadeus/flights.php?origin=".$request->origin."&destination=".$request->destination."&departureDate=".$request->departureDate."&is_return=".$is_return."&returnDate=".$request->returnDate."&noofadults=".$request->passenger."&children=1&infants=1&travelClass=".$request->class."&nonStop=true&noofres=250";

          
          //$url = "http://66.42.124.77/amadeus/flights.php?origin=LON&destination=PAR&departureDate=2021-03-10&is_return=true&returnDate=2021-03-30&noofadults=2&children=1&infants=1&travelClass=ECONOMY&nonStop=true&noofres=250";
          
			//$url="http://162.217.87.243/flights/Apis.php?origin=".$request->origin."&dst=".$request->destination."&is_return=".$is_return."&is_nonstop=true&departureDate=".$request->departureDate."&returnDate=".$request->returnDate."&travelclass=".$request->class."&noofadults=".$request->passenger."&noofchild=0&noofinfant=0&noofres=250";

    	}else{
          
    		//$url="http://162.217.87.243/flights/Apis.php?origin=".$request->origin."&dst=".$request->destination."&is_return=".$is_return."&is_nonstop=true&departureDate=".$request->departureDate."&travelclass=".$request->class."&noofadults=".$request->passenger."&noofchild=0&noofinfant=0&noofres=250";
          
          $url = "http://66.42.124.77/amadeus/flights.php?origin=".$request->origin."&destination=".$request->destination."&departureDate=".$request->departureDate."&is_return=".$is_return."&noofadults=".$request->passenger."&children=1&infants=1&travelClass=".$request->class."&nonStop=true&noofres=250";
          

    	}

    	$curlResponse = $this->curlUrl($url);
     
 
    	if(isset($curlResponse['response'])){
    		$response=json_decode($curlResponse['response']);
          
          /*echo "<pre>";
          print_r($response);
          echo "</pre>";
          die;*/
                    
				if(!isset($response->errors)){
                  
				 if($response!=null){
					
                   
				 	foreach ($response->data as $value) {
				 	
				 		$route=array();
				 		$seat=$value->numberOfBookableSeats;
				 		$price=$value->travelerPricings[0]->price->total;
                        $currency=$value->travelerPricings[0]->price->currency;
                        
 
 
                      
				 		if($value->itineraries!=0){
				 			foreach ($value->itineraries as $value) {
				 				 $origin_airport=DB::table('airports')->Where('codeIataAirport',$value->segments[0]->departure->iataCode)->first();
				 				 $dst_airport=DB::table('airports')->Where('codeIataAirport',$value->segments[0]->arrival->iataCode)->first();
				 				$startRoute=explode(" ",date("d-m-Y H:i:s", strtotime($value->segments[0]->departure->at)));
		    		$endRoute=explode(" ",date("d-m-Y H:i:s", strtotime($value->segments[0]->arrival->at)));
				 				$route[]=array(
				 					'origin'=>$value->segments[0]->departure->iataCode,
				 					'departureDate'=>$startRoute[0],
				 					'departureTime'=>$startRoute[1],
				 					'dst'=>$value->segments[0]->arrival->iataCode,
				 					'returnDate'=>$endRoute[0],
				 					'returntie'=>$endRoute[1],
				 					'numberOfStops'=>$value->segments[0]->numberOfStops,
				 					"origin_airport"=>$origin_airport->nameAirport,
									"dst_airport"=>$dst_airport->nameAirport,
									"duration"=>explode("PT",$value->duration)[1],
									"carrierCode"=>$value->segments[0]->carrierCode,
                                  	"airlines"=>get_object_vars($response->dictionaries->carriers)[$value->segments[0]->carrierCode],                                  											"aircraft"=>get_object_vars($response->dictionaries->aircraft)[$value->segments[0]->aircraft->code]

					 				);
				 			}	
				 		}
				 		
				 		
				 		
					$res[]=array(
						
						"numberOfBookableSeats"=>$seat,
						'route'=>$route,
						'price'=>$price,
                        'currency'=>$currency
					);
				}
                   
             }

			}
          
         
			$origin=$request->origin;
		    $dst=$request->destination;
		    $departureDate=$request->departureDate;
		    $returnDate=$request->returnDate;
		    $customRadio=$request->is_return?1:'0';
		    $passenger=$request->passenger;
		    $class=$request->class;
		   
          
          
          


    	}


        return view('flight-search',compact('res','origin','dst','departureDate','returnDate','customRadio','passenger','class'));
   


	 }



    public function searchFlight_old(Request $request){
    	//print_r($request->all());exit();
    	$date='';
    	if($request->returnDate!=''){
    		$date="&returnDate=".$request->returnDate;
    		$t='true';
    	}else{
    		$date='';
    		$t="false";
    	}
    	if(isset(explode("(",$request->origin)[0]) && isset(explode("(",$request->destination)[0])){
        //if(isset($request->origin) && isset($request->destination)[0])){
    		
    		$url="http://162.217.87.243/flights/Apis.php?origin=".explode("(",$request->origin)[0]."&dst=".explode("(",$request->destination)[0]."&is_return=".$t."&is_nonstop=true&departureDate=".$request->departureDate."&travelclass=".$request->class.$date."&noofadults=".$request->passenger."&noofchild=0&noofinfant=0&noofres=250";

    		//$url ="http://162.217.87.243/flights/Apis.php?origin=MAD&dst=MUC&is_return=false&is_nonstop=true&departureDate=2021-02-26&noofadults=2&noofchild=1&noofinfant=1&travelclass=ECONOMY&is_nonstop=true&noofres=250";

    		// http://162.217.87.243/flights/Apis.php?origin=MAD&dst=MUC&is_return=false&is_nonstop=true&departureDate=2021-02-17&returnDate=2021-03-17
    		//print_r($url);exit;
    		// http://162.217.87.243/flights/Apis.php?origin=MAD&dst=MUC&is_return=false&is_nonstop=true&departureDate=2021-02-17&noofadults=2&noofchild=1&noofinfant=1&travelclass=ECONOMY&is_nonstop=true&noofres=250
    		$curl = curl_init();
    		curl_setopt_array($curl, array(
		    CURLOPT_URL => $url,
		    CURLOPT_RETURNTRANSFER => true,
		    CURLOPT_ENCODING => "",
		    CURLOPT_TIMEOUT => 30000,
		    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		    CURLOPT_CUSTOMREQUEST => "GET",
		    CURLOPT_HTTPHEADER => array(
		        'Content-Type: application/json',
		    ),
		));
		$response = curl_exec($curl);
		$err = curl_error($curl);


		curl_close($curl);

		if ($err) {
		    echo "cURL Error #:" . $err;
		} else {
			
			
			$response=json_decode($response);
			
			dd($response);exit;
			if(isset($response->errors)){
				$res=array();
			}else{
				 $res=array();
				 if($response!=null){
				 	//dd($response->data[0]->numberOfBookableSeats);exit;
				 	foreach ($response->data as $value) {
				 		
				 		
				 		$route=array();
				 		$seat=$value->numberOfBookableSeats;
				 		$price=$value->travelerPricings[0]->price->total;
				 		if($value->itineraries!=0){
				 			foreach ($value->itineraries as $value) {
				 				 $origin_airport=DB::table('airports')->Where('codeIataAirport',$value->segments[0]->departure->iataCode)->first();
				 				 $dst_airport=DB::table('airports')->Where('codeIataAirport',$value->segments[0]->arrival->iataCode)->first();
				 				$startRoute=explode(" ",date("d-m-Y H:i:s", strtotime($value->segments[0]->departure->at)));
		    		$endRoute=explode(" ",date("d-m-Y H:i:s", strtotime($value->segments[0]->arrival->at)));
				 				$route[]=array(
				 					'origin'=>$value->segments[0]->departure->iataCode,
				 					'departureDate'=>$startRoute[0],
				 					'departureTime'=>$startRoute[1],
				 					'dst'=>$value->segments[0]->arrival->iataCode,
				 					'returnDate'=>$endRoute[0],
				 					'returntie'=>$endRoute[1],
				 					'numberOfStops'=>$value->segments[0]->numberOfStops,
				 					"origin_airport"=>$origin_airport->nameAirport,
									"dst_airport"=>$dst_airport->nameAirport,
									"duration"=>explode("PT",$value->duration)[1],
									"carrierCode"=>$value->segments[0]->carrierCode
					 				);
				 			}	
				 		}
				 		
				 		
				 		
					$res[]=array(
						
						"numberOfBookableSeats"=>$seat,
						'route'=>$route,
						'price'=>$price
					);
				}
				 }
				

			}
			//dd($res);exit;
			$origin=$request->origin;
		    $dst=$request->dst;
		    $departureDate=$request->departureDate;
		    $returnDate=$request->returnDate;
		    $customRadio=$request->customRadio;
		    $passenger=$request->passenger;
		    $class=$request->class;
		   
			return view('flight-search',compact('res','origin','dst','departureDate','returnDate','customRadio','passenger','class'));
			// print_r($response);exit;
			
    	}
    		$res=array();
    		$origin='';
		    $dst='';
		    $departureDate=$request->departureDate;
		    $returnDate=$request->returnDate;
		    $customRadio=$request->customRadio;
		    $passenger=$request->passenger;
		    $class=$request->class;
    	return view('flight-search',compact('res','origin','dst','departureDate','returnDate','customRadio','passenger','class'));
    }
    }
  
  
  
  public function curlUrl($url){

    	$curl = curl_init();
		curl_setopt_array($curl, array(
	    CURLOPT_URL => $url,
	    CURLOPT_RETURNTRANSFER => true,
	    CURLOPT_ENCODING => "",
	    CURLOPT_TIMEOUT => 30000,
	    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	    CURLOPT_CUSTOMREQUEST => "GET",
	    CURLOPT_HTTPHEADER => array(
		        'Content-Type: application/json',
		    ),
		));
		$response = curl_exec($curl);
		$err = curl_error($curl);
		curl_close($curl);

		return compact('response','err');

}
  
  
   public function searchFlight(Request $request){
    	//print_r($request->all());exit();

    	$is_return = $request->is_return?'true':'false';
		$res=array();
		$origin=$request->origin;
		$dst=$request->destination;
		$departureDate=$request->departureDate;
		$returnDate=$request->returnDate;
		$customRadio=$is_return;
		$passenger=$request->passenger;
		$class=$request->class;
     	$noofadults = $request->adult;
        $infants = $request->infants;
        $children = $request->children;
     	$nonStop =$request->nonStop;
		$maxprice = 10000;
     
     	if(isset($request->maxprice)){
            $maxprice = $request->maxprice;
        }
     
    	if(isset($request->departureDate) && isset($request->returnDate) && $is_return) {
          	
          
          	$url = "http://66.42.124.77/amadeus/flights.php?origin=".$origin."&destination=".$dst."&departureDate=".$departureDate."&is_return=".$is_return."&returnDate=".$returnDate."&noofadults=".$passenger."&children=1&infants=1&travelClass=".$class."&nonStop=true&noofres=250";

    	}else{
          
          $url = "http://66.42.124.77/amadeus/flights.php?origin=".$origin."&destination=".$dst."&departureDate=".$departureDate."&is_return=".$is_return."&noofadults=".$passenger."&children=1&infants=1&travelClass=".$class."&nonStop=true&noofres=250";
          

    	}

    	$curlResponse = $this->curlUrl($url);
     
    // dd($curlResponse);
 
    	if(isset($curlResponse['response'])){
    		$response=json_decode($curlResponse['response']);
          /*
          echo "<pre>";
          print_r($response);
          echo "</pre>";
         // die; */
                    
				if(!isset($response->errors)){
                  
				 if($response!=null){
					
                   
				 	foreach ($response->data as $value) {
				 	
				 		$route=array();
				 		$seat=$value->numberOfBookableSeats;
				 		$price=$value->travelerPricings[0]->price->total;
                        $currency=$value->travelerPricings[0]->price->currency;
                        
 
 
                      
				 		if($value->itineraries!=0){
				 			foreach ($value->itineraries as $value) {
				 				 $origin_airport=DB::table('airports')->Where('codeIataAirport',$value->segments[0]->departure->iataCode)->first();
				 				 $dst_airport=DB::table('airports')->Where('codeIataAirport',$value->segments[0]->arrival->iataCode)->first();
				 				$startRoute=explode(" ",date("d-m-Y H:i:s", strtotime($value->segments[0]->departure->at)));
		    		$endRoute=explode(" ",date("d-m-Y H:i:s", strtotime($value->segments[0]->arrival->at)));
				 				$route[]=array(
				 					'origin'=>$value->segments[0]->departure->iataCode,
				 					'departureDate'=>$startRoute[0],
				 					'departureTime'=>$startRoute[1],
				 					'dst'=>$value->segments[0]->arrival->iataCode,
				 					'returnDate'=>$endRoute[0],
				 					'returntie'=>$endRoute[1],
				 					'numberOfStops'=>$value->segments[0]->numberOfStops,
				 					"origin_airport"=>$origin_airport->nameAirport,
									"dst_airport"=>$dst_airport->nameAirport,
									"duration"=>explode("PT",$value->duration)[1],
									"carrierCode"=>$value->segments[0]->carrierCode,
                                  	"airlines"=>get_object_vars($response->dictionaries->carriers)[$value->segments[0]->carrierCode],                                  											"aircraft"=>get_object_vars($response->dictionaries->aircraft)[$value->segments[0]->aircraft->code]

					 				);
				 			}	
				 		}
				 		
				 		
				 		
					$res[]=array(
						
						"numberOfBookableSeats"=>$seat,
						'route'=>$route,
						'price'=>$price,
                        'currency'=>$currency
					);
				}
                   
             }

			}
          
         
			$origin=$request->origin;
		    $dst=$request->destination;
		    $departureDate=$request->departureDate;
		    $returnDate=$request->returnDate;
		    $customRadio=$request->is_return?1:'0';
		    $passenger=$request->passenger;
		    $class=$request->class;
		   
          
          
          


    	}


        return view('flight-search',compact('res','origin','dst','departureDate','returnDate','customRadio','passenger','class','maxprice','noofadults','infants','children','nonStop'));
   }

   public function bookingDetailsFlight(Request $request){

   	$data['data'] = json_decode($_POST['obj']);
  
   	return view('booking-details',$data);

   } 
  
  public function sendMailsAndThankyou(Request $request){
  	// the message
  //	var_dump($_POST);
		$msg = "First line of text\nSecond line of text";

		// use wordwrap() if lines are longer than 70 characters
		$msg = wordwrap($msg,70);

		// send email
		$data['data'] = json_decode($_POST['obj']);
		$data['post_data'] = $_POST;
		 Mail::send('email',$data,function ($message) {
		    $message->from('us@example.com', 'Cheap Flights First');
		    $message->subject('Booking Details From Cheap Flights First');
		    $message->to($_POST['email'])->cc('sharmasumi1988@gmail.com');
		});
		//return view('email',$data);
			return view('thank-you',$data);
		//mail("sharmasumi1988@gmail.com","My subject",$msg);								
  }
  
}
