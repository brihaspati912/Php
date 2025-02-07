<?php
$a = "300";
$a = (string) $a;

$b = "100";
$b = (bool)$b;

$e = 100;
$e = (array)$e;
$f = 100;
$f = (object)$f;

$x = ["100"];
$x = (string)$x; //it will give  error.

var_dump($x);
