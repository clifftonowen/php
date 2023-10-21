<?php 
class animal {
    public $name, $age, $ismammal;
    protected $color;
    private $race;
    public function __construct($name, $age, $ismammal = false) {
        $this->name = $name;
        $this->age = $age;
        $this->ismammal = $ismammal;
    }
    public function eat($foodname) {
        return "{$this->name} eat {$foodname}";
    }

    function setcolorrace($color, $race){
        $this->color = $color;
        $this->race = $race;
    }
    protected function getage(){
        return $this->age;
    }

    private function getcolor(){
        return $this->color;
    }
}

// $cat = new animal('cat', 8, true);

// $cat->setcolorrace("red", 5);

// echo $cat->color;

// echo $cat->age;



?>