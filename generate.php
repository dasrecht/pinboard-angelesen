<?php
include('vendor/autoload.php');
include('config.php');

// Include Intro Text
echo file_exists('intro.md') ? file_get_contents('intro.md') : "";

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
  $article['title'] = str_replace("[priv] ","", $item->get_title());
  $article['url'] = $item->get_permalink();
  $article['parseurl'] =  parse_url($item->get_permalink());
  $article['host'] = $article['parseurl']['host'];
  $article['comment'] = html_entity_decode($item->get_content());
  // Generate Output
  echo "[".$article['title']."](".$article['url'].") <span style=\"color: #999999;\">(".$article['host'].")</span>\n\n";
  echo  $article['comment'];
  echo "\n\n";
}
