<?php
$anggrekstreetlength = $_GET['anggrek'] * 1000;
$kambojastreetlength = $_GET['kamboja'];
$lotusstreetlength = $_GET['lotus'] / 100;
$totalstreetlength = $anggrekstreetlength + $kambojastreetlength + $lotusstreetlength;
$totalcostmaterial =  $totalstreetlength * 15000;
$totalworkerfee = $totalstreetlength / 1000 * 650000;
$totalcost = $totalcostmaterial + $totalworkerfee;
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
    <form action="" method="get">
    <label for="anggrek">Anggrek Street (kilometer): </label>
    <Input type="text" id="anggrek" name="anggrek"></Input>
    <br>
    <label for="kamboja">Kamboja Street (meter):</label>
    <input type="text" id="kamboja" name="kamboja">
    <br>
    <label for="Lotus">Lotus Street (centimeter):</label>
    <input type="text" id="lotus" name="lotus">
    <br>
        <button type="submit">Count</button>
    </form>
    <p>To carry out road repairs with a total length of <?= $totalstreetlength?>, Perumahan Graha Sentosa must prepare a total cost of Rp. <?= number_format($totalcost, 0, ',', '.')?></p>
</body>
</html>
