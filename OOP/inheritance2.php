<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');
class person 
{
    public string $name = '';
    public int $age = 0;
    public string $gender = 'male';
    public float $height = 0;
    public float $weight = 0;
    public float $waistsize = 0;

    function bio($name, $age, $gender){
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    public function bodyFact($height, $weight, $waistsize){
        $this->height = $height;
        $this->weight = $weight;
        $this->waistsize = $waistsize;
    }
}

class BodyMassIndex 
{
    public float $score = 0;
    public string $category = "";
    
    public function calculate($height, $weight): void{
        if ($height > 0 and $weight > 0) {
        $bmi = $weight / (($height / 100)**2);
        $this->score = $bmi;
        }
    }
    
    public function determineCategory(): string{
        if ($this->score < 16.0) {
            $this->category = "Underweight (Severe thinness)";
        } 
        elseif ($this->score >= 16.0 and $this->score <= 17.0) {
            $this->category = "Underweight (Moderate thinness)";
        } 
        elseif ($this->score >= 17.0 and $this->score <= 18.4) {
            $this->category = "Underweight (Mild thinness)";
        } 
        elseif ($this->score >= 18.5 and $this->score <= 24.9) {
            $this->category = "Normal range";
        } 
        elseif ($this->score >= 25.0 and $this->score <= 29.9) {
            $this->category = "Overweight (Pre-obese)";
        } 
        elseif ($this->score >= 30.0 and $this->score <= 34.9) {
            $this->category = "Obese (Class I)";
        } 
        elseif ($this->score >= 35.0 and $this->score <= 39.9) {
            $this->category = "Obese (Class II)";
        } 
        elseif ($this->score >= 40.0 ) {
            $this->category = "Obese (Class III)";
        }
        
        return $this->category;
    }
}

class relativefatmass 
{
    public float $score = 0; 
    public string $category = "";
    public function calculate($height, $waistsize, $gender): void {
        if ($gender == "male" and $height > 0 and $waistsize > 0 ) {
            $rfm = 64 - 20 * ($height / $waistsize);
        } elseif ($gender == "female" and $height > 0 and $waistsize > 0) {
            $rfm = 76 - 20 * ($height / $waistsize);
        }
        
        $this->score = $rfm;
    }

    public function determineCategory($gender){
        if ($gender == "male") {
            if ($this->score>= 2 and $this->score<= 5 ) {
                $this->category = "Essential Fat"; 
            } elseif ($this->score>= 6 and $this->score<= 13) {
                $this->category = "Athletes";
            } elseif ($this->score>= 14 and $this->score<= 17) {
                $this->category = "Fitness";
            } elseif ($this->score>= 18 and $this->score<= 24) {
                $this->category = "Average";
            } elseif ($this->score>= 25) {
                $this->category = "Obese";
            }
        } elseif ($gender == "female") {
            if ($this->score>= 10 and $this->score<= 13 ) {
                $this->category = "Essential Fat"; 
            } elseif ($this->score>= 14 and $this->score<= 20) {
                $this->category = "Athletes";
            } elseif ($this->score>= 21 and $this->score<= 24) {
                $this->category = "Fitness";
            } elseif ($this->score>= 25 and $this->score<= 31) {
                $this->category = "Average";
            } elseif ($this->score>= 32) {
                $this->category = "Obese";
            }
        }

        return $this->category;
    }

}
function input_checker ($inputname, $defaultvalue) {
    return isset($_POST[$inputname]) ? $_POST[$inputname] : $defaultvalue;
}

$objPerson = new person();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$objPerson->name = input_checker('name', $objPerson->name);
$objPerson->age = input_checker('age', $objPerson->age);
$objPerson->gender = input_checker('gender', $objPerson->gender);
$objPerson->height = input_checker('height', $objPerson->height);
$objPerson->weight = input_checker('weight', $objPerson->weight);
$objPerson->waistsize = input_checker('waistsize', $objPerson->waistsize);

$name = $objPerson->name;
$age = $objPerson->age;
$gender = $objPerson->gender;
$height = $objPerson->height;
$weight = $objPerson->weight;
$waistsize = $objPerson->waistsize;


$objPerson->bio($name, $age, $gender);
$objPerson->bodyFact($height, $weight, $waistsize);

$bmiCalculator = new BodyMassIndex();

$bmiCalculator->calculate($height, $weight);
$bmiCalculator->determineCategory();




$rfmCalculator = new relativefatmass();
$rfmCalculator->calculate($height, $waistsize, $gender);
$rfmCalculator->determineCategory($gender);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Body Mass Index (BMI) and Relative Fat Mass (RFM) Category Calculator</h3>
    <br>
    <p>Form Input</p>
    <form action="" method ="POST">
    <label for="name">Name: </label>
    <input type="text" id="name" name="name" value="<?= $objPerson->name; ?>"> <br>

    <label for="age">Age: </label>
    <input type="number" id="age" name="age" value="<?= $objPerson->age; ?>"> <br>

    <label for="gender">Select gender: </label> <br>
    <input type="radio" id="male" name="gender" value="male" <?= $objPerson->gender === 'male' ? 'checked' : '' ?>> 
    <label for="male">Male</label> <br>
    <input type="radio" id="female" name="gender" value="female" <?= $objPerson->gender === 'female' ? 'checked' : '' ?>> 
    <label for="female">Female</label> <br>

    <label for="height">Height: </label>
    <input type="number" id="height" name="height" value="<?= $objPerson->height; ?>"> <br>

    <label for="weight">Weight: </label>
    <input type="number" id="weight" name="weight" value="<?= $objPerson->weight; ?>"> <br>

    <label for="waistsize">Waist Size: </label>
    <input type="number" id="waistsize" name="waistsize" value="<?= $objPerson->waistsize; ?>"> <br>

    <button type="submit">Count</button>
    </form>

    <p>User detail:</p>
    <ul>
        <li>Name: <?= $objPerson->name ?></li>
        <li>Age: <?= $objPerson->age ?></li>
        <li>Gender: <?= $objPerson->gender ?></li>
        <li>Height: <?= $objPerson->height ?></li>
        <li>Weight: <?= $objPerson->weight ?></li>
        <li>Waist size: <?= $objPerson->waistsize ?></li>
    </ul>
    <?php if (isset($bmiCalculator) and isset($rfmCalculator)) : ?>
        <p>BMI and RFM Detail:</p>
        <ul>
            <li>BMI Score: <?= number_format($bmiCalculator->score, 2); ?>, belongs to the category <?= $bmiCalculator->category; ?></li>

            <li>RFM Score: <?= number_format($rfmCalculator->score, 2); ?>%, belongs to the category <?= "$rfmCalculator->category"; ?></li>

        </ul>
        <?php endif;  ?>
</body>
</html>