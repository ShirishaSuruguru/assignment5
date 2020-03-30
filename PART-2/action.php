<?php
	/*
		Plugin Name: Action Plugin
        Version: 1.0
        name: shirisha suruguru(8622560)
	*/

	// Display function of a number
	function display($number){
        
        //API is requesting data
		$request = wp_remote_get( 'http://history.muffinlabs.com/date' ); 
		if( is_wp_error( $request ) ) { 
            //returing error
		  return false; 
	}

	$body = wp_remote_retrieve_body( $request ); 
    // getting it from json
	$data = json_decode( $body ); 
		
		if( !empty( $data ) ) {	

		if (is_array($data) || is_object($data)) 
			{
				print_r($data->data->Events[1]->text); 
				print_r($data->data->Events[1]->year); 
			}
		}
	}

	add_action('wp_footer', 'display');
?>