<?php
include "db.php";

$name= $_GET["name"];

$sql="select * from users where name='$name'";

if($conn){
    $res=$conn->query($sql);
    echo "<table border='1'>";
    echo "<tr><th>Id</th><th>Name</th><th>age</th><th>dob</th><th>email</th><th>pass</th></tr>";
    while($row=$res->fetch_assoc()){
    echo "<tr>";
    echo "<td>".$row["id"]."</td>";
    echo "<td>".$row["name"]."</td>";
    echo "<td>".$row["age"]."</td>";
    echo "<td>".$row["dob"]."</td>";
    echo "<td>".$row["eamil"]."</td>";
    echo "<td>".$row["password"]."</td>";
    echo"</tr>";
    }

    echo "</table>";
}
?>