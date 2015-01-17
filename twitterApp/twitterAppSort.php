<?php
	session_start();

	require "vendor/autoload.php";
	use Abraham\TwitterOAuth\TwitterOAuth;

	$consumerKey= "uNJ3aNEaVBeGB8BXSCE1EkJVb";
	$consumerSecret = "3Cl0HK7HSGZYMZoIMYHPih3P9iDZhoxPNA6L1IgeaD7Cqf0NhB";
	$accessToken = "2762377286-RRd3TrWx2e2GVxNN1bHlldIrK3vLq4LbibVesYe";
	$accessSecret = "iDFrxzUgtIpVqmyrrA516qukpZbLeDBhP545nFv85kwX6";

	$connection = new TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accessSecret);
	
	$tweets = $connection->get("statuses/home_timeline", array("count" => 10, "exclude_replies" => true));

	foreach ($tweets as $tweet) {
		if($tweet->favorite_count > 10){
			
			$embed = $connection->get("statuses/oembed", array("id" => $tweet->id));
			echo $embed->html;
		}
	}