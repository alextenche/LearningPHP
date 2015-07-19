<?php

// array_keys
$names = array(
  'Mike' => 'frog',
  'Alex' => 'jobSeeker',
  'AtaTurc' => 'baboon'
);

var_dump(array_keys($names));
foreach (array_keys($names) as $name) {
  echo "Hello, $name. <br>";
}

echo "<br>";

// array_walk
function print_info($value, $key){
  echo "$key is a $value <br>";
}

array_walk($names, 'print_info');
