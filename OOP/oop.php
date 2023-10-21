<?php
class car {
    public $name, $brand, $color, $price;
    public function __construct($name = "name", $brand = "brand", $color = "color", $price = 0) {
        $this->name = $name;
        $this->brand = $brand;
        $this->color = $color;
        $this->price = $price;
    }

    public function getProduct() {
        return "Ini adalah {$this->name}, {$this->brand}, {$this->color}, {$this->price}";
    }
}

class InfoProduct {
    public function getInfoProduct($car) {
        $str = "{$car->name} | {$car->getProduct()}";
        return $str;
    }
}

$car1 = new car();
$car1->name = "xenia";
$car1->brand = "toyota";
$car1->color = "black";
$car1->price = "500000000";

echo $car1->getProduct();

echo "<br>";

$infoProduct = new InfoProduct();
echo $infoProduct->getInfoProduct($car1); 

?>