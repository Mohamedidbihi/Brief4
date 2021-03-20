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
    <title>Modifier Etudiant</title>
</head>
<script>
  function succes() {
    swal({
      title: "Modification pass avec succes!",
      text: "Thanks",
      icon: "success",
      button: "Continue!",
    });
  }
</script>
<body>
    <div class="blank"></div>
    <?php
     $query="SELECT * FROM user where IdUser = '". $_SESSION['upd']."'";
     $result = $con->query($query);
     $row = $result->fetch_assoc();  
    ?>
    <center><h1>Modifier les informations de l'etudiant</h1></center>
    <div class="blank"></div>
   <div class="contForm">
    <form method="post" action="Processe.php"> 
        <div class="blank"></div>
         <div class="row">
        <div class="col-75">
          <input type="hidden" id="nom" name="iduser" value="<?php echo $row['IdUser']  ?>">
        </div>
      </div>
        <div class="row">
          <div class="col-25">
            <label for="fname">Nom</label>
          </div>
          <div class="col-75">
            <input type="text" onkeyup="validateNom()" id="nom" name="nom" value="<?php echo $row['NOM'] ?>">
          </div>
          <span id="checker1"></span><br>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="lname">Prenom</label>
          </div>
          <div class="col-75">
            <input type="text" id="prenom" onkeyup="validatePrenom()" name="prenom" value="<?php echo $row['PRENOM'] ?>">
          </div>
          <span id="checker2"></span><br>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="country">Date de naissance</label>
          </div>
          <div class="col-75">
            <input type="date" id="dn" onkeyup="validateDate()" name="Dn" value='<?php echo $row['Dn'] ?>'>
          </div>
          <span id="checker3"></span><br>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="subject">Email</label>
          </div>
          <div class="col-75">
            <input type="text" id="email" onkeyup="validateEmail()" name="email" value="<?php echo $row['email']  ?>">
          </div>
          <span id="checker4"></span><br>
        </div>
        <div class="row">
            <div class="col-25">
              <label for="subject">Mot de passe</label>
            </div>
            <div class="col-75">
                <input type="text" id="password" onkeyup="validatePassword()" name="password" value="<?php echo $row['password']  ?>" >
            </div>
            <span id="checker5"></span><br>
          </div>
          <div class="blank"></div>
        <div class="row">
          <center><input type="submit" value="Modifier" name="ModifEtud"></center>
        </div>
        <div class="blank"></div>
      </form>
      <?php
    if(($_SESSION['modif'])==1)
    {     
        echo '<script>succes();</script>';
        $_SESSION['modif']=0;
    }
?>
   </div> 
   <a href="GererEtudiant.php"><input type="submit" value="Return" id="return" ></a>
</body>
</html>