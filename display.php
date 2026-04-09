<?php
include "db.php";
session_start();

$timeout = 30;

// check login
if (!isset($_SESSION["user"])) {
    header("Location: login.html");
    exit();
}

// timeout check
if (isset($_SESSION['lasttime'])) {

    $duration = time() - $_SESSION['lasttime'];

    if ($duration > $timeout) {
        session_unset();
        session_destroy();

        header("Location: login.html");
        exit();
    }
}

// ✅ update time immediately after check
$_SESSION["lasttime"] = time();

// welcome message
echo "<h1>Welcome " . $_SESSION["user"] . "</h1>";

// fetch users
$sql = "SELECT * FROM user";
$res = $conn->query($sql);

echo "<table border='1'>";
echo "<tr><th>Id</th><th>Name</th><th>Email</th></tr>";

while ($row = $res->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row["id"]."</td>";
    echo "<td>".$row["name"]."</td>";
    echo "<td>".$row["email"]."</td>";
    echo "</tr>";
}

echo "</table>";

// logout link
echo "<br><a href='logout.php'>Logout</a>";
?>