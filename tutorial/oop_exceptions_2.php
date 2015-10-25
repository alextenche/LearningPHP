<?php
// Managing the Code -- OOP: Handling Exceptions

class Test
{
	public function divide($operand1, $operand2)
	{
		$output = "<br />1st Operand: $operand1\n";
		$output .= "<br />2nd Operand: $operand2\n";
		if ($operand2 == 0) {
			// you can deliberately throw an exception
			throw new Exception($output . '<br />Cannot Divide by Zero!');
		} else {
			$output .= '<br />Division Result: ' . $operand1 / $operand2;
			return $output;
		}
	}
}

$test = new Test();

// inside the "try" block place code which might throw an exception
try {
	echo $test->divide(22, 11);
	echo $test->divide(22, 0);
// exception is "caught"
// inside the "catch" block you can place your recovery code
} catch (Exception $e) {
	echo $e->getMessage();
}
