<?php

class Bird {
    public $commonName;
    public $latinName;

    public function __construct($commonName, $latinName) {
        $this->commonName = $commonName;
        $this->latinName = $latinName;
    }
}


$robin = new Bird("Robin", "Turdus migratorius");
$easternTowhee = new Bird("Eastern Towhee", "Pipilo erythrophthalmus");


echo "Common Name: " . $robin->commonName . ", Latin Name: " . $robin->latinName . "<br>";
echo "<hr>"; 
echo "Common Name: " . $easternTowhee->commonName . ", Latin Name: " . $easternTowhee->latinName . "<br>";

?>
