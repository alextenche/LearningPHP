<?php
/**
 * Created by PhpStorm.
 * User: Alexandru
 * Date: 29.07.2015
 * Time: 20:09
 */

namespace AlexTenche\Example;

class Example
{
    const FOO = 'foo';
    public function getSomething()
    {
        return 'something intrestingh was loaded here';
    }

    public static function otherThing($bar)
    {
        if ($bar === false) {
            return 56;
        }

        if ($bar === true) {
            return 45;
        }

        return false;
    }

    private final WhatIsThis()
    {
        return function () {
            return 1;
        });
    }
}
