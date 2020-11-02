<link rel="stylesheet" href="app/views/css/productinfo.css">
<main>
<?php
  
  $postcontroller=new PostController();
 // $postcontroller->Productinfo();
 // $postcontroller->ProductImg();
  
?>
<div class="prodcutimg"><img src="app/views/img/product/categoryB/B-1.jpg" alt=""></div>
<div class="productinfo">
    <p>Product Name: Mountain</p>
    <p>Prodcut stock: 26 left </p>
    <p>Price: 15 EUR</p>
</div>
<div class="shoppingbtn">
    <form action="">
    <input type="text">    
    <button>CheckOut</button><br>
    <button>Add To Shopping Cart</button>
    </form>
</div>
<div class="productdetail">
<p>Product Information: Mountain</p>
<br>
<pre>Lorem Ipsum is simply dummy text of the printing and 
     typesetting industry. Lorem Ipsum 
     has been the industry's st
     andard dummy text ever since the 1500s, when 
     an unknown printer took a galley of ty
     pe and scrambled it to make a type specimen book. It has survived n
     ot only five centuries, but also the leap into electronic t
     ypesetting, remaining essentially unchanged. It was popularised in the
     1960s with the release of Letraset sheets containing Lorem Ipsum pas
     sages, and more recently with desktop publishing software like Aldus Page
     Maker including versions of Lorem Ipsum.</pre>
</div>
</main>