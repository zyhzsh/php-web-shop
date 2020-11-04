<?php
  include_once 'includes/MvcClasses.php';
  $elementcontroller=new ElementController();

  $x =new ProductController();
  $s=$x->Get_Product_List();
  foreach($s as $z)
  {
      echo $z['product_id'];
  }

?>


