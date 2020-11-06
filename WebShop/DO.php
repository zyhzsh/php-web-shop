<?php
  include_once 'includes/MvcClasses.php';
  $x=new ShoppingCartController();
  $res=$x->Load_Shopping_Cart_Info('8');
  var_dump($res);
?>


