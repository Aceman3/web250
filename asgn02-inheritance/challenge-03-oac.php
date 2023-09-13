<?php

class Bicycle {

    private $brand;
    private $model;
    private $year;
    protected $description = 'Used bicycle';
    private $weight_kg = 0.0;
    
    public function __construct($brand, $model, $year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public function name() {
        return $this->brand . " " . $this->model . " (" . $this->year . ")";
    }

    public function weight_lbs() {
        return floatval($this->weight_kg) * 2.2046226218;
    }

    public function set_weight_lbs($value) {
        $this->setWeightKg(floatval($value) / 2.2046226218);
    }
    
    private function setWeightKg($value) {
        $this->weight_kg = $value;
    }
    
    public function getWeightKg() {
        return $this->weight_kg . " kg";
    }

}

class Unicycle extends Bicycle {

    protected $wheels = 1;

    public function wheel_details() {
        if ($this->wheels == 1) {
            return "It has one wheel";
        } else {
            return "It has two wheels";
        }
    }

    public function __construct($brand, $model, $year) {
        parent::__construct($brand, $model, $year);
        $this->wheels = 1;
    }
    
    // Override weight_kg related methods because it's private in parent class
    public function set_weight_lbs($value) {
        $this->weight_kg = floatval($value) / 2.2046226218;
    }

    public function getWeightKg() {
        return $this->weight_kg . " kg";
    }

}

$trek = new Bicycle('Trek', 'Emonda', '2017');
$cd = new Bicycle('Cannondale', 'Synapse', '2016');

$uni = new Unicycle('Generic', 'Unicycle', '2020');

echo $trek->name() . "<br />";
echo $cd->name() . "<br />";

echo $uni->wheel_details() . "<br />";

?>
