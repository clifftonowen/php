<?php 
class animal {
    public $name, $age, $ismammal;
    public function __construct($name, $age, $ismammal = false) {
        $this->name = $name;
        $this->age = $age;
        $this->ismammal = $ismammal;
    }
    public function eat($foodname) {
        return "{$this->name} eat {$foodname}";
    }
}

$cat = new animal('cat', 8, true);

echo $cat->eat('whiskas');



?>