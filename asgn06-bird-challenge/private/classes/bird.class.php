<?php

class Bird {

    // Properties derived from the wnc-birds.csv file
    public $id;
    public $name;
    public $habitat;
    public $food;
    public $conservation_id; // Assuming there's a field in the CSV called 'conservation_id' that holds a conservation value (1-4).

    // Conservation options constant
    protected const CONSERVATION_OPTIONS = [
        1 => 'Low concern',
        2 => 'Moderate concern',
        3 => 'Extreme concern',
        4 => 'Extinct',
    ];

    // Constructor with default values
    public function __construct($args=[]) {
        $this->id = $args['id'] ?? NULL;
        $this->name = $args['name'] ?? '';
        $this->habitat = $args['habitat'] ?? '';
        $this->food = $args['food'] ?? '';
        $this->conservation_id = $args['conservation_id'] ?? 1; // Default value of 1 for conservation_id
    }

    // Conservation method
    public function conservation() {
        if(isset(self::CONSERVATION_OPTIONS[$this->conservation_id])) {
            return self::CONSERVATION_OPTIONS[$this->conservation_id];
        }
        return "Unknown";
    }

}

?>
