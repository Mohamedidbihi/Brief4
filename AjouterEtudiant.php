<?php
require_once ("Connect.php");
    session_start();
    if(empty($_SESSION['iduser']))
    {     
        header("location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="./style/style.css">
    <script src="./JS/regex.js" ></script>
    <title>Ajouter Etudiant</title>
</head>
<script>
  function succes() {
    swal({
      title: "Ajoute pass avec succes!",
      text: "Thanks",
      icon: "success",
      button: "Continue!",
    });
  }
</script>
<body>
    <center><h1>Ajouter Etudiant</h1></center>
    <div class="blank"></div>
   <div class="contForm">
    <form action="Processe.php" method="post">
        <div class="blank"></div>
        <div class="row">
          <div class="col-25">
            <label for="fname">Nom</label>
          </div>
          <div class="col-75">
            <input type="text" id="nom" onkeyup="validateNom()" name="nom" placeholder="Nom de l'etudiant">
          </div>
          <span id="checker1"></span><br>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="lname">Prenom</label>
          </div>
          <div class="col-75">
            <input type="text" id="prenom" onkeyup="validatePrenom()" name="prenom" placeholder="Prenom de l'etudiant">
          </div>
          <span id="checker2"></span><br>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="country">Date de naissance</label>
          </div>
          <div class="col-75">
            <input type="date" id="dn" onkeyup="validateDate()" name="Dn" >
          </div>
          <span id="checker3"></span><br>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="subject">Email</label>
          </div>
          <div class="col-75">
            <input type="text" id="email" onkeyup="validateEmail()" name="email" placeholder="Email de l'etudiant">
          </div>
          <span id="checker4"></span><br>
        </div>
        <div class="row">
            <div class="col-25">
              <label for="subject">Mot de passe</label>
            </div>
            <div class="col-75">
                <input type="password" id="password" onkeyup="validatePassword()" name="password" placeholder="mot de passe de l'etudiant" >
            </div>
            <span id="checker5"></span><br>
          </div>
          <div class="row">
          <div class="col-25">
            <label for="subject">Campus youcode :</label>
          </div>
          <div class="col-75">
          <select name='campus'>
  <option value="safi">Safi</option>
  <option value="YOUSOUFIA">Youssoufia</option>
      </select>
          </div>
        </div>
          <div class="blank"></div>
        <div class="row">
          <center><input type="submit" value="Ajouter" name="Ajoutetud"></center>
        </div>
        <div class="blank"></div>
      </form>
   </div> 
   <a href="GererEtudiant.php"><input type="submit" value="Return" id="return"  href="GererEtudiant.php"></a>
   <?php
    if(($_SESSION['add'])==1)
    {     
        echo '<script>succes();</script>';
        $_SESSION['add']=0;
    }
?>
</body>
</html>