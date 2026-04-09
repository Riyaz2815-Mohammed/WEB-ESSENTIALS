<?php
include "db.php";

$name=$_GET["name"];

$sql = "select * from items t join users u on u.name=t.name";
echo "<table border='1'>";
echo "<tr><th>name</th><th>quantity</th><th>amount</th></tr>";
$res=$conn->query($sql);
while($row=$res->fetch_assoc()){
    echo "<tr>";
    echo "<td>".$row["name"]."</td>";
    echo "<td>".$row["quantity"]."</td>";
    echo "<td>".$row["amount"]."</td>";

    echo "</tr>";
}
echo "</table>";
?>