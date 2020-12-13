<?php
  include_once 'app/pretreatment/mvcclasses.php';
  $elementcontroller=new ViewController();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <!--Icon-->
    <script src="https://kit.fontawesome.com/7beb03d50e.js" crossorigin="anonymous"></script>
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">   
   
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="app/views/css/headerandfooter.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>XXXX WebShop</title>
  </head>
  <body style="line-height: 1.5;">
    <div class="content" style>
    <?php $elementcontroller->GetElement("header");?>
    <script type="text/javascript" src="app/views/javascript/jQuery/jQuery.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <?php
      if(isset($_GET['page']))
      {
        switch ($_GET['page'])
        {
          case 'homepage': $elementcontroller->GetElement("homepagecontent");break;
          case 'profile':  $elementcontroller->GetElement("userprofile");break;
          case 'login': $elementcontroller->GetElement("login");break;
          case 'signup': $elementcontroller->GetElement("signup");break;
          case 'productinfo':$elementcontroller->GetElement("productinfo");break;
          case 'productmanager': $elementcontroller->GetElement("productmanager");break;
          case 'shoppingcart': $elementcontroller->GetElement("shoppingcart");break;
          case 'about': $elementcontroller->GetElement("about");break;
          case 'search': $elementcontroller->GetElement("search");break;
        }
      }
      else{
        $_GET['page']="homepage";
        $elementcontroller->GetElement("homepagecontent");
      }?>
    </div>
  </body>
  <?php $elementcontroller->GetElement("footer");?> 
</html>


