<?php 
require_once('connect.php');
session_start();

    if(isset($_POST['seconnecter']))
    {
       if(empty($_POST['email']) || empty($_POST['password']))
       {
            header("location:login.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            $email=$_POST['email'];
            $password=$_POST['password'];
            $query="select * from utulisateur where email='".$email."' and password='".$password."'";
            $result=mysqli_query($con,$query);
            if(mysqli_fetch_assoc($result))
            {
                
                $_SESSION['User']=$email;
                header("location:accueils.php?");
            }
            else
            {
                header("location:login.php?Invalid= Please Enter Correct User Name and Password ");
                echo $email;
            }
       }
    }
    else
    {
        echo 'Not Working Now Guys';
        if($_POST['password']=="admin")
        {
            echo "yes";
            echo $password;

        }
        else echo "no"; echo $password;
    }
?>