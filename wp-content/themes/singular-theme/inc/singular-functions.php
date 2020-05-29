<?php
// FEED READER: Accept an RSS Feed URL and return an HTML block of articles
// $feed_url: The RSS Feed URL (string, required)
// $article_limit: The maximum number of articles you want to include (number, optional)
function singular_feed_reader( $feed_url, $article_limit = false ) {

  // Read the file into a string
  $content = file_get_contents( $feed_url );

  // Convert the string into an XML object
  $x = new SimpleXmlElement( $content );

  // Start code block
  $feed_return = '<div class="rss-feed-block">';

  // Set article item count
  $article_item = 1;

  // Add child for each XNL node
  foreach( $x->channel->item as $entry ) {

    // Add the article if 1. an article limit was set and we're still below the limit || 2. no article limit was set
    if ( ( $article_limit && $article_item <= $article_limit ) || !$article_limit ) {

      // Create usable date from pubDate node
      $feed_date = date( 'F j, Y', strtotime( $entry->pubDate ) );

      // Strip images and tags from the description node
      $feed_description = strip_tags( $entry->description, ['i','em','strong','b'] );

      // Assemble the feed item
      $feed_return .= '<div class="rss-feed-item item-'.$article_item.'">';
      $feed_return .= '<a class="rss-feed-item-link" href="'.$entry->link.'" title="'.$entry->title.'">';
      $feed_return .= '<span class="rss-feed-item-date">'.$feed_date.'</span>';
      $feed_return .= '<span class="rss-feed-item-title">'.$entry->title.'</span>';
      $feed_return .= '<span class="rss-feed-item-description">'.$feed_description.'</span>';
      $feed_return .= '</a>';
      $feed_return .= '</div>';

      // Increment the article item count
      $article_item++;

    } else {

      // Stop processing the XML feed if both conditional arguments fail
      break;

    }

  }

  // Close code block
  $feed_return .= '</div>';

  // Return code block
  return $feed_return;

}
?>
