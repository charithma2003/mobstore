<?php

include "connection.php";

$brand = $_POST["b"];
//echo($brand);

if(empty($brand)){
    echo("Enter The Brand Name To Continue.");
}elseif(strlen($brand)>20){
    echo("Brand Name You Entered is too long.");
}else{

    
    $rs = Database::search("SELECT * FROM `brand` WHERE `name` = '".$brand."'");

    $num= $rs->num_rows;

    if($num >0 ){
        echo("The Brand Name You Enterd Has Registerd Before.");
    }else{
        $rs = Database::iud("INSERT INTO `brand`(`name`)VALUES('".$brand."')");
        echo("Success");
    }
}

?>