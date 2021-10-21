<?php
$id=$_GET['pid'];
$cart=$_COOKIE['cart'];
$arr= explode(",", $cart);
$i= array_search($id, $arr);
unset($arr[$i]);
$str= implode(",", $arr);
setcookie("cart",$str);
header("location:cart.php");

?>
