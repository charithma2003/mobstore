<?php

session_start();
include "connection.php";

$firstname = $_POST["u"];
$password = $_POST["p"];


if(empty($firstname)){
echo("Please Enter Your First name.");
}elseif(empty($password)){
echo("Please Enter Your Password");
}else{
    $rs = Database::search("SELECT * FROM `user` WHERE `fname` = '" . $firstname . "' AND `password` = '" . $password . "'");
    $num = $rs->num_rows;

    if ($num == 1) {

        $d =    $rs->fetch_assoc();

        if ($d["user_type_id"] == 1) {
            echo ("Success");

            $_SESSION["a"] = $d;
        } else {
            echo ("You Don't have an Admin Account");
        }
    } else {
        echo ("Invalid Username or Password");
    }
}

?>