<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static</title>
</head>
<body>
    <?php
        require 'Weather.php';
        print_r(Weather::$tempConditions);
        echo "<br>";
        echo Weather::celsiusToFarenheit(20);
        echo "<br>";
        echo Weather::determinTempCondition(80);

    ?>
</body>
</html>





<!-- 
Array ( [0] => cold [1] => mild [2] => warm )
68
warm 
-->