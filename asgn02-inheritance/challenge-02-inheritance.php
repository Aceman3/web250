<?php

class Furniture {

    protected $width;
    protected $depth;
    protected $height;
    protected $is_seating = false;
    protected $is_sleeper = false;
    protected $is_upholstered = false;

    public function __construct($width = 0, $depth = 0, $height = 0) {
        $this->width = $width;
        $this->depth = $depth;
        $this->height = $height;
    }

    public function area(): float {
        return floatval($this->width) * floatval($this->depth);
    }

    public function volume(): float {
        return $this->area() * floatval($this->height);
    }
}

class Bed extends Furniture {
    protected $is_sleeper = true;
}

class Sofa extends Furniture {
    protected $is_seating = true;
    protected $is_upholstered = true;
    protected $seats = 3;
    protected $has_seatcushions = true;
    protected $has_backcushions = true;
    protected $arms = 2;
    protected $depth_opened;

    public function area_opened(): float {
        if (!$this->is_sleeper) {
            return $this->area();
        }
        return floatval($this->width) * floatval($this->depth_opened);
    }
}

class Couch extends Sofa {
    protected $arms = 0;
}

class Loveseat extends Sofa {
    protected $seats = 2;
}

class Bench extends Couch {
    protected $has_backcushions = false;
}

function inspect_class(string $class_name): string {
    $output = '';

    $output .= $class_name;
    $parent_class = get_parent_class($class_name);
    if ($parent_class != '') {
        $output .= " extends {$parent_class}";
    }
    $output .= "\n";

    $class_vars = get_class_vars($class_name);
    ksort($class_vars);
    $output .= "properties: \n";
    foreach ($class_vars as $k => $v) {
        $output .= "- {$k}: {$v}\n";
    }

    $class_methods = get_class_methods($class_name);
    sort($class_methods);
    $output .= "methods: \n";
    foreach ($class_methods as $k) {
        $output .= "- {$k}\n";
    }

    return $output;
}

$class_names = ['Furniture', 'Bed', 'Couch', 'Loveseat', 'Bench'];
foreach ($class_names as $class_name) {
    echo nl2br(inspect_class($class_name));
    echo '<br />';
}
echo "<hr />";

$sofa = new Sofa(4, 2, 3);
echo 'Area: ' . $sofa->area() . "<br />";
echo 'Volume: ' . $sofa->volume() . "<br />";

echo 'Area opened: ' . $sofa->area_opened() . "<br />";
$sofa->is_sleeper = true;
$sofa->depth_opened = 7;
echo 'Area opened: ' . $sofa->area_opened() . "<br />";

echo "<hr />";

$bench = new Bench(3, 1.5, 1);
echo 'Area: ' . $bench->area() . "<br />";
echo 'Seating? ' . ($bench->is_seating ? 'true' : 'false') . "<br />";
echo 'Sleeping? ' . ($bench->is_sleeper ? 'true' : 'false') . "<br />";
echo 'Backcushions? ' . ($bench->has_backcushions ? 'true' : 'false') . "<br />";

?>
