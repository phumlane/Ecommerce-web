<?php
require aShopCart.php;

$total = 0;
$allitems = '';
$itmes = array();


$sql = "SELECT CONCAT(item_name, '(',qty,')') AS item_quantity, item_price FROM cart"

 ?>
