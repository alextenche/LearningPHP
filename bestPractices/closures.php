<?php

namespace TestEvent;

class Event
{
    private $name = "Alex";

    public function getFunction()
    {
        return function () {
            return $this->name;
        };
    }
}

$event = new Event();
$func = $event->getFunction();
echo "Hello, ", $func();
