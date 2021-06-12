<?php

/*
Plugin Name: Shortcode Plugin
Plugin URI: 
Description: This is a shortcode assignment 
Author: Wasajja Kimuli Julius
Author URI: techrafiki.com
Version: 1.0
*/
function loadteachrafiki_func( $atts ) {
	$a = shortcode_atts( array(
		'news' => 'https://techrafiki.com/news',
		'tech' => 'https://techrafiki.com/tech',
	), $atts );

	return 
 // here it outputs the element in the array ====>>>>     " <div>   {$a['news']}  </div>  "
 //it out is the URL of the news attribute


//here i cannot output the element that has the 
'<div>
<object type="text/html" 

data={$a['news']}

width="1000px" height="1600px" 
style="overflow:auto;border:5px ridge blue">

</object>
</div>'
;
}
add_shortcode( 'techrafiki', 'loadteachrafiki_func' );

