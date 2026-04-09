<?php
session_start();
$name=$_POST["name"];
$email=$_POST["email"];
setcookie("user",$name,time()+30);
header("Location:new.php");
$_SESSION["user"]=$name;
$_SESSION["last_time"]=time();
?>


