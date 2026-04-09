<?php
session_start();
include "db.php";
$name =$_POST["name"];
$pass=$_POST["pass"];

$sql="select * from users where name ='$name' and password='$pass'";
$res=$conn->query($sql);
if($res){
    $_SESSION["user"]=$name;;
    setcookie("user",$name,time()+60);
    $_SESSION["last_time"]=time();
    header("Location:services.php");
}
else{
    echo "invalid user";
}
?>