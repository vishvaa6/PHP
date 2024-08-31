<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="hashing.php" method="post">
        <label>username</label>
        <input type="text" name="password" >
        <input type="submit" name="login" value="login">

    </form>
</body>
</html>

<?php 
$password = $_POST["password"];

$hash = password_hash("$password", PASSWORD_DEFAULT);

if(password_verify("vishvaa123", $hash)){
    echo "logged in";

}
else{
    echo "incorrect password";

}





?>