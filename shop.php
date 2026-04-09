<?php

$item = $_POST["item"];
if(isset($_COOKIE["cart"])){
    $items=$_COOKIE["cart"].",".$item;
}
else{
    $items=$item;
}
setcookie("cart",$items,time()+600);
echo "Added".$item;

?>

<form  method="post">
    <select name="item" >
        <option value="Egg">Egg</option>
        <option value="Milk">Milk</option>
        <option value="Butter">Butter</option>
        <option value="Brocolli">Brocolli</option>
        
    </select>
    <input type="submit" value="Add to Cart">
</form>
<a href="cart.php">View</a>
