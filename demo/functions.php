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

function saySum() {
    echo "Hello there, do you like the class?";
}

saySum();

function calculate() {
    echo 456 + 345;
}

function init() {
    calculate();
    saySum();
}

init();
?>
</body>
</html>