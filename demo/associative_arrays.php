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
    
    //regular arrays
    $number = [1,2,3,4,5];
    echo $number[0] . "<br>";

    $names = ["Hector", "Lynette", "Noodle"]; 
    print_r($names);

    echo "<br>";
    $namesTwo = array("first_name" => "Hector", "last_name" => "Flores");

    echo "<br>";
    print_r($namesTwo);
    echo "<br>";
    echo $namesTwo["first_name"] . " " . $namesTwo["last_name"];

    ?>
</body>
</html>