<?php
/*
Plugin Name: String  Filter
Version: 1.0
name: shirisha suruguru(8622560
)
*/
function replacestring ($str) {
	$filter = array(
		'facebook' => '<a href="https://www.facebook.com/">facebook</a>', // facebook text will replace by facebook link
		'language' => '<p>code</p>', // language will replace by code
		'Java' => '<p> Programming langauge</p>' // java replace by Programming language
	);

	$str = str_replace(array_keys($filter), $filter, $str; 
	  return $str; // returns the value
	}

add_filter ('pre_comment_content', 'replacestring'); 
?>