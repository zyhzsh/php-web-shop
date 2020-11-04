<link rel="stylesheet" href="app/views/css/homepagecontent.css">
    <main>
<?php 
include_once('includes/MvcClasses.php');
$product=new ProductController();
echo'
      <div class="TopSaleProducts">
        <h2 class="TopThreeTitle">Top Three Products</h2>
        <div class="TopSaleShowCaseA">
          <a href="productinfo.php?product=A-1"><img src="app/views/img/product/categoryA/A-1.jpg" alt=""></a>
        </div>
        <div class="TopSaleShowCaseB">
          <a href="productinfo.php?product=B-1"><img src="app/views/img/product/categoryB/B-1.jpg" alt=""></a>
        </div>
        <div class="TopSaleShowCaseC">
          <a href="productinfo.php?product=C-1"><img src="app/views/img/product/categoryC/C-1.jpg" alt=""></a>
        </div>
      </div>
    <div id="C-A" class="ShowCaseCategoryA">
      <h2 class="TitleA">CategoryA</h2>
      <div class="ShowCaseCategoryA-One"> <a href="productinfo.php?product=A-1"> <img src="app/views/img/product/categoryA/A-1.jpg" alt=""> </a> </div>
      <div class="ShowCaseCategoryA-Two"> <a href="productinfo.php?product=A-2"> <img src="app/views/img/product/categoryA/A-2.jpg" alt=""> </a> </div>
      <div class="ShowCaseCategoryA-Three"> <a href="productinfo.php?product=A-3"> <img src="app/views/img/product/categoryA/A-3.jpg" alt=""> </a> </div>
      <div class="ShowCaseCategoryA-Four"> <a href="productinfo.php?product=A-4"> <img src="app/views/img/product/categoryA/A-4.jpg" alt=""> </a> </div>
      <div class="ShowCaseCategoryA-Five"> <a href="productinfo.php?product=A-5"> <img src="app/views/img/product/categoryA/A-5.jpg" alt=""> </a> </div>
    </div>
    <div id="C-B" class="ShowCaseCategoryB">
      <h2 class="TitleB">CategoryB</h2>
      <div class="ShowCaseCategoryB-One"> <a href="productinfo.php?product=B-1"> <img src="app/views/img/product/categoryB/B-1.jpg" alt=""> </a> </div>
      <div class="ShowCaseCategoryB-Two"> <a href="productinfo.php?product=B-2"> <img src="app/views/img/product/categoryB/B-2.jpg" alt=""> </a> </div>
      <div class="ShowCaseCategoryB-Three"> <a href="productinfo.php?product=B-3"> <img src="app/views/img/product/categoryB/B-3.jpg" alt=""> </a> </div>
      <div class="ShowCaseCategoryB-Four"> <a href="productinfo.php?product=B-4"> <img src="app/views/img/product/categoryB/B-4.jpg" alt=""> </a> </div>
      <div class="ShowCaseCategoryB-Five"> <a href="productinfo.php?product=B-5"> <img src="app/views/img/product/categoryB/B-5.jpg" alt=""> </a> </div>
    </div>
    <div id="C-C" class="ShowCaseCategoryC">
     <h2 class="TitleC">CategoryC</h2>
      <div class="ShowCaseCategoryC-One"> <a href="productinfo.php?product=C-1"> <img src="app/views/img/product/categoryC/C-1.jpg" alt=""> </a> </div>
      <div class="ShowCaseCategoryC-Two"> <a href="productinfo.php?product=C-2"> <img src="app/views/img/product/categoryC/C-2.jpg" alt=""> </a> </div>
      <div class="ShowCaseCategoryC-Three"> <a href="productinfo.php?product=C-3"> <img src="app/views/img/product/categoryC/C-3.jpg" alt=""> </a> </div>
      <div class="ShowCaseCategoryC-Four"> <a href="productinfo.php?product=C-4"> <img src="app/views/img/product/categoryC/C-4.jpg" alt=""> </a> </div>
      <div class="ShowCaseCategoryC-Five"> <a href="productinfo.php?product=C-5"> <img src="app/views/img/product/categoryC/C-5.jpg" alt=""> </a> </div>
    </div>   
    ';



?>

    </main>