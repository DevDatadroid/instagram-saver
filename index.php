<?php
// Instagram Post URL
$post_url = 'https://www.instagram.com/p/XXXXXXXXX/';

// Get Instagram Post Data
$post_data = file_get_contents($post_url);

// Extract Image/Video URL
preg_match('/"display_url":"(.*?)"/', $post_data, $matches);
$image_url = $matches[1];

// Save Image/Video
file_put_contents('saved_instagram_post.jpg', file_get_contents($image_url));

echo 'Instagram post saved successfully!';
?>
