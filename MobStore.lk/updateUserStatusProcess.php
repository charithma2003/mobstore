<?php

include "connection.php";

$user = $_POST["u"];


if(empty($user)){
    echo("Enter A user Id ");
}else{
    $rs = Database::search("SELECT * FROM `user` WHERE `id` = '".$user."'");
    $num = $rs->num_rows;
    //echo($num);

    if($num == 1){
        

        $d = $rs->fetch_assoc();

        if($d["status"] == 1){
            //Deactive
            Database::iud("UPDATE `user` SET `status` = '0' WHERE `id` = '".$user."'");
            echo("Deactived");
        }
        if($d["status"] == 0){
            //active
            Database::iud("UPDATE `user` SET `status` = '1' WHERE `id` = '".$user."'");
            echo("Actived");
        }
    }else{
        echo("Invalid User Id");
    }
}


?>