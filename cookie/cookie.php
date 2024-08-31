<?php
setcookie("fav_food", "briyani" ,time()+ -0, "/");





if(isset($_COOKIE["fav_food"])){
    echo "BUY SOME {$_COOKIE["fav_food"]}";
}
else{
    echo 'i dont know';
}





?>