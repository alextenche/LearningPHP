<?php
// Managing the Code -- OOP: Handling Exceptions

class Test
{
	public function divide($operand1, $operand2)
	{
		$output = "<br />1st Operand: $operand1\n";
		$output .= "<br />2nd Operand: $operand2\n";
		$output .= '<br />Division Result: ' . $operand1 / $operand2;
		return $output;
	}
}

$test = new Test();

// ok
echo $test->divide(22, 11);
// generates a warning
echo $test->divide(22, 0);
