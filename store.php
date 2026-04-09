<?php

include "db.php";
session_start();

$name = $_POST["name"];
$email = $_POST["email"];


$sql = "INSERT INTO user (name, email) VALUES ( '$name', '$email')";

$result=$conn->query($sql);

if($result){
    echo "ADded successfully";

    header("Location:login.html");
}
else{
    echo "Error:";
}

?>