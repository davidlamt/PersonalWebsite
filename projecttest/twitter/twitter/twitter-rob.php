<?php


	/*
	
	This is Rob's code from The Complete Web Developer Course and not part of the standard TwitterOAth codebase. Only use it if you can't get Twitter working yourself!
	
	-- Rob Feb 2015
	
	*/
	
	
	session_start();
	
	require_once("twitteroauth/twitteroauth.php");
	
	// Fill these in with your keys
	
	$apikey="";
	$apisecret="";
	$accesstoken="";
	$accesssecret="";


	$connection = new TwitterOAuth($apikey, $apisecret, $accesstoken, $accesssecret);
	
		$response = $connection->get("https://api.twitter.com/1.1/statuses/mentions_timeline.json");
	
	print_r($response);
		
	foreach ($response as $tweet) {
	
	$favorites=$tweet->favorite_count;
	
		if ($favorites>=2) {
		
		$embed = $connection->get("https://api.twitter.com/1.1/statuses/oembed.json?id=".$tweet->id);
		
		echo $embed->html;
	
		
		}
		
	
	}
	
	
?>

fsef