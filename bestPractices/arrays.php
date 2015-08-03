<?php
/**
 * Created by PhpStorm.
 * User: Alexandru
 * Date: 02.08.2015
 * Time: 13:37
 */

$arr = array(1,5,8,4);
$arr2 = [2,8,2,9];

echo $arr[0], "<br>";
echo $arr2[1], "<br>";

function getArray()
{
    return ["drew", "scott", "mike"];
}

$nameArr = getArray();
echo $nameArr[0], "<br>";

echo getArray()[1], "<br>";

class TestClass
{
    public $prop = "some propert value";

    public function getArray(){
        return array(new TestClass());
    }
}

$test = new TestClass();
echo $test->getArray()[0]->getArray()[0]->prop;