<?php

    if (isset($_POST['check2'])) {
       echo "check 2 active";
    }elseif (isset($_POST['check1'])) {
       echo "check 1 active";
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
    <form action="exemple.php" method="post">
        <input type="checkbox" name="check1">
        <!-- <input type="checkbox" name="check2"> -->
        <input type="submit" value="valider1">
    </form>

    <form action="exemple.php" method="post">
        <!-- <input type="checkbox" name="check1"> -->
        <input type="checkbox" name="check2">
        <input type="submit" value="valider2">
    </form>
</body>
</html>