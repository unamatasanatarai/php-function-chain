
```
<?php

include __DIR__ . "/../vendor/autoload.php";

$var = "Hello World!";
c($var)
    ->str_rot13()  // no arguments, default is return from previous
    ->strtolower()
    ->str_replace('u', '-', $var); // force arguments

var_dump($var == "-ryyb jbeyq!");

```
