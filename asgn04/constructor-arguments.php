<?php


class Bird {
    public $commonName;
    public $latinName;

    public function __construct($args = []) {
        $this->commonName = $args['commonName'] ?? null;
        $this->latinName = $args['latinName'] ?? null;
    }
}


$acadianFlycatcher = new Bird(['commonName' => 'Acadian Flycatcher', 'latinName' => 'Turdus migratorius']);
$easternTowhee = new Bird(['commonName' => 'Eastern Towhee', 'latinName' => 'Pipilo erythrophthalmus']);


echo "Common Name: " . $acadianFlycatcher->commonName . ", Latin Name: " . $acadianFlycatcher->latinName . "\n";
echo "Common Name: " . $easternTowhee->commonName . ", Latin Name: " . $easternTowhee->latinName . "\n";

?>
