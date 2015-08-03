<?php
/**
 * Created by PhpStorm.
 * User: Alexandru
 * Date: 02.08.2015
 * Time: 13:47
 */

class Event {
    private $name = "Alex";

    public function getFunction()
    {
        return function() { return $this->name; };
    }
}

$event = new Event();
$func = $event->getFunction();
echo "Hello, ", $func();