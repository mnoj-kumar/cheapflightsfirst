<?php
namespace App\Helpers;
if (!function_exists('getuniqueairlines')) {
   
    function getuniqueairlines($bytes, $decimals = 2)
    {
        $sz = 'BKMGTPE';
        $factor = (int)floor((strlen($bytes) - 1) / 3);
        return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . $sz[$factor];
 
    }
}
 

}
?>