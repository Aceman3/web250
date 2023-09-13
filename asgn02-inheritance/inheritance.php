<?php

// Parent class
class Bird {
    protected $species;
    protected $canFly;
    protected $habitat;
    protected $diet;

    public function __construct($species, $canFly = true, $habitat = "Unknown", $diet = "Unknown") {
        $this->species = $species;
        $this->canFly = $canFly;
        $this->habitat = $habitat;
        $this->diet = $diet;
    }

    public function getSpecies() {
        return $this->species;
    }

    public function getDiet() {
        return $this->diet;
    }

    public function describe() {
        return "I am a {$this->species}. I live in {$this->habitat}. My diet mainly consists of {$this->diet}.";
    }

    public function canFly() {
        return $this->canFly ? "{$this->species} can fly." : "{$this->species} cannot fly.";
    }

    public function makeSound() {
        return "Some generic bird sound.";
    }
}

// Subclass: SongBird
class SongBird extends Bird {
    protected $song;

    public function __construct($species, $song, $diet = "Insects") {
        parent::__construct($species, true, "Forests", $diet);
        $this->song = $song;
    }

    public function sing() {
        return $this->song;
    }

    public function describe() {
        return parent::describe() . " I am also known for my song: '{$this->song}'.";
    }
}

// Subclass: FlightlessBird
class FlightlessBird extends Bird {
    public function __construct($species, $diet) {
        parent::__construct($species, false, "Ground", $diet);
    }

    public function makeSound() {
        return "A ground bird sound, perhaps a squawk!";
    }
}

// Demonstrating inheritance
$bird = new Bird("GenericBird");
$songBird = new SongBird("Nightingale", "Sweet melody");
$flightlessBird = new FlightlessBird("Ostrich", "Plants and insects");

echo $bird->describe() . PHP_EOL;
echo $songBird->describe() . PHP_EOL;
echo $flightlessBird->describe() . PHP_EOL;
echo $flightlessBird->makeSound() . PHP_EOL;

?>
