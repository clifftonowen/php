<?php 
class person {
    public string $name = '';
    public int $age = 0;
    public string $gender = 'm';
    public float $height = 0;
    public float $weight = 0;
    public float $waistsize = 0;

}

function input_checker ($inputname, $defaultvalue) {
    return isset($_GET[$inputname]) ? $_GET[$inputname] : $defaultvalue;
}

$objPerson = new person();

$objPerson->name = input_checker('name', $objPerson->name);
$objPerson->age = input_checker('age', $objPerson->age);
$objPerson->gender = input_checker('gender', $objPerson->gender);
$objPerson->height = input_checker('height', $objPerson->height);
$objPerson->weight = input_checker('weight', $objPerson->weight);
$objPerson->waistsize = input_checker('waistsize', $objPerson->waistsize);


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
    <form action="" method ="GET">
    <label for="name">Name: </label>
    <input type="text" id="name" name="name" value="<?= $objPerson->name; ?>"> <br>

    <label for="age">Age: </label>
    <input type="number" id="age" name="age" value="<?= $objPerson->age; ?>"> <br>

    <label for="gender">Select gender: </label> <br>
    <input type="radio" id="male" name="gender" value="male" <?= $objPerson->gender === 'male' ? 'checked' : '' ?>> 
    <label for="male">Male</label> <br>
    <input type="radio" id="female" name="female" value="female" <?= $objPerson->gender === 'female' ? 'checked' : '' ?>> 
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
</body>
</html>