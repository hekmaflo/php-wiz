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
    // this only works with arrays
    $numbers = [345, 397, 77, 89, 101, 99];
    foreach($numbers as $number) {
        echo $number . "<br>";
    }

    ?>
</body>
</html>