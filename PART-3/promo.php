<?php
/*
 Plugin Name: Promo Code 
 Version: 1.0
 name: shirisha suruguru(8622560)
*/
// ADDING SHORT CODE
add_shortcode('promo', 'promocode');	

function promocode()	
{
  $post= strtotime(get_the_date()); 
 //Fetching current time
 $present= time(); 
 $interval = $present - $post;
	   
//Setting interval in seconds
if($interval > 152600) { 
 return 'Sorry, Your code has been expired'; //Returning error message 
 } else {
    return 'PROMONUMBER'; //Returning promo code
	}
	}
?>
