<?php
//print_r displays whats inside arrays.
print_r($_GET);

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
    
    //dynamically set a url parameter
    $id = 10;
    

    ?>


    <a href="get.php?id=<?php echo $id ?>">CLICK HERE</a>
</body>
</html>
