<?php

require __DIR__ . '/vendor/autoload.php';

use TimeMachine\src\TimeMachine;


$var = TimeMachine::getDateTimeOf('America/New_York');
var_dump($var);

$var = TimeMachine::getDateTimeOf('Europe/Madrid');
var_dump($var);

$var = TimeMachine::changeFormat('15/01/2020');
var_dump($var);

$var = TimeMachine::changeFormat('15-01-2020');
var_dump($var);

$var = TimeMachine::changeFormat('2020-01-15');
var_dump($var);



