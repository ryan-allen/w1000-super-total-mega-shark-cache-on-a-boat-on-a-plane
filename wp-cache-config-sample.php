<?php
/*
WP-Cache Config Sample File

See wp-cache.php for author details.
*/

$cache_enabled = false; //Added by WP-Cache Manager
$cache_max_time = 3600; //in seconds
//$use_flock = true; // Set it tru or false if you know what to use
$cache_path = ABSPATH . 'wp-content/cache/';
$file_prefix = 'wp-cache-';

// Array of files that have 'wp-' but should still be cached 
$cache_acceptable_files = array( 'wp-atom.php', 'wp-comments-popup.php', 'wp-commentsrss2.php', 'wp-links-opml.php', 'wp-locations.php', 'wp-rdf.php', 'wp-rss.php', 'wp-rss2.php');

$cache_rejected_uri = array('wp-');
$cache_rejected_user_agent = array ( 0 => 'bot', 1 => 'ia_archive', 2 => 'slurp', 3 => 'crawl', 4 => 'spider');

// Just modify it if you have conflicts with semaphores
$sem_id = 5419;

if ( '/' != substr($cache_path, -1)) {
	$cache_path .= '/';
}

?>
