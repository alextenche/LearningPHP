<?php
// Using Regular Expressions: Finding matches with "preg_match_all()"
// preg_match_all(pattern, string, matches)
// returns TRUE is at least one match is found
// 3rd param returns an array of all possible matches
// preg_match_all() is useful when scanning websites for information

// this pattern searches an HTML document for links
// note that ".*?" is used when you want the *minimal* number of characters to fit the pattern
$pattern = '/<a .*?>/i';
$string = file_get_contents('http://www.unlikelysource.com/smiling_jack/');

preg_match($pattern, $string, $matches);
echo '<b>preg_match()</b>';
echo '<pre>';
echo '<br /><b>PATTERN:</b> ', htmlspecialchars($pattern);
echo '<br /><b>RESULT:</b> ', htmlentities(var_export($matches, TRUE));
echo '</pre>';

preg_match_all($pattern, $string, $matches);
echo '<b>preg_match_all()</b>';
echo '<pre>';
echo '<br /><b>PATTERN:</b> ', htmlspecialchars($pattern);
echo '<br /><b>RESULT:</b> ', htmlentities(var_export($matches, TRUE));
echo '</pre>';
