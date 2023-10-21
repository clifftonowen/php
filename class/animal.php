<?php 
class animal {
    public $name, $foot, $ismammal;
    function __construct($name = "name", $foot = 0, $ismammal = null){
    $this->name = $name;
    $this->foot = $foot;
    $this->ismammal = $ismammal;
    }
}

$dog = new animal();
$dog->name = "Dog";
$dog->foot = 4;
$dog->ismammal = true;

echo $dog->foot;


?>