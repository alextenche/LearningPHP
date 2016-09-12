<?php

namespace stats\Test;

use stats\Baseball;

class BaseballTestAnnotations extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider providerCalcArgs
     */

    public function testCalc($attempts, $hits)
    {
        if(!is_numeric($attempts)){
            $avg = "Not a number";
            return $avg;
            exit();
        }
        $baseball = new Baseball();
        $result = $baseball->calc_avg($attempts, $hits);
        $expectedResult = $hits / $attempts;
        $formatExpectedResult = number_format($hits/$attempts, 3);
        self::assertEquals($result, $formatExpectedResult);
    }

    public function providerCalcArgs()
    {
        return [
            ['389', '129'],
            ['some string', 129],
            [389, 'some string'],
            ['some string', 'some string']
        ];
    }


}