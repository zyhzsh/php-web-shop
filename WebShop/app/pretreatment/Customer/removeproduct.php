<?php
session_start();
if(isset($_SESSION['customer_id'])&&isset($_POST['productid']))
{
    include_once '../mvcclasses.php';
    $shoppingcart=new ShoppingCartController();
    $shoppingcart->Delete_Product_From_Shoppping_Cart($_SESSION['customer_id'],$_POST['productid']);
    header("Location:../../../?page=shoppingcart");
    exit();
}
?>