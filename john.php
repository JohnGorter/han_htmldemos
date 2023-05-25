<?php
    $name = $_POST["name"];
    $pwd = $_POST["pwd"];
    $err = "";
    $cars = ["mercedes", "bmw", "audi", "opel"];

    function generateCars($carcollection) {
        $output =  "";
        foreach($carcollection as $car) {
        $output .= <<<CAR
        <div>$car</div>
        CAR;
        }
        return $output;
    }


    $content = generateCars($cars); 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= $content ?>
</body>
</html>