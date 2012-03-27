<?php
/*
Plugin Name: Twitter Shortcode
Plugin URI: http://indexdigital.com.br
Description: Testando um plugin
Author: Renan Gurgel
Version: 1.0
Author URI: http://renangurgel.com.br
*/

add_shortcode('twitter', 'twitter_shortcode');

function twitter_shortcode($atts, $content) {
	$atts = shortcode_atts(
		array(
			'username' => 'gurgelrenan',
			'content' => !empty($content) ? $content : 'Follow me on twitter!',
			'show_tweets' => false,
			'tweet_reset_time' => 10,
			'num_tweets' => 5
		), $atts
	);
	
	extract($atts); // pega os indices dos arrays e transforma em variaveis
	
	if($show_tweets) {
		$tweetes = fetch_tweets($num_tweets, $username, $tweet_reset_time);
	}
		
	return "$tweetes <p><a href='http://twitter.com/$username'>$content</a></p>";
}

function fetch_tweets($num_tweets, $username, $tweet_reset_time) {
	global $id; //id do post
	$recent_tweets = get_post_meta($id, jw_recent_tweets);
	echo '<pre>';
	print_r($recent_tweets);
	die();
	$tweets = curl("http://twitter.com/statuses/user_timeline/$username.json");
	
	$data = array();
	for ($i = 0; $i < $num_tweets; $i++) {
		$data[] = $tweets[$i]->text;
	}
	
	$recent_tweets = array( (int)date( 'i', time() ) );
	$recent_tweets[] = '<ul class="jw_tweets"><li>'. implode('<li></li>', $data) . '</li></ul>';
	
	cache($recent_tweets);
	
	return $recent_tweets[1];
}

function curl($url) {
	
	$c = curl_init($url);
	curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($c, CURLOPT_CONNECTTIMEOUT, 3);
	curl_setopt($c, CURLOPT_TIMEOUT, 5);
	return json_decode( curl_exec($c) );
}

function cache($recent_tweets) {
	
	global $id; //id do post
	add_post_meta($id, 'jw_recent_tweets', $recent_tweets);
	
}