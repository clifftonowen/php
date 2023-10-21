<?php 
class animal {
    public string $name = null;
    public int $foot = 4; 
    public bool $ismammal = true;
    public function introduce(string $suara):void {
        echo "Belong to Animal class {$this->name}";
        echo "<br>";
        echo $this ->sound($suara);
    }

    public function sound(string $suara) :string {
        return "suaranya adalah {$suara}";
    }

    public function test(): ?string {
        if ($this->name) {
            $coba = "saya adalah {$this->name}";
        }
        return $coba;
    }
}

$horse = new animal();

// $horse->name = "Dog";
// $dog -> introduce();

print_r($horse->test());
?>