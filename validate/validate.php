<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="validate.php" method="post">
        <label>age</label>
        <input name="age">
        <label>email</label>
        <input name="email">
        <input type="submit" name="login">
    </form>
</body>
</html>
<?php
if(isset($_POST["login"])){

    $age = filter_input(INPUT_POST,"age",FILTER_VALIDATE_INT);

    if(empty($age)){
        echo "not valid";

    }
    else{
        echo "your {$age} valied";
    }
}

// we can use email instead of age

?>