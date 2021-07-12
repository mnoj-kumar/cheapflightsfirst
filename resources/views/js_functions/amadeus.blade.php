<script>
	<?php 
		if(Session::get('org_data') != null && Session::get('org_data') != ''){
			$org_data = Session::get('org_data');
		}else{
			$org_data = [];
		}
		if(Session::get('dep_data') != null && Session::get('dep_data') != ''){
			$dep_data = Session::get('dep_data');
		}else{
			$dep_data = [];
		}
	?>
	var org_data = <?php print_r($org_data) ?>;
	var dep_data = <?php print_r($dep_data) ?>;
	$(function() {
	    function log(message) {
			$("<div>").text(message).prependTo("#log");
			$("#log").scrollTop(0);
		}
		/*
			$("#origin").keyup(function(){
				org_data = [];
			});

			$("#destination").keyup(function(){
				dep_data = [];
			});
		*/

		$("#origin").autocomplete({
			source: function (request, response) {
				$.ajax({
					url: "{{url('airport-search')}}",
					dataType: "json",
					data: {
						term: request.term,
						type: 'origin'
					},
					beforeSend: function(){
			            $("#origin").parent().find(".search_loader").css('display','inline-block');
			        },
					success: function (data) {//console.log(data);
						//response(JSON.parse(data));
						response(data);
						org_data = data;
						$(".search_loader").hide();
					}
				});
			},
			minLength: 1,
			select: function (event, ui) {
				//console.log(event);
				/*
					console.log(ui.item ?
					"Selected: " + ui.item.label :
					"Nothing selected, input was " + this.value);
					var id = "#" + $(this).attr('id');
				*/
				//console.log(id);
				setTimeout(function () {
					$("#origin_hidden").val(ui.item.code);
					$("#origin").val(ui.item.text);
					$("#origin-error").hide();
					$("#origin").blur();
				}, 0);
				//$('.trip_btn').attr('disabled',false);//console.log(org_data);
				//alert("demo");
			},
			create:function(){
				$(this).data( "ui-autocomplete" )._renderItem = function( ul, item ) {
					var splt = item.value.split(",");
  					var splt2 = splt[1].split("(");
      				return $( "<li disabled>" ).data( "ui-autocomplete-item", item ).append( "<div><strong>" + item.text + "</strong><span>"  + splt2[0] +  "</span></div>" ).appendTo( ul );
    			};
			}
		})
		  
		$("#destination").autocomplete({
			source: function (request, response) {
				$.ajax({
					url: "{{url('airport-search')}}",
					dataType: "json",
					data: {
						term: request.term,
						type: 'destination'
					},
					beforeSend: function(){
			              $("#destination").parent().find(".search_loader").css('display','inline-block');
			        },
					success: function (data) {
						//response(JSON.parse(data));
						response(data);
						dep_data = data;
						$(".search_loader").hide();//console.log(data);
					}
				});
			},
			minLength: 1,
			select: function (event, ui) {
				/*
					console.log(ui.item ?
					"Selected: " + ui.item.label :
					"Nothing selected, input was " + this.value);
					var id = "#" + $(this).attr('id');
				*/
				//console.log(id);
				setTimeout(function () {
					$("#destination_hidden").val(ui.item.code);
					$("#destination").val(ui.item.text);
					$("#destination-error").hide();
					$("#destination").blur();
				}, 0);
				//$('.trip_btn').attr('disabled',false);//console.log(dep_data);
				//alert("demo");
			},
			create:function(){
				$(this).data( "ui-autocomplete" )._renderItem = function( ul, item ) {
					var splt = item.value.split(",");
	  				var splt2 = splt[1].split("(");
	      			return $( "<li disabled>" ).data( "ui-autocomplete-item", item ).append( "<div><strong>" + item.text + "</strong><span>"  + splt2[0] +  "</span></div>" ).appendTo( ul );
    			};
			}
		})

		//alert(org_data);

		$('#origin').on('blur',function(){
			if(org_data != undefined && org_data.length){
				var notfound = true;
				var org = $('#origin').val();
				if(org != '' && org != undefined){
					$.each(org_data, function (key,item) {
			        	if(item.text == org){
			        		notfound = false;
			        	}
				    });
				    if(notfound){
						$('#origin').val(org_data[0].text);
						$("#origin-error").hide();
					}
				}
			}
		});

		$('#destination').on('blur',function(){
			if(dep_data != undefined &&  dep_data.length){
				var notfound = true;
				var dep = $('#destination').val();
				if(dep != '' && dep != undefined){
					$.each(dep_data, function (key,item) {
			        	if(item.text == dep){
			        		notfound = false;
			        	}
				    });
				    if(notfound){
						$('#destination').val(dep_data[0].text);
						$("#destination-error").hide();
					}
				}
			}
		});

		$(document).ready(function(){
			$('.loc-swap,.exchange').click(function(){
				if(dep_data.length && org_data.length){
		       		/*
		       			var temp = org_data;
		       			org_data = dep_data;
		       			dep_data = temp;
		       		*/
		       		//swapSessionData(org_data,dep_data);
		       		var origin = $('#origin').val();
			        var destination = $('#destination').val();
		       		if(origin != '' && destination != ''){
		       			swapSessionData(origin,destination);
		       		}
		       	}else{
		       		if(!dep_data.length){
		       			$("#destination-error").show().text("First select valid destination.");
		       		}
		       		if(!org_data.length){
		       			$("#origin-error").show().text("First select valid origin.");
		       		}
		       	}
	        });

	        /*
	        	$('.exchange').click(function(){
					if(dep_data.length && org_data.length){
		       			var temp = org_data;
		       			org_data = dep_data;
		       			dep_data = temp;
		       			swapSessionData(org_data,dep_data);
		       			var origin = $('#origin').val();
			        	var destination = $('#destination').val();
			        	$('#origin').val(destination);
			        	$('#destination').val(origin);
		       		}else{
			       		$("#destination-error").show().text("First select valid origin and destination.");
		       		}
	        	});
	        */

	        $('#1waytrip').click(function(){
		        if($('#1waytrip').prop("checked") == true){
		        	$("#t-end-error").hide();
		        }
		    });

	        $('#rndtrip').click(function(){
		        if($('#rndtrip').prop("checked") == true){
		        	$("#t-start-error").hide();
		        }
		    });

	       	$('#flt-srch-frm').trigger("reset");
			/*
				$('#origin').keyup(function(){
					$('.trip_btn').attr('disabled','disabled');
				});
				$('#destination').keyup(function(){
					$('.trip_btn').attr('disabled','disabled');
				});
			*/
	      	$('.trip_btn').click(function(e){
	      		/*
	      			console.log("first org_data :");
	      			console.log(org_data);
	      			console.log("first dep_data :");
	      			console.log(dep_data);
	      		*/
		        e.preventDefault();
		        var valid_origin = false;
		        var valid_destination = false;
		        var valid_depart_date = true;
		        var valid_return_date = true;
		        var origin = $('#origin').val();
		        //console.log(origin);
		        var destination = $('#destination').val();
		        //console.log(destination);
		        var msg = "Invalid search";
		        var orgls = origin.split(" ");
		        //console.log(orgls[orgls.length-2]);
		        var depls = destination.split(" ");
		        //console.log(depls[depls.length-2]);
		        if(orgls.length){
			        $.ajax({
						url: "{{url('Amedeus/validate-airport')}}",
						dataType: "json",
						async: false,
						data: {
							term: orgls[orgls.length-2],
							type: 'origin'
						},
						beforeSend: function(){
							//$('.trip_btn').addClass('ajexhit');
						},
						success: function (data) {
							//console.log("second org_data :");console.log(data);
							org_data = data;
							//$('.trip_btn').removeClass('ajexhit');
						}
					});
					//console.log("second org_data :");console.log(org_data);
		    	}
			    if(depls.length){
			        $.ajax({
						url: "{{url('Amedeus/validate-airport')}}",
						dataType: "json",
						async: false,
						data: {
							term: depls[depls.length-2],
							type: 'destination'
						},
						beforeSend: function(){
							//$('.trip_btn').addClass('ajexhit');
						},
						success: function (data) {//console.log("second org_data :");console.log(data);
							dep_data = data;
							//$('.trip_btn').removeClass('ajexhit');
						}
					});//console.log("second org_data :");console.log(dep_data);
			    }
		        if(origin != ""){
			        $.each(org_data, function (key,item) {
			        	if(item.text == origin){
			        		//console.log(key + " " +item.value + "----" + origin);
		    	    		valid_origin = true;
		        		}
			      		//console.log(item.value);
			    	});
				    if(valid_origin == false){
			    		msg = 'Invalid origin';
			   			$("#origin-error").show().text(msg);
		    	    }
				}else{
					valid_origin = false;
					$("#origin-error").show().text("Origin required");
				}
			    if(destination != ""){
				    $.each(dep_data, function (key,item) {
			        	if(item.text == destination){
			        		//console.log(key + " " +item.value + "----" + origin);
		    	    		valid_destination = true;
		        		}
				      	//console.log(item.value);
			    	});
				    if(valid_destination == false){
			    		msg = 'Invalid destination';
			   			$("#destination-error").show().text(msg);
				    }
				}else{
					valid_origin = false;
					$("#destination-error").show().text("Destination required");
				}
				if($('#1waytrip').prop("checked") == true){
					if($('#start-date').val() == "" || $('#start-date').val() == 'null'){
						valid_depart_date = false;
						$("#t-start-error").show().text("Departure date required");
						//console.log('empty in');
					}
				}
				if($('#rndtrip').prop("checked") == true){
					//console.log('round');
					if($('#start-date').val() == "" || $('#start-date').val() == 'null'){
						valid_depart_date = false;
						$("#t-start-error").show().text("Departure date required");
						//console.log('empty in');
					}
					if($('#end-date').val() == "" || $('#end-date').val() == 'null'){
						valid_return_date = false;
						$("#t-end-error").show().text("Returning date required");
						//console.log('empty out');
					}
				}
			    if(valid_origin && valid_destination && valid_depart_date && valid_return_date){
			    	if(origin !== destination){
			    		//$('#flt-srch-frm').submit();
		    			var new_url = '{{url('/')}}';
			    		let origin = $('#origin_hidden').val();
			    		//console.log(origin);
		        		let destination = $('#destination_hidden').val();
		        		//console.log(destination);
		        		var departure_date = $('#start-date').val();
		        		departure_date = departure_date.replace(/-/g, "");
		        		var return_date = $('#end-date').val();
		        		return_date = return_date.replace(/-/g, "");
		        		var clss = $('#travel_class').val();
		        		//alert(clss);
		        		if(clss !== '' && clss !== null && clss !== undefined){
			        		if(clss == 'ECONOMY')
			        			clss = 'E';
			        		if(clss == 'BUSINESS')
			        			clss = 'B';
			        		if(clss == 'FIRST')
			        			clss = 'F';
			        	}else{
		        			clss = $('input[name=travel_class]:checked').val();
			        		if(clss == 'ECONOMY')
			        			clss = 'E';
			        		if(clss == 'BUSINESS')
			        			clss = 'B';
			        		if(clss == 'FIRST')
			        			clss = 'F';
			        	}
	        			var trp = $('input[name=trip]:checked').val();
		        		if(trp !== '' && trp !== null && trp !== undefined){
			        		if(trp == 'one_way')
			        			trp = 'OT';
			        		if(trp == 'round_trip')
			        			trp = 'RT';
			        		if(trp == 'multi_city')
			        			trp = 'MT';
		        		}else{
			        		trp = '';
			        	}
		        		var adt = $('input[name=adult]').val();
		        		if(adt == '' && adt == null && trp !== undefined){
		        			adt = '';
		        		}
		        		var chd = $('input[name=children]').val();
		        		if(chd == '' && chd == null && trp !== undefined){
		        			chd = '';
		        		}
		        		var inft = $('input[name=infants]').val();
		        		if(inft == '' && inft == null && trp !== undefined){
		        			inft = '';
		        		}

						var ns = $('input[name=is_nonstop]:checked').val();
		        		if(ns == '' || ns == null || ns == undefined){
		        			ns = 'false';
		        		}

						var rfd = $('input[name=refundable]:checked').val();
		        		if(rfd == '' || rfd == null || rfd == undefined){
		        			rfd = 'false';
		        		}
			    		new_url = new_url + '/flight/search?D='+origin+'-'+departure_date+'&R='+destination+'-'+return_date+'&CL='+clss+'&TR='+trp+'&PAX=A-'+adt+'-C-'+chd+'-I-'+inft+'&NS='+ns+'&RFD='+rfd;
			    		//console.log(new_url);
			    		window.location.href = new_url;
			    		return false;
		    		}else{
		    			$("#destination-error").show().text("Origin and Destination can not be same.");
		    			return false;
		    		}
		    	}else{
		    		return false;
		 	   	}
	      	});
	   	});
	});
	/*
		function swapSessionData(org_data, dep_data){
			$.ajax({
				url: "{{url('swap-airport-data')}}",
				dataType: "json",
				data: {
					org_data: org_data,
					dep_data: dep_data
				},
				beforeSend: function(){
	            	$("#origin").parent().find(".search_loader").css('display','inline-block');
	            	$("#destination").parent().find(".search_loader").css('display','inline-block');
	        	},
				success: function (data) {
					$(".search_loader").hide();
				}
			});
		}
	*/

	function swapSessionData(origin, destination){
		$.ajax({
			url: "{{url('swap-airport-data')}}",
			dataType: "json",
			data: {
				origin: origin,
				destination: destination
			},
			beforeSend: function(){
	            $("#origin").parent().find(".search_loader").css('display','inline-block');
	            $("#destination").parent().find(".search_loader").css('display','inline-block');
	        },
			success: function (data) {
				$('#origin').val(destination);
		        $('#destination').val(origin);
		        let origin_hidden = $('#origin_hidden').val();
		        //console.log(origin);
        		let destination_hidden = $('#destination_hidden').val();
        		//console.log(destination);
        		$('#origin_hidden').val(destination_hidden);
        		//console.log(origin);
        		$('#destination_hidden').val(origin_hidden);
        		//console.log(destination);
		        /*
		        	console.log("First org_data: ");
		        	console.log(org_data);
		        	console.log("First dep_data: ");
		        	console.log(dep_data);
		        */
		        org_data = data.dep_data;
		        dep_data = data.org_data;
		        /*
		        	console.log("Second org_data: ");
		        	console.log(org_data);
		        	console.log("Second dep_data: ");
		        	console.log(dep_data);
		        */
				$(".search_loader").hide();
			}
		});
	}

	$(function() {
		//var org_data;
		//var dep_data;
		/////passenger auto complete
		$(".fname").autocomplete({
			source: function (request, response) {
				//console.log(request);
                $.ajax({
					url: "ajax/co-traveler/autocomplete",
					dataType: "json",
					data: {
						term: request.term
					},
					beforeSend: function(){
	                    var x = document.activeElement.id;
                        var getTy=x.split('_');
                        console.log(getTy);
					   	<?php if(isset(Auth::user()->id)) { ?>
                        	$('#search-loader_'+getTy[1]).show();
						<?php } ?>
		            	//  $("#fname_adult").parent().find(".search_loader").css('display','inline-block');
		        	},
					success: function (data) {
						//alert("ok");
        	             $('.search_loader').hide();
						//console.log("fff");
						response(data);
						//dep_data = data;
						//$(".search_loader").hide();
					}
				});
			},
			minLength: 1,
			select: function (event, ui) {
				/*
					console.log(ui.item ?
					"Selected: " + ui.item.label :
					"Nothing selected, input was " + this.value);
				*/
				var id = "#" + $(this).attr('id');
				var getType=id.split('_');
				var dob=(ui.item.dob).split('-');
				var dob_year = dob[0];
				var dob_month = dob[1];
				var dob_day = dob[2];
				var expiry_date=(ui.item.expiry_date).split('-');
				var expiry_date_year = expiry_date[0];
				var expiry_date_month = expiry_date[1];
				var expiry_date_day = expiry_date[2];
				//console.log(getType[1]);
				setTimeout(function () {
					//$("#fname_hidden").val(ui.item.code);	
					$("#fname_"+getType[1]).empty().val(ui.item.value);
					$("#m-name_"+getType[1]).empty().val(ui.item.middle_name);
					$("#l-name_"+getType[1]).empty().val(ui.item.last_name);
					$("#dob-month_"+getType[1]).empty().val(dob_month);
					$("#dob-day_"+getType[1]).empty().val(dob_day);
					$("#dob-year_"+getType[1]).empty().val(dob_year);
					$("#gender_"+getType[1]).prop('selectedIndex',0).val(ui.item.gender);
					//$("#nationality_"+getType[1]).val(ui.item.issue_country);
					$("#issue-no_"+getType[1]).prop('selectedIndex',0).val(ui.item.issue_country);
					$("#pass-no_"+getType[1]).empty().val(ui.item.document_no);
					//$("#expire_"+getType[1]).val(ui.item.expiry_date);
					$("#expiry-month_"+getType[1]).empty().val(expiry_date_month);
					$("#expiry-day_"+getType[1]).empty().val(expiry_date_day);
					$("#expiry-year_"+getType[1]).empty().val(expiry_date_year);
				}, 0);
				//$('.trip_btn').attr('disabled',false);//console.log(dep_data);
				//alert("demo");
			}
		});
		///////End passenger auto complete
	});
</script>