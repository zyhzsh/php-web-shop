<?php
  include_once 'includes/MvcClasses.php';
  $elementcontroller=new ElementController();
  session_start();
  //when is not loggined in
  if(!isset($_SESSION['username']))
  {
    header("Location:login.php");
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="app/views/css/headerandfooter.css">
    <!--Icon-->
    <script src="https://kit.fontawesome.com/7beb03d50e.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="app/views/js/js.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>XXXX WebShop</title>
  </head>
  <body>
    <div class="content">
    <?php $elementcontroller->GetElement("header");?>
    <?php $elementcontroller->GetElement("userprofile")?>
    </div>
  </body>
  <?php $elementcontroller->GetElement("footer")?> 
</html>
