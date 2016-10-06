<?php
namespace Fruits;
use Carbon\Carbon;

class Fruit {

    public $name;
    public $expires;

    public function __construct($name) {
        $this->name = $name;
        $this->expires = Carbon::now('Europe/Oslo')->addWeeks(2);
    }
}