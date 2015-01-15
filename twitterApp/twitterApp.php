<?php
	session_start();

	require "vendor/autoload.php";
	use Abraham\TwitterOAuth\TwitterOAuth;

	$consumerKey= "uNJ3aNEaVBeGB8BXSCE1EkJVb";
	$consumerSecret = "3Cl0HK7HSGZYMZoIMYHPih3P9iDZhoxPNA6L1IgeaD7Cqf0NhB";
	$accessToken = "2762377286-RRd3TrWx2e2GVxNN1bHlldIrK3vLq4LbibVesYe";
	$accessSecret = "iDFrxzUgtIpVqmyrrA516qukpZbLeDBhP545nFv85kwX6";

	$connection = new TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accessSecret);
	$content = $connection->get("account/verify_credentials");
	print_r($content);

	


	$tweets = $connection->get('https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=twitterapi&count=2');
	print_r($tweets);

?>