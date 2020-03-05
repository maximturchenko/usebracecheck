<?php

require __DIR__ . '/vendor/autoload.php';

$bracecheck = new bracecheck\Brace();
$n = new usebracecheck\Usebracecheck($bracecheck);

$n->run();




//исключения прописать
 
