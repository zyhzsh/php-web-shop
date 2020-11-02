<link rel="stylesheet" href="app/views/css/userprofile.css">
<div class= User_Profile_Container>
    <img src="<?php echo $_SESSION['portrait']?>" alt="">
    <?php 
        echo'Welcom back '.$_SESSION['lastname']. $_SESSION['firstname'];
    ?>
    <form action="includes/logout.inc.php" method="post">
    <button type="submit" name="logout_submit">Logout</button>
    </form>
</div>