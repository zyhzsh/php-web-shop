<?php
define('_root',$_SERVER['DOCUMENT_ROOT'].'/s2_wad_moudule_shenghang_zhu/WebShop/');
 /**************Models************/
include_once(_root.'/app/models/BaseModel.php');
include_once(_root.'/app/models/AccountModel.php');
include_once(_root.'/app/models/ProductModel.php');
include_once(_root.'/app/models/ShoppingCartModel.php');
 /**************Controllers************/
include_once(_root.'app/controllers/AccountController.php'); 
include_once(_root.'app/controllers/ProductController.php');
include_once(_root.'app/controllers/ViewController.php');
include_once(_root.'app/controllers/ShoppingCartController.php');
/***************Data Object ************/
include_once(_root.'app/controllers/dataobject/Product.php');
include_once(_root.'app/controllers/dataobject/ShoppingCartItem.php');

?>