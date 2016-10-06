<?php

require 'vendor/autoload.php';
use Fruits\Fruit; 

$fruit = new Fruit('Apple');
echo $fruit->name . ' expires in ' . $fruit->expires->diffForHumans();