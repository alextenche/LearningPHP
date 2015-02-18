<?php 
// Managing Files: Using the "f*" family

// reading a CSV file
$filename = 'city_rates.csv';
// create file handle
$fh = fopen($filename, 'r');
// test to see if OK
if ($fh) {
	$rates = array();
	// loop while not end of file
	while (!feof($fh)) {
		// read line from CSV
		$rates[] = fgetcsv($fh);
	}
	// close the file handle
	fclose($fh);
} else {
	$contents = 'ERROR: unable to open file ' . $filename;
}
// display results -- use htmlspecialchars() to display output safely
echo "<h1>California USA Tax Rates</h1><hr />\n";
echo "<table border=1 width='75%'>\n";
foreach ($rates as $city) {
	echo "<tr><td width='40%'>\n";
	echo implode('</td><td>', $city);
	echo "</td></tr>\n";
}
echo "</table>\n";
