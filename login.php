<?php

include "db.php";
session_start();

$name = $_POST["name"];
$email = $_POST["email"];

$sql = "select * from user where name='$name'";

$res=$conn->query($sql);

if($res->num_rows > 0){

$_SESSION["user"]=$name;
$_SESSION["lasttime"]=time();

    echo "<h2>Login Successful</h2>";
    echo "<p>Redirecting in 2 seconds...</p>";

    header("refresh:2;url=display.php"); 
}

else{
    echo "<h2>NO User Found</h2>";
    echo "<p>Redirecting in 2 seconds...</p>";

    header("refresh:2;url=store.html"); 
    
}

?>
