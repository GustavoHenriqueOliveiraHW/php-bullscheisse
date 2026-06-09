<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $ml = $_POST["ml"];
    $m = $_POST["m"];
    $min = $_POST["min"];
    $l = $ml/1000;
    $km = $m / 1000;
    $hr = $min / 60;
    echo "<p>$ml ml em litros é $l</p>";
    echo "<p>$m metros em kilometros é $km</p>";
    echo "<p>$min minutos em horas é $hr</p>";

    $uppers_ready; // I love genesis

    $upper_bound = (int)$_POST["x"];
    $primos;
    $i = 1;
    while($i < $upper_bound){
        
    }
    echo "os primos entre 0 e $upper_bound são" . implode(', ', $primos)
    ?>
</body>
</html>