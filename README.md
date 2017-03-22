```
<?php

include __DIR__ . "/../vendor/autoload.php";

$var = "Hello World!";
c($var)
  ->str_rot13($var)
  ->strtolower($var);

var_dump($var == "uryyb jbeyq!");
```