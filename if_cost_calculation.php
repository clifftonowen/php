<?php
$anggrekstreetlength = $_POST['anggrek'] * 1000;
$kambojastreetlength = $_POST['kamboja'];
$lotusstreetlength = $_POST['lotus'] / 100;
$totalstreetlength = $anggrekstreetlength + $kambojastreetlength + $lotusstreetlength;
$totalcostmaterial =  $totalstreetlength * 15000;
$totalworkerfee = $totalstreetlength / 1000 * 650000;
$totalcost = $totalcostmaterial + $totalworkerfee;

var_dump(isset($anggrekstreetlength));
var_dump(isset($kambojastreetlength));
var_dump(isset($lotusstreetlength));


$description = "To carry out road repairs with a total length of  {$totalstreetlength}, Perumahan Graha Sentosa must prepare a total cost of Rp. {$totalcost}";

$iscashready = false;

if ($totalstreetlength > 0  ) {
    if ($iscashready == true) {
        $output = '<p style="color: green;">The project will be implemented soon!</p>';
        
    } else {
        $output =  "<p style='color: red'>The project implementation will be postponed until funds are available.</p>";
    }
    
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cost Calculation</title>
</head>
<body>
    <h1>Dynamics Calculating Project Cost</h1>
    <form action="" method="post">
    <label for="anggrek">Anggrek Street (kilometer): </label>
    <Input type="text" id="anggrek" name="anggrek" ></Input>
    <br>
    <label for="kamboja">Kamboja Street (meter):</label>
    <input type="text" id="kamboja" name="kamboja" ></Input>
    <br>
    <label for="Lotus">Lotus Street (centimeter):</label>
    <input type="text" id="lotus" name="lotus" ></Input>
    <br>
        <button type="submit">Count</button>
    </form>
    <p>
        <?php 
        if ($totalstreetlength > 0 ) {
            echo $description;
        }
    
        ?>
    </p>
    <br>
    <p >
        <?=$output;?>
    </p>
</body>
</html>
