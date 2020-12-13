<?php 
session_start();
      if(isset($_SESSION['accounttype']))
      {
        if(!$_SESSION['accounttype']=='P')
        {
            header("Location:index.php");
            exit();
        }
      }
function GetProfile()
{
  echo'<div class="Profile_Container">
  <form action="app/pretreatment/Customer/updateprofile.php" enctype="multipart/form-data" method="post">
    <div class="Profile_Info">
      <br>
      <div class="protrait_container"><img src="'.$_SESSION['portrait'].'" alt=""></div><br>
      <div class="imgupload"><input type="file" name="img" accept="image/png"></div><br>
      <div class="infor_Container">
      <div class="customerfristname"><span style="color: red">*</span>Frist Name : </div><div><input type="text" name="firstname" placeholder="First Name" value="'.$_SESSION['firstname'].'"></div>
      <div class="customerlastname"><span style="color: red">*</span>Last Name : </div><div><input type="text" name="lastname" placeholder="Last Name" value="'.$_SESSION['lastname'].'"></div>
      <div class="email"><span style="color: red">*</span> Email :</div><div><input type="email" name="email" placeholder="Email Address" value="'.$_SESSION['email'].'"></div>
      <div class="country">Country :</div><div><input type="text" name="country" placeholder="Country" value="'.$_SESSION['country'].'"></div>
      <div class="city">City :</div><div><input type="text" name="city" placeholder="City" value='.$_SESSION['city'].'></div>
      <div class="street">Street :</div><div><input type="text" name="street" placeholder="Street" value="'.$_SESSION['street'].'" ></div>
      <div class="street">House Number :</div><div><input type="text" name="housenumber" placeholder="House number" value="'.$_SESSION['housenumber'].'" ></div>
      <div class="postcode">PostCode :</div><div><input type="text" name="postcode" placeholder="Post Code" value="'.$_SESSION['postcode'].'"></div><br>
    </div>
    <div class="btn_container"><button name="submit-change"class="btn-submit ui-button">Submit Change</button></div><br>
    </div>
  </form>
  </div>';
}      
?>
<link rel="stylesheet" href="app/views/css/userprofile.css">
<main>

<div class="Title">
  <div class=""><h1><?php echo 'Welcom back '.$_SESSION['firstname']." ".$_SESSION['lastname'];?></h1></div>
    <div><form action="app/pretreatment/User/logout.php" method="post">
    <button type="submit" class="ui-button" name="logout_submit">Logout</button>
    </form></div>
</div>  
<div class="Content">
<?php GetProfile();?>
<div class="Rencent_Order_Container">
  <div class="Order_Content_Container">
    <h2> Your Order </h2>
    <div class="Order-Lines">
      
    </div>
  </div>
</div>
</div>

</main>
