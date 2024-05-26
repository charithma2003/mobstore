<?php

include "connection.php";

$color = $_POST["c"];



if(empty($color)){
    echo("Enter A Color to Continue");
}else if(strlen($color)> 20){
    echo("Colour Name is Too Long");
}else{
    $rs = Database::search("SELECT * FROM `color` WHERE `name` = '".$color."'");
    $num = $rs->num_rows;

    if($num > 0){
        echo("Color Name Registered Before");
    }else{
        $s = Database::iud("INSERT INTO `color`(`name`)VALUES ('".$color."')");
        echo("Success");
    }
}

?>