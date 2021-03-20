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
    <link rel="stylesheet" href="./style/style.css">
    <title>Espace formateur</title>
</head>
<body>
    <nav>
        <input id="nav-toggle" type="checkbox">
        <div class="logo"><img src="img/unknown.png"></div>
        <ul class="links">
           <li><a href="AccueillFormeteur.php">Accueil</a></li>
           <div class="active"> <li><a href="#home">Gerer les Etudiants</a></li></div>
            <li><a href="GererLesNotes.php">Gerer les Notes</a></li>
            <li><a href="GererFiliereModule.php">Gerer les Modules</a></li>
            <li><a href="Deconnexion.php">Deconnexion</a></li>
        </ul>
        <label for="nav-toggle" class="icon-burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </label>
    </nav>
    <div class="container">
        <div class="TitleEtud">
        <H1>Tous Les Etudiants</H1>
        <a href="AjouterEtudiant.php"><input type="button" value="Ajouter Etudiant" id="But" ></a>
        </div>
        <div class="Tab">
            <table>
              <tr>
                <th >Id</th>
                <th>Prenom</th>
                <th>Nom</th>
                <th class="hide">Date de naissance</th>
                <th class="hide">Email</th>
                <th class="hide">Mot de passe</th>
                <th  colspan="2">Action</th>
              </tr>
              <?php
               $query="SELECT * FROM user u where u.idrole=2";
                $result=mysqli_query($con,$query);
                while($row=$result->fetch_assoc()){ ?>
             <tr>
                <td><?php echo $row["IdUser"] ?></td>
                <td><?php echo $row["PRENOM"] ?></td>
                <td><?php echo $row["NOM"] ?></td>
                <td class="hide"><?php echo $row["Dn"] ?></td>
                <td class="hide" ><?php echo $row["email"] ?></td>
                <td class="hide"><?php echo $row["password"] ?></td>
                <td ><a href="Processe.php?upd=<?php echo $row['IdUser']; ?>"><img src="img/icons8-edit-40.png" name="upd" ></a>
                <a href="Processe.php?del=<?php echo $row['IdUser']; ?>" > <img src="img/icons8-delete-bin-64.png" name="del" id="button"></a></td> 
              </tr>
        
            <?php    }?> 
              
            </table>
          </div>
    </div>
            <?php include"footer.php" ?>
</body>
</html>