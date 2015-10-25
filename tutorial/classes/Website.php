<?php
// Managing the Code -- OOP: Defining Classes

class Website {
	// properties
	public $title	= '';
	public $meta	= '';
	public $body	= '';
	// methods
	public function docType()
	{
		return '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> '
			   . PHP_EOL
			   . '<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">' . PHP_EOL;
	}
	public function head()
	{
		// use "$this->property" to refer to a property of this object
		return '<head>' . PHP_EOL . $this->title . $this->meta . '</head>' . PHP_EOL;
	}
	public function setTitle($title)
	{
		$this->title = "<title>$title</title>\n";
	}
	public function setMeta($tags)
	{
		$this->meta .= '<meta ';
		foreach ($tags as $key => $value) {
			$this->meta .=  $key . '="' . $value . '" ';
		}
		$this->meta .= '/>' . PHP_EOL;
	}
	public function setBody($content)
	{
		$this->body = '<body>' . PHP_EOL . $content . '</body>' . PHP_EOL;
	}
	public function render()
	{
		$output = '';
		$output .= $this->docType();
		$output .= $this->head();
		$output .= $this->body;
		$output .= '</html>' . PHP_EOL;
		return $output;
	}
}
