<?php

class Bicycle {

    private const LB_TO_KG = 2.2046226218;

    private $brand;
    private $model;
    private $year;
    protected $description = 'Used bicycle';
    private $weight_kg = 0.0;

    public function __construct(string $brand, string $model, string $year, float $weight_kg = 0.0) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->weight_kg = $weight_kg;
    }

    public function name(): string {
        return "{$this->brand} {$this->model} ({$this->year})";
    }

    public function weight_lbs(): float {
        return $this->weight_kg * self::LB_TO_KG;
    }

    public function set_weight_lbs(float $value): void {
        $this->weight_kg = $value / self::LB_TO_KG;
    }

}

$trek = new Bicycle('Trek', 'Emonda', '2017', 1.0);
$cd = new Bicycle('Cannondale', 'Synapse', '2016', 8.0);

echo $trek->name() . "<br />";
echo $cd->name() . "<br />";

echo $trek->weight_kg . " kg<br />";
echo $trek->weight_lbs() . " lbs<br />";

$trek->set_weight_lbs(2);
echo $trek->weight_kg . " kg<br />";
echo $trek->weight_lbs() . " lbs<br />";

?>
