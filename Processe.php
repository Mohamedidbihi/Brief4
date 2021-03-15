<?php
require_once ("Connect.php");
if(isset($_POST['Login']))
{
	if(empty($_POST['email']) || empty($_POST['password']))
       {
            header("location:login.php?Empty= Please Fill in the Blanks");
       }
       else
       {
$email = $_POST['email'];
$password = $_POST['password'];
$query = "select r.*,u.* from role r ,user u WHERE u.email = '".$email."' AND u.password = '".$password."' AND r.IdRole = u.idRole";
$result = $con->query($query);
$row = $result->fetch_assoc(); 

if( $row['Role'] == "Etudiant")
     {
        session_start(); 
        $_SESSION['iduser']=$row['IdUser'];
        header('Location:AccueillEtudiant.php');
     }   
     else if($row['Role']== "Formateur")
     { 
        session_start();
        $_SESSION['iduser']=$row['IdUser'];
        header('Location:AccueillFormeteur.php');
     }
        else
    {
        header('location:login.php?Invalid= Please Enter Correct User Name and Password ');
    }
}
}
    ?>
    