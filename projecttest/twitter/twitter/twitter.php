<?php
  session_start();
  require_once("twitteroauth/twitteroauth.php");

  $apikey = "Fx90alMHgDEtnkKbjjUqZxXir";
  $apisecret = "gYpyNykbcLMs07BDrcbGuPCRo0aTjs71qOjXC2VuIdahsjL37a";
  $accesstoken = "3268527410-u3nwgCxGHGqv3IBeXmvdDwTamsWfLAs1mqerjfh";
  $accesssecret = "Rb1k4BL84fE85lriidHc4GFPLtZ8ViMLO2Xq2SDaBFS49";

  $connection = new TwitterOAuth($apikey, $apisecret, $accesstoken, $accesssecret);

  $tweets = $connection->post("https://api.twitter.com/1.1/statuses/mentions_timeline.json?count=2");

  foreach($tweets as $tweet) {
    echo $tweet->text;
    echo "<br />";
    echo $tweet->favorite_count;
    echo "<br />";
  }

?>
