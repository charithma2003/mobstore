<?php

include "connection.php";

$model = $_POST["m"];
//echo($model);

if(empty($model)){
    echo("Enter A Model Name To Continiue");
}if(strlen($model)> 20){
    echo("Model Name Is Too Long");
}else{
    $rs = Database::search("SELECT * FROM `model` WHERE `name` = '".$model."'");
    $num = $rs->num_rows;

    if($num > 0){
        echo("Model you Entered is Registered before");
    }else{
        $rs = Database::iud("INSERT INTO `model`(`name`) VALUES('".$model."')");
        echo("Registerd Successfully");
    }
}



?>