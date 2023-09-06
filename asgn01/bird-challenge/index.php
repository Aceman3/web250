<?php

class Bird {
    public $commonName;
    public $food;
    public $nestPlacement;
    public $conservationLevel;

    public function __construct($commonName, $food, $nestPlacement, $conservationLevel) {
        $this->commonName = $commonName;
        $this->food = $food;
        $this->nestPlacement = $nestPlacement;
        $this->conservationLevel = $conservationLevel;
    }

    public function song() {
        return "drink-your-tea!";
    }

    public function birdSong() {
        return "whatwhat!!";
    }

    public function canFly() {
        return "This bird can fly";
    }
}

// Create an instance for Eastern Towhee
$easternTowhee = new Bird(
    "Eastern Towhee",
    "seeds, fruits, insects, spiders",
    "Ground",
    "Low"
);

// Create an instance for Indigo Bunting
$indigoBunting = new Bird(
    "Indigo Bunting",
    "small seeds, berries, buds, and insects",
    "roadsides, and railroad rights-of-way fields and on the edges of woods",
    "Low"
);

// Test the methods for each bird instance
echo $easternTowhee->song();  // Outputs: drink-your-tea!
echo $indigoBunting->birdSong();  // Outputs: whatwhat!!

?>
