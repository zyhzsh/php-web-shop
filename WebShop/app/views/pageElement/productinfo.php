<link rel="stylesheet" href="app/views/css/productinfo.css">
<main>
<?php
 if(isset($_GET['product']))
 {
    $productid=$_GET['product'];
    $productcontroller=new ProductController();
    $product=$productcontroller->Get_Product_Object_By_Id($productid);
 }
 else
 {
     header("Location:index.php");
     exit();
 }
 if($product==null)
 {
    header("Location:index.php");
     exit();
 }
?>
<div class="prodcutimg"><img src="<?php echo $product->Get_Product_img();?>" alt=""></div>
<div class="productinfo">
    <p>Product Name: <?php echo $product->Get_Product_Name(); ?></p>
    <p>Prodcut stock: <?php echo $product->Get_Product_Stock();?> </p>
    <p>Price: <?php echo $product->Get_Product_Price();?> EUR</p>
</div>
<div class="shoppingbtn">
    <form action="">
    <input type="text">    
    <button>CheckOut</button><br><br>
    <button>Add To Shopping Cart</button>
    </form>
</div>
<div class="productdetail_container">
<article class="productdetail">
    <h2><?php echo "Product Name:".$product->Get_Product_Name(); ?></h2>
    <?php echo $product->Get_Product_Descrition();?>
</div>

</div>
</main>
