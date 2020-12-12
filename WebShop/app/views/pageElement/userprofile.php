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
?>
<link rel="stylesheet" href="app/views/css/userprofile.css">
<main>
<div class= User_Profile_Container>
    <img src="<?php echo $_SESSION['portrait']?>" alt="">
    <?php 
        echo'Welcom back '.$_SESSION['lastname']. $_SESSION['firstname'];
    ?>
    <form action="app/pretreatment/User/logout.php" method="post">
    <button type="submit" class="ui-button" name="logout_submit">Logout</button>
    </form>
</div>
</main>
