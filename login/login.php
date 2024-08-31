<?php
    include("database.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test login</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <label>username</label>
        <input type="text" name="username"><br>
        <label>password</label>
        <input type="password" name="password"><br>
        <input type="submit" name="submit" value="submit"><br>
    </form>
</body>
</html>

<?php
   if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    if(empty($_POST["username"])){
        echo "plese enter username";
    }
    elseif(empty($_POST["password"])){
        echo "please enter password";
    }
    else{
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO user(username,password) VALUES('$username', '$hash')";
       
        try{
            Mysqli_query($conn, $sql);
            echo "you are registered";
        }
        catch(mysqli_sql_exception){
            echo "the username is taken";
        }    
    }


   }
   mysqli_close($conn);

?>