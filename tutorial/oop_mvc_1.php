<?php
// Managing the Code -- OOP: Introducing the MVC Design Pattern

// software design patterns: http://en.wikipedia.org/wiki/Software_design_pattern
// an architectural concept for OOP

include './classes/Controller.php';

$controller = new Controller();
echo $controller->showUserInfo(2);
