<?php
// Managing the Code -- OOP: Building Classes by Inheritance
// ParentClass defines an HTML 4 doctype
class ParentClass
{
	public function wrapBody($content)
	{
		return sprintf("<body>\n$content</body>\n", $content);
	}
	public function docType()
	{
		// html 4.01 doctype
		return '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"'
			   . '"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">' . PHP_EOL;
	}
}
// ChildClass defines an HTML 5 doctype
// in the child class you can *override* functionality of the parent
class ChildClass extends ParentClass
{
	public function docType()
	{
		// html 5 doctype
		return '<!DOCTYPE html>' . PHP_EOL;
	}
}

$parentClass = new ParentClass();
$childClass = new ChildClass();

//echo $parentClass->docType();
//echo $parentClass->wrapBody('<h1>TEST PARENT</h1>');
echo $childClass->docType();
echo $childClass->wrapBody('<h1>TEST CHILD</h1>');
echo '</html>';
