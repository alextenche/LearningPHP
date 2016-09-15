<?php

namespace stats\Test;

use stats\Baseball;

class BaseballTestTemplate extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->instance = new Baseball();
    }

    public function tearDown()
    {
        unset($this->instance);
    }

    public function testSlugging()
    {
        $slg = $this->instance->calc_slg(389, 106, 12, 4, 7);
        $expectedSlg = number_format(((106*1)+(12*2)+(4*3)+(7*4))/389, 3);
        self::assertEquals($expectedSlg, $slg);
        return $slg;
    }

    public function testOnBasePerc()
    {
        $obp = $this->instance->calc_obp(389, 23, 6, 7, 129);
        $expectedObp = number_format((129 + 23 + 6 + 7) / 425, 3);
        self::assertEquals($expectedObp, $obp);
        return $obp;
    }

    /**
     * @depends testSlugging
     * @depends testOnBasePerc
     */
    public function testOps($obp, $slg)
    {
        $ops = $this->instance->calc_ops($obp, $slg);
        $expectedOps = $obp + $slg;
        self::assertEquals($expectedOps, $ops);
    }
}