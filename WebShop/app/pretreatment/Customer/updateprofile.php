<?php
    session_start();
    if(isset($_POST['submit-change']))
    {
        if(isset($_POST['firstname'])&&isset($_POST['lastname'])&&isset($_POST['email']))
        {
            include_once '../mvcclasses.php';
            $db=new AccountModel();
            $result=$db->UpDateProfile($_POST['firstname'],$_POST['lastname'],$_POST['email'],$_POST['country'],$_POST['city'],$_POST['street'],$_POST['housenumber'],$_POST['postcode'],$_FILES['img']);
            if($result==true)
            {
                header("Location:../../../?page=profile&message=uploadsucceed");
                exit();
            }
        }
        else
        {
            header("Location:../../../?page=profile&message=Please At Least filled in Name and Email");
            exit();
        }
    }

?>