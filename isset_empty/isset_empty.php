<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="isset_empty.php" method="post">
        <label>username</label>
        <input type="text" name="username"><br>
        <label>password</label>
        <input type="text" name="password"><br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>

<?php

//if(isset($_POST["login"])){

 //   $username = $_POST["username"];
  //  $password = $_POST["password"];

  //  if(empty($username)){
        //echo "username not valid";
   // }
  //  elseif(empty($password)){
   //     echo "password is not valid";
   // }
   // else{
   //     echo "Hello {$username}";
   // }
//}
foreach($_POST as $key => $value){
    echo "{$key} = {$value} <br>";
}
 ?>


