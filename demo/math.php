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
        echo 56 + 45;
        echo "<br>";
        echo 56 - 45;
        echo "<br>";
        echo 56 * 45;
        echo "<br>";
        echo 56 / 45;
        echo "<br>";
        echo 45 + 34 * 45 / 421 - 45;

        // order of operations
        echo 5 + 5 * 10; // 55
        echo "<br>";
        echo (5 + 5) * 10; // 100

        //using vars

        $numberOne = 12;
        $numberTwo = 24;

        echo $numberOne + $numberTwo; // 36
    ?>
</body>
</html>