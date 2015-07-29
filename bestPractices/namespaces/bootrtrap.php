<?php
/**
 * Created by PhpStorm.
 * User: Alexandru
 * Date: 28.07.2015
 * Time: 14:45
 */

spl_autoload_register(function ($class){
    $classPath = str_replace('\\','/', $class);
    include __DIR__.'/src/'.$classPath.'.php';
});