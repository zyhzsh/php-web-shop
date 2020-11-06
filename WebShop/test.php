<?php
  include_once 'includes/MvcClasses.php';
  $elementcontroller=new ElementController();
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!--Icon-->
    <script src="https://kit.fontawesome.com/7beb03d50e.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="app/views/js/js.js"></script>
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">   
    <link rel="stylesheet" href="app/views/css/headerandfooter.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>XXXX WebShop</title>
  </head>
  <body>
    <div class="content">
    <?php $elementcontroller->GetElement("header");?>
    <?php $elementcontroller->GetElement("test")?>
    </div>
<?php $elementcontroller->GetElement("footer")?>
  </body>
   
</html>


