<?php
  if(isset($_SESSION['accounttype']))
  {
    if(!$_SESSION['accounttype']=='P')
    {
        header("Location:index.php");
        exit();
    }
  }
?>

<link rel="stylesheet" href="app/views/css/productmanager.css">
<main>
    <div class="productmanagerpage_container">
        <h3 class="welcomback_Title">Welcome Back Manager~!</h3>
        <form action="includes/logout.inc.php" method="post">
            <button type="submit" name="logout_submit">Logout</button>
        </form>
    </div>
</main>