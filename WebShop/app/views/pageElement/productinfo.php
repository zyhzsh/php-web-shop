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


<link rel="stylesheet" href="app/views/css/productinfo.css">
<main id="in">
<div class="prodcutimg"><img src="<?php echo $product->Get_Product_img();?>" alt=""></div>
<div class="productinfo">
    <p>Product Name: <?php echo $product->Get_Product_Name(); ?></p>
    <p>Prodcut stock: <?php echo $product->Get_Product_Stock();?> </p>
    <p>Price: <?php echo $product->Get_Product_Price();?> EUR</p>
</div>
<div class="shoppingbtn">
    <form action="app/pretreatment/Customer/addtoshoppingcart.php" method="post">
    <input type="number" name="quantity" min=1 max=<?php echo $product->Get_Product_Stock(); ?> value=1 >
    <input type="hidden" name="page" value="<?php echo $_GET['page'];?>"> 
    <input type="hidden" name="product_id" value="<?php echo $_GET['product']; ?>"><br><br>
    <button type="submit" class="ui-button" name="Add_To_Cart">Add to Cart <i class="fas fa-shopping-cart"></i></button>
    </form>
</div>
<div class="productdetail_container">
<article class="productdetail">
    <h2><?php echo "Product Name:".$product->Get_Product_Name(); ?></h2>
    <?php echo $product->Get_Product_Descrition();?>
</div>
</div>
</main>
