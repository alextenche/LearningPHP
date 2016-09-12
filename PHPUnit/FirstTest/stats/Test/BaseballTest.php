<?php

namespace stats\Test;

use stats\Baseball;

class BaseballTest extends \PHPUnit_Framework_TestCase
{
    public function testCalcAvgEquals()
    {
        $attempted = 389;
        $hits = 129;
        $baseball = new Baseball();
        $result = $baseball->calc_avg($attempted, $hits);
        $formatExpectedResult = number_format($hits / $attempted, 3);
        self::assertEquals($formatExpectedResult, $result);
    }

    public function testCalcHitsAreStrings(){
        $attempted = 389;
        $hits = 'some string';
        $baseball = new Baseball();
        $result = $baseball->calc_avg($attempted, $hits);
        var_dump($result);
        $formatExpectedResult = 0.000;
        self::assertEquals($formatExpectedResult, $result);
    }
}
