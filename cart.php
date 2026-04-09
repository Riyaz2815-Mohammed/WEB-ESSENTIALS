<?php

if(isset($_COOKIE["cart"])){

    $items = explode(",", $_COOKIE["cart"]);

    echo "<h2>Your Cart</h2>";

    foreach($items as $i){
        echo $i . "<br>";
    }

} else {
    echo "Cart is empty";
}

?>

<a href="shop.php">Back</a>