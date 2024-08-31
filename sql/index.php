<?php 
    include("database.php");


    $sql = "INSERT INTO user (username, password) 
            VALUES ('v')";

    try{
        mysqli_query($conn, $sql);

    }
    catch(mysqli_sql_exception){
        echo "could not register user";
    }


    mysqli_close($conn);


?>