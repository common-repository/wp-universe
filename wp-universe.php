<?php  

/*

	Plugin Name: WP-Universe
	Plugin URI: http://www.huseyinuslu.net/wp-universe/
	Description: WP-Universe creates a blog universe based on categories of a Wordpress blog.
	Version: 0.1
	Author: Huseyin Uslu
	Author URI: http://www.huseyinuslu.net

*/

/*  
	WP-Universe - http://www.huseyinuslu.net/wp-universe/
	WP-Universe creates a blog universe based on categories of a Wordpress blog.

	Huseyin Uslu < shalafirasitlin@gmail.com | http://www.huseyinuslu.net >
*/

add_action('pre_get_posts', 'wp_universe_set_post_filters');
add_action('init', 'wp_universe_set_init');


function check_matched_url($url)
{
	$cats=get_categories();
	foreach($cats as $cat)
	{
		if($cat->category_description==$url)
			return $cat->cat_ID;
	}
	return -1;
}

function wp_universe_set_init()
{
	global $wp_object_cache;


	$host="http://" . strtolower($_SERVER['SERVER_NAME']);
	$ret=check_matched_url($host);
	if($ret!=-1)
		$wp_object_cache->cache[options][alloptions][siteurl]=$host;
}


function wp_universe_set_post_filters($wp_obj)
{
	$ret=check_matched_url(get_bloginfo('url'));
	if($ret!=-1)
	{
		$wp_obj->query_vars[cat]=$ret;
		return;
	}		
}



?>