<?php 
include 'functions.php';

if(isset($_POST['submit'])){
    updateData();
}


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
    <div class="container">
        <div class="col-sm-6">
            <form action="login_update.php" method="post">
            <div>
                <label for="username">username</label>
                <input type="text" id="username" name="username">
            </div>
            
            <div>
                <label for="password">password</label>
                <input type="password" id="password" name="password">
            </div>
            <div>
                <select name="id" id="id">
                    <!-- <option value="">1</option> -->
                    <?php
                    // this is at the functions.php
                        showAllData();
                    ?>
                </select>
            </div>

            <input type="submit" name="submit" value="UPDATE">
            </form>
        </div>
    </div>
</body>
</html>