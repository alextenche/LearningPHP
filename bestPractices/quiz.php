<?php

// q1
/*echo "0" ? false : true;
echo "<hr><br>";*/


die();
// q2 - error
/*class A{
  final function a(){
    echo 1;
  }
}

class B extends A{
  public function a(){
    echo 2;
  }
}

$a = new B();
echo $a->a();*/

// q3
/*$cloud = 23;
$zce = true;
return $cloud == true;
echo "<hr><br>";*/

// q4
/*$arr = array(
  array(
    "name" => "John",
    "surname" => "Smith"
  ),
  array(
    "name" => "James",
    "surname" => "Smith"
  ),
  array(
    "name" => "Jonathan",
    "surname" => "Smith"
  ),
);

function printUser($id){
  global $arr;
  foreach($arr as $key => $user){
    if($id == $key)
      echo $user["name"];
      echo $user["surname"];
  }
}

printUser(00);
echo "<hr><br>";

$fp = fopen('interfaces.php', 'r');
$var = (string)$fp;
echo $var;*/

// q5
/*$f = function($x){
  return function($y) use ($x) {
    return str_repeat($x, $y);
  };
};

$a = $f(2);
$b = $f(3);
$c = $a(2).$b(3);
echo ($c);*/

// q6
/*function fibo($a,$b,$step){
  if($step > 0){
    --$step;
    return fibo($b,$a+$b,$step);
  } else {
    return $b;
  }
}

echo fibo(0,1,5);*/

// q7
/*function pears(Array $pears){
  if(count($pears)>0){
    echo array_pop($pears);
    pears($pears);
  }
}

$fruit = array("PHP","Conference");
pears($fruit);*/

// q8
/*function loop($a, &$b){
  echo "called<br>";
  if($a <= $b){
    return;
  }
  loop($a--, ++$b);
}

$a = 5;
$b = 1;
loop($a++, $b);*/

// q9
/*class Test{
  public $name = 'Cyrille';

  public function setName($sName){
    $this->name = $sName;
  }
}

$obj1 = new Test();
$obj2 = new $obj1;
$obj1->setName('Joe');

echo $obj2->name . ' ' . $obj1->name;*/

// q10
/*$foo = null;
$bar = new stdClass;
var_dump(isset($foo), isset($bar), isset($baz));*/

// q11
/*class Numbers{
  public $a = 1;
  public static $b = 2;
}

$Numbers = new Numbers();

$a = &$Numbers->a;
$b = &Numbers::$b;

unset($Numbers);

echo $a + $b;*/

// q12
/*echo 'PHP 5\\\.5 is fun\n';*/

// q13
/*$a = "a";
$abc = @$abc = "${${${a}}}";

echo $abc;*/

// q14
/*namespace myApp\db;
class mysql{}

echo get_class(new namespace\mysql());*/

// q15
/*$data = ' data';
var_dump($var = (empty(trim($data))));
echo $var;*/

// q16
/*$s = '12345';
$s[$s[1]] = '2';
echo $s;*/

// q17
$first = 3;
$second = 6;
$third = 8;

function Sum()
{
    global $second;

    $second = $third - 2;
    return $second + $first;
}

Sum();
echo $first . "<br>";
echo $second . "<br>";
echo $third . "<br>";
echo $first + $second + $third;
