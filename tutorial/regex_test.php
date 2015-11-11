<?php
// Using Regular Expressions: Defining Basic Patterns

function test($banner, $pattern, $name)
{
	$output = "<table>\n";	
	$output .= "<tr><td colspan=3><i>$banner</i></td></tr>\n";
	$output .= '<tr>';
	$output .= '<td><u>Pattern</u> --></td>';
	$output .= '<td width="10px">&nbsp;</td>';
	$output .= "<th align=\"left\">$pattern</th></tr>\n";
	foreach($name as $item) {
		if (preg_match($pattern, $item)) {
			$match = 'MATCH';
		} else {
			$match = 'DOES NOT MATCH';
		}
		$output .= "<tr><td width='50%'>$item</td><td width='10%'>&nbsp;</td><td>$match</td></tr>\n";
	}
	$output .= "</table>\n";
	$output .= "<hr />\n";
	return $output;
}
