<?php
$anggrekstreetlength = 800;
$kambojastreetlength = 500;
$lotusstreetlength = 25;
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
    <h1>Calculating Project Cost</h1>
    <p>Description: To carry out road repairs with a total length of <?= $totalstreetlength?>, Perumahan Graha Sentosa must prepare a total cost of Rp. <?= number_format($totalcost, 0, ',', '.')?></p>
</body>
</html>
