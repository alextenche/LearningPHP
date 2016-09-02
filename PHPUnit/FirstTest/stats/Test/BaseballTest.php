<?php

namespace stats\Test;

use stats\Baseball;

class BaseballTest extends \PHPUnit_Framework_TestCase
{
  public function testCalcAvgEquals()
  {
    $atbats = 389;
    $hits = 129;
    $baseball = new Baseball();
    $result = $baseball->calc_avg($atbats, $hits);
    $expectedResult = $hits / $atbats;
    $this->assertEquals($expectedResult, $result);
  }


}
