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
        $numberList = array(23, 64, 267, 478, 8765,345, '5345', '<h1> Hello </h1>');
        //newer way to declare an array.
        $numberListTwo = [];

        echo $numberList[0];
        echo $numberList[7];
        echo $numberList[1];

        // print_r
        print_r($numberList);
    ?>
</body>
</html>