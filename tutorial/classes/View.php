<?php
// Managing the Code -- OOP: MVC -- View

class View
{
	public $title	= '';	
	public $body	= array();
	public function setTitle($newTitle)
	{
		$this->title = sprintf("<title>%s</title>\n", $newTitle);
	}
	public function render()
	{
		$output = "<!DOCTYPE html>\n";
		$output .= "<html>\n";
		$output .= "<head>\n";
		$output .= $this->title;
		$output .= '<meta http-equiv="content-type" content="text/html;charset=utf-8" />' . PHP_EOL;
		$output .= "</head>\n";
		$output .= "<body>\n";
		foreach ($this->body as $line) {
			$output .= $line . PHP_EOL;
		}
		$output .= "</body>\n";
		$output .= "</html>\n";
		return $output;
	}
}
