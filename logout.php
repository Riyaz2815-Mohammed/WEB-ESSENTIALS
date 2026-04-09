<?php
session_start();

session_unset();
session_destroy();

setcookie("user",$name,time()-3600);

header("Location:login.html");

?>
