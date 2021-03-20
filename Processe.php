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
if (isset($_POST['modifier']))
 {
    $id = $_POST['iduser'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $dn = $_POST['dn'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    mysqli_query($con, "UPDATE user SET NOM='$nom', PRENOM='$prenom',dn='$dn',email='$email',password='$password' WHERE IdUser=$id");
    session_start(); 
    $_SESSION['modif']=1;
    header('location: ModifierFormateur.php');
}
if (isset($_GET['del']))
{
$iduser = $_GET['del'];
mysqli_query($con,"Delete from user where IdUser=$iduser");
header('location: GererEtudiant.php');
}
if (isset($_GET['upd']))
{
$iduser = $_GET['upd'];
session_start(); 
$_SESSION['upd']=$iduser ;
 header('location: ModifierEtudiant.php');
}
if (isset($_GET['delnote']))
{
$ide = $_GET['delnote'];
$idm = $_GET['idm'];
mysqli_query($con,"Delete from exam where ide=$ide and idm=$idm");
header('location: GererLesNotes.php');

}

if (isset($_POST['Ajoutetud']))
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $dn = $_POST['Dn'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $campus = $_POST['campus'];
    if($campus=='safi')
    {
$idc=1;
    }
    else
    {
$idc=2;
    }
    mysqli_query($con, "INSERT INTO user( `email`, `password`, `PRENOM`, `NOM`, `Dn`, `idrole`) VALUES('$email','$password','$prenom','$nom','$dn','2')");
    $query = "SELECT * from user where email='$email'";
    $result = $con->query($query);
    $rw = $result->fetch_assoc();
    $iduser=$rw["IdUser"];
    mysqli_query($con,"INSERT INTO etudiant(`iduser`,`idcam-pus`) VALUES ('$iduser','$idc')");
    session_start(); 
    $_SESSION['add']=1;
    header('location: AjouterEtudiant.php');
}
if (isset($_POST['ModifEtud']))
 {
    $id = $_POST['iduser'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $dn = $_POST['Dn'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    mysqli_query($con, "UPDATE user SET NOM='$nom', PRENOM='$prenom',Dn='$dn',email='$email',password='$password' WHERE IdUser=$id");
    session_start(); 
    $_SESSION['modif']=1;
    header('location: ModifierEtudiant.php');
}
// if (isset($_POST['updnote']))
//  {
//     $id = $_POST['iduser'];
//     $nom = $_POST['nom'];
//     $prenom = $_POST['prenom'];
//     $dn = $_POST['dn'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];
//     mysqli_query($con, "UPDATE user SET NOM='$nom', PRENOM='$prenom',dn='$dn',email='$email',password='$password' WHERE IdUser=$id");
//     session_start(); 
//     $_SESSION['modif']=1;
//     header('location: ModifierFormateur.php');
// }
if (isset($_GET['upnote']))
{
$ide = $_GET['upnote'];
$idm = $_GET['idm'];
session_start(); 
$_SESSION['ide']=$ide ;
$_SESSION['idm']=$idm ;
 header('location: ModifierNote.php');
}
    ?>
    