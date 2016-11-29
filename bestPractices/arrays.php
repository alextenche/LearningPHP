<?php

$testArray1 = array(1, 5, 8, 4);
$testArray2 = [2, 8, 2, 9];

echo $testArray1[0], "\n";
echo $testArray2[1], "\n";

function getArray()
{
    return ["drew", "scott", "mike"];
}


$nameArr = getArray();
echo $nameArr[0], "\n";

echo getArray()[1], "\n";

class TestClass
{
    public $prop = "some propert value";

    public function getArray()
    {
        return array(new TestClass());
    }
}

$test = new TestClass();
echo $test->getArray()[0]->getArray()[0]->prop;
