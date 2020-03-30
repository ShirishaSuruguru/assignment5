<?php
/*
Plugin Name: Counting words
\Version: 1.0
name:Shirisha suruguru(8622560)
*/
//This function creates number of plugins of word count 
function Count_Filter ($number_of_words) {
	return $number_of_words . " (" . str_word_count($number_of_words) . " Words in the text.)"; 
}

// Calling the function
	add_Filter("the_content", "Count_Filter");
?>