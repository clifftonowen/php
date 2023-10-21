<?php
class car {
    public $name, $brand, $color, $price, $fuel, $electric, $type;
    public function __construct($name = "name", $brand = "brand", $color = "color", $price = 0, $fuel = 0, $electric = 0, $type = "") {
        $this->name = $name;
        $this->brand = $brand;
        $this->color = $color;
        $this->price = $price;
        $this->fuel = $fuel;
        $this->electric = $electric;
        $this->type = $type;
    }

    public function getProduct() {
        return "Ini adalah {$this->name}, {$this->brand}, {$this->color}, {$this->price}, {$this->fuel}, {$this->electric}, {$this->type}";
    }

    public function getInfoLengkap(){
        $str = "{$this->type} : {$this->name} | {$this->getproduct()}";
        if ($this->type == "fuel"){
            $str .= " | {$this->fuel} cc";
        } elseif ($this->type == "electric") {
            $str .= " | {$this->electric} watt";
        }
        return $str;
    }

}

class mobilNormal extends car {
    public function getMobilNormal(){
        $str = "Fuel : {$this->name} | {$this->getproduct()} | {$this->fuel} cc";
        return $str;
    }
}
class InfoProduct {
    public function getInfoProduct($car) {
        $str = "{$car->name} | {$car->getProduct()}";
        return $str;
    }
}

$mobilNormal = new mobilNormal();
$mobilNormal->name = "xenia";
$mobilNormal->brand = "daihatsu";
$mobilNormal->color = "black";
$mobilNormal->price = "500000000";
$mobilNormal->fuel = 9000;
$mobilNormal->electric = 0;
$mobilNormal->type = "fuel";

$mobilListrik = new car();
$mobilListrik->name = "wuling";
$mobilListrik->brand = "Wuling Motors";
$mobilListrik->color = "pink";
$mobilListrik->price = "5000000";
$mobilListrik->fuel = 0;
$mobilListrik->electric = 800;
$mobilListrik->type = "electric";

echo $mobilNormal->getProduct();

echo "<br>";

echo $mobilNormal->getInfoLengkap();

echo "<br>";

echo $mobilNormal->getMobilNormal();

echo "<br>";


echo $mobilListrik->getProduct();

echo "<br>";

echo $mobilListrik->getInfoLengkap();

// $infoProduct = new InfoProduct();
// echo $infoProduct->getInfoProduct($mobilNormal); 

?>