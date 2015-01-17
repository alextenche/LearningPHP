<?php

namespace MyApp;

class Tweet {

	public function getJSON(){
	
		// calculate this->date into relative time
		$this->ago = "5 minutes ago";
		
		// look uo live retweets dynamically
		$this->retweets = rand(0,300);
		
		return json_encode($this);
	}
}