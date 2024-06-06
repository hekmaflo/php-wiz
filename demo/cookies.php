<?php

$name = "SomeName";
$value = 100;
//uses a time function and uses seconds
$expiration = time() + (60 * 60 * 24 * 7);
// the time() is going to take the current time. and the calculation after is how long the cookie will stay in the browser of the user.

setcookie($name, $value, $expiration);
//set cookies there is a super global (assosiatve array)


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

if(isset($_COOKIE["SomeName"])){
    // this will show the value put into the cooke;
    $someOne = $_COOKIE["SomeName"];

    echo $someOne;
} else {
    $someOne = "";
}

?>    
</body>
</html>
