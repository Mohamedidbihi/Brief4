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
<script>
  function succes() {
    swal({
      title: "Modification pass avec succes!",
      text: "Thanks!",
      icon: "success",
      button: "Continue!",
    });
  }
</script>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style/style.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="./JS/regex.js" ></script>
  <title>Modifier formateur</title>
</head>

<body>
  <?php
     $query="SELECT *  FROM user where IdUser = '".$_SESSION["iduser"]."'";
     $result = $con->query($query);
     $row = $result->fetch_assoc();  
?>
  <div class="blank"></div>
  <center>
    <h1>Modifier les informations personnelles</h1>
  </center>
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
          <label for="fname">Nom :</label>
        </div>
        <div class="col-75">
          <input type="text" id="nom" name="nom" value="<?php echo $row['NOM']  ?>">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname">Prenom :</label>
        </div>
        <div class="col-75">
          <input type="text" id="prenom" name="prenom" value="<?php echo $row['PRENOM']  ?>">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="country">Date de naissance :</label>
        </div>
        <div class="col-75">
          <input type="date" id="dn" name="dn" value='<?php echo $row['Dn']  ?>'>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="subject">Email :</label>
        </div>
        <div class="col-75">
          <input type="text" id="email" name="email" value="<?php echo $row['email']  ?>">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="subject">Mot de passe :</label>
        </div>
        <div class="col-75">
          <input type="text" id="password" name="password" value="<?php echo $row['password']  ?>">
        </div>
      </div>
      <div class="blank"></div>
      <div class="row">
        <center><input  type="submit" value="Modifier" name="modifier"></center>
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
  <a href="AccueillFormeteur.php"><input type="submit" value="Return" id="return" href="GererEtudiant.php"></a>
</body>


</html>