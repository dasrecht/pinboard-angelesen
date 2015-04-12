<?php
include('simplepie/autoloader.php');
include('config.php');

// Include Intro Text
if(file_exists('intro.md') {
  include('intro.md');
}

$feed = new SimplePie();
$feed->set_feed_url($feedurl);
$feed->set_cache_duration('10');
// Initialize the whole SimplePie object.  Read the feed, process it, parse it, cache it, and
// all that other good stuff.  The feed's information will not be available to SimplePie before
// this is called.
$success = $feed->init();

// We'll make sure that the right content type and character encoding gets set automatically.
// This function will grab the proper character encoding, as well as set the content type to text/html.
$feed->handle_content_type();

// When we end our PHP block, we want to make sure our DOCTYPE is on the top line to make
// sure that the browser snaps into Standards Mode.
foreach($feed->get_items() as $item) {
echo "[".str_replace("[priv]","", $item->get_title())."](".$item->get_permalink().")\n\n";
echo  html_entity_decode($item->get_content());
echo "\n\n";
}
