<?php
include "db.php";
session_start();
if(!isset($_SESSION["user"])){
    header("Location:login.html");

}

if(time()-$_SESSION["last_time"]>60){
    session_unset();
    session_destroy();
    header("Location:login.html");
}

$_SESSION["last_time"]=time();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <h1>Hi welcome to this page</h1>
    <br><br>
    <a href="login.php">Logout</a>
    <br>
    <form action="display.php" method="get">
        name: <input name="name" type="text" placeholders="name">
    </form>
</body>
</html>