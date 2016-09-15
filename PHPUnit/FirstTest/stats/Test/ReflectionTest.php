<?php

namespace stats\Test;

use stats\Baseball;

class BaseballTestReflection extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->instance = new Baseball();
    }

    public function tearDown()
    {
        unset($this->instance);
    }

    public function testOps()
    {
        $obp = .363;
        $slg = .469;
        $ops = $this->instance->calc_ops($obp, $slg);
        $expectedOps = $obp + $slg;
        self::assertEquals($expectedOps, $ops);
    }

    public function invokeMethod(&$object, $methodName, array $parameters = array())
    {
        $reflection = new \ReflectionClass(get_class($object));
        $method = $reflection->getMethod($methodName);
        $method->setAccessible(true);
        return $method->invokeArgs($object, $parameters);
    }

    public function testCalcAvgPrivate()
    {
        $avg = number_format(129 / 369, 3);
        self::assertEquals($avg, $this->invokeMethod($this->instance, 'calcAvgPrivate', array(369, 129)));
    }
}