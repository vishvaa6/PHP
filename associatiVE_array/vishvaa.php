<?php

    $capitals = array("usa"=>"wasington.D.C",
                      "india" => "new delhi",
                      "japan" => "kyoto");
    
     
     
     
     
    $capital = $capitals[$_POST["country"]]; 
    
    echo $capital;



?>
