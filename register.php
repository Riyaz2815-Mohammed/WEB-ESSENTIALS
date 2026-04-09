<?php
include "db.php";

$name=$_POST["name"];
$age = $_POST["age"];
$dob=$_POST["dob"];
$email=$_POST["email"];
$pass=$_POST["pass"];

$sql = "insert into users(name,age,dob,eamil,password) values('$name','$age','$dob','$email','$pass')";


if($conn->query($sql)===TRUE){
    header("Location:login.html");
}
else{
    echo $conn->error;
}

?>
