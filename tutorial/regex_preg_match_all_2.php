<?php
// Using Regular Expressions: Finding matches with "preg_match_all()"
// preg_match_all() is useful when scanning websites for information

// this pattern searches an HTML document for links
// using () allows us to create a sub-pattern or sub-group
$pattern = '/<a .*?href=(".*?")>/i';
$string = file_get_contents('http://www.unlikelysource.com/smiling_jack/');

preg_match_all($pattern, $string, $matches);
echo '<b>preg_match_all()</b>';
echo '<pre>';
echo '<br /><b>PATTERN:</b> ', htmlspecialchars($pattern);
echo '<br /><b>RESULT:</b> ', htmlentities(var_export($matches, TRUE));
echo '</pre>';
