<?php

class Bird {
    var $habitat;
    var $food;
    var $nesting = "tree";
    var $conservation;
    var $song = "chirp";
    var $flying = "yes";
    static $instance_count = 0;
    static $egg_num = 0;

    function can_fly() {
        $flying_string = (static::$flying == "yes") ? "bird can fly" : "cannot fly and is stuck on the ground";
        return $flying_string;
    }


    public static function create() {
        return new static();
    }

    public function __construct() {
    static::$instance_count++;
}
}

class YellowBelliedFlyCatcher extends Bird {
    var $name = "yellow-bellied flycatcher";
    var $diet = "mostly insects.";
    var $song = "flat chilk";

    static $egg_num = "3-4, sometimes 5.";
}

class Kiwi extends Bird {
    var $name = "kiwi";
    var $diet = "omnivorous";
    var $flying = "no";
}

$bird = Bird::create();
echo $bird->can_fly(); 

$kiwi = Kiwi::create();
echo $kiwi->can_fly(); 
