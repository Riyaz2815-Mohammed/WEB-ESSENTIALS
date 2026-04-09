<?php
session_start();
if(isset($_COOKIE["user"])){
    echo "HI  ".$_COOKIE["user"];
}
 if(isset($_SESSION["user"])){
    echo "hi ".$_SESSION["user"];
 }
 if(time()-$_SESSION["last_time"]>30){
    session_unset();
    session_destroy();
    header("Location:session.html");
 }


?>
