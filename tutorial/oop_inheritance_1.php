<?php
// Managing the Code -- OOP: Building Classes by Inheritance

// ParentClass is a "base" class with common properties and methods
class ParentClass
{
	public $br = '<br />';
	public $space = '&nbsp;';
	public function wrapBtag($content)
	{
		return sprintf('<b>%s</b>', $content);
	}
}
// ChildClass inherits all public properties and methods from ParentClass
// in the child class you can add properties and methods as desired
class ChildClass extends ParentClass
{
	// child class adds italics functionality
	public function wrapItag($content)
	{
		return sprintf('<i>%s</i>', $content);
	}
}

$wrapper = new ChildClass();
echo $wrapper->br, $wrapper->wrapBtag('BOLD'), $wrapper->space, $wrapper->wrapItag('ITALICS');
// NOTE: need to use "htmlentities()" to *display* the HTML and not render it!
// NOTE: var_export($value, TRUE) returns a value which is = var_dump()
echo $wrapper->br, htmlentities(var_export($wrapper, TRUE));
