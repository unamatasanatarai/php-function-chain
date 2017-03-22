<?php

include __DIR__ . "/../vendor/autoload.php";

$var = "Hello World!";
c($var)
    ->str_rot13()
    ->strtolower()
    ->str_replace('u', '-', $var);

var_dump($var == "-ryyb jbeyq!");

