<?php
function GetShortDescription($description)
{
    $temp="";
    if(strlen($description)>50)
    {
        for($i=0;$i<=47;$i++)
        {
            $temp.=$description[$i];
        }
        $temp.="...";
    }
    else
    {
        $temp=$description;
    }
    return $temp;
}
function Generate_List_Of_Product_Card_By_Category($Category)
{
    echo '<div class="row text-center py-3"> ';
    $product_controller=new ProductController();
    $product_list=$product_controller->Get_Product_List_By_Category($Category);
    foreach($product_list as $x)
    {
        $productid=$x['product_id'];
        $productname=$x['product_name'];
        $productprice=$x['current_price'];
        $productimg=$x['img_link'];
        $productshortdescription=GetShortDescription($x['description']);
        CreateProductShowCase($productid,$productname,$productimg,$productprice,$productshortdescription);
    }
    echo '</div>';
}

function CreateProductShowCase($productid,$productname,$productimg,$productprice,$productshortdescription)
{
    echo '
    <div class="col-md-3 col-sm-6 my-3 my-md-2">
        <form action="app/pretreatment/Customer/addtoshoppingcart.php" method="post">
        <div class="card shadow">
            <a href="?page=productinfo&product='.$productid.'"><img src="'.$productimg.'" alt="" class="img-fluid card-img-top"></a>
        </div>
        <div class="card-body">
            <h5 class="card-title">'.$productname.'</h5>
            <p class="card-text">'.$productshortdescription.'</p>
            <h5>
            <span class="price">'.$productprice.' EUR</span>
            </h5>
            <input type="hidden" name="product_id" value="'.$productid.'">   
            <input type="hidden" name="quantity" value=1>
            <input type="hidden" name="page" value="'.$_GET['page'].'">         
            <button type="submit" class="btn ui-button my-3" name="Add_To_Cart">Add to Cart <i class="fas fa-shopping-cart"></i></button>
        </div>
    </form>
    </div>
    ';
}
function GetCarousel()
{
    $product_controller=new ProductController();
    $result=$product_controller->Get_New_Products(3);
    echo '<div class="ProductDescription">';
    $i=0;
    foreach($result as $x)
    {
        $descriptionid="";
        switch($i){
            case 0: $descriptionid="One"; break;
            case 1: $descriptionid="Two"; break;
            case 2: $descriptionid="Three"; break;
        }   
        echo    
        '<div style="display:none" id="'.$descriptionid.'" class="product_intro">
            <h3>'.$x->Get_Product_Name().'</h3>
            <h4>'.$x->Get_Product_Price().'EUR</h4>
            <p>'.$x->Get_Product_Descrition().'</p>
            <br>
            <br>
            <a id="learnmore" class="ui-button" href="?page=productinfo&product='.$x->Get_Product_Id().'">Learn More</a>
            </div>';
            $i++;
    }
    echo '</div>';
    echo '<div class="carousel-container">
    <i class="fas fa-arrow-left" id="btn-Rrev"></i>
    <i class="fas fa-arrow-right" id="btn-Next"></i>
    <div class="carousel-slide">
    <img src="'.$result[2]->Get_Product_img().'" id="lastClone" alt="Three">
    <img src="'.$result[0]->Get_Product_img().'" alt="One">
    <img src="'.$result[1]->Get_Product_img().'" alt="Two">
    <img src="'.$result[2]->Get_Product_img().'" alt="Three">
    <img src="'.$result[0]->Get_Product_img().'" id="firstClone" alt="One">
    </div>
    </div>';

}
?>
<!-- Main Content-->
<link rel="stylesheet" href="app/views/css/homepagecontent.css">
<main>
<h2 style="text-align: center">What's New ?</h2>
<div class="newproductshowcase">
<?php 
GetCarousel();
?>
</div>
<div class="container"> 
    <?php
    echo '<h2 id="C-Shose" class="text-center mt-5">Shoes</h2>';
    Generate_List_Of_Product_Card_By_Category("Shoes");
    echo '<h2 id="C-Watch"class="text-center mt-5">Watch</h2>';
    Generate_List_Of_Product_Card_By_Category("Watch");
    echo '<h2 id="C-Bag"class="text-center mt-5">Bag</h2>';
    Generate_List_Of_Product_Card_By_Category("Bag");
    $product_controller=new ProductController();
    $product_controller->Close_The_Connection();
    ?>
    <script type="text/javascript" src="app/views/javascript/Effect/carousel.js"></script>
</div>
</main>



