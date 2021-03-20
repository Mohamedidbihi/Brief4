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
    <link rel="stylesheet" href="style/style.css">
    <title>Espace Etudiant</title>
</head>

<body>
    <nav>
        <input id="nav-toggle" type="checkbox">
        <div class="logo"><img src="img/unknown.png"></div>
        <ul class="links">

            <div class="hidden"><li><a href="#home">Accueil</a></li></div>
            <div class="hidden"><li><a href="GererEtudiant.php">Gerer les Etudiants</a></li></div>
            <div class="hidden"><li><a href="GererLesNotes.php">Gerer les Notes</a></li></div>
            <div class="hidden"><li><a href="GererFiliereModule.php">Gerer les Modules</a></li></div>
            <div class="active"><li><a href="Deconnexion.php">Deconnexion</a></li></div>

        </ul>
        <label for="nav-toggle" class="icon-burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </label>
    </nav>
    <div class="container">
        <div class="col">
            <center><img src="img/addpic.svg" class="imgaddprof"></center>
            <img>
            <?php
                $query="SELECT * FROM user u, etudiant e where u.IdUser = '".$_SESSION["iduser"]."' and u.IdUser=e.iduser";
                $result = $con->query($query);
                $row = $result->fetch_assoc(); 
            ?>
            <div>
                <p>Prenom :<?php echo $row["PRENOM"] ?></p><br>
                <p>Nom :<?php echo $row["NOM"] ?></p><br>
                <p>EtudiantId :<?php echo $row["Idetudiant"] ?></p><br>
                <p>E-mail : <?php echo $row["email"] ?></p><br>
                <p>Date de naissance : <?php echo $row["Dn"] ?></p><br>
            </div>
        </div>
        <div class="blank"></div>
        <div class="Cont">
    
        <div class="colA">
            <center> <img src="img/unknown2.png" class="img"></center>
            <hr>
            <?php
                $query="SELECT C.Nom,C.Ville FROM USER u,etudiant e, campus C WHERE u.idUser=e.idUser  AND e.idcampus=C.idC AND u.idUser='".$_SESSION["iduser"]."' "; 
                $result = $con->query($query);
                $row = $result->fetch_assoc(); 
            ?>
            <div class="blank"></div>
            <center><strong>Richard University</strong></center>
            <div class="blank"></div>
            <center>
                <p id="nomCampus">Nom campus: <?php echo $row["Nom"] ?></p>
                <p id="nomCampus">Ville: <?php echo $row["Ville"] ?></p>
            </center>
        </div>
            <div class="colB">
                <div class="blank"></div>
                <center><strong>Daily Events :</strong></center><br>
                <center>
                    <p id="events"> Kahoots ! </p>
                </center>
            </div>
    
    </div>
    
       
    <div class="col2">
    <h1>Notes:</h1>
    <?php
                $query=" SELECT module.LebelleM as 'Module',exam.note  FROM user,module,exam,etudiant  WHERE etudiant.Idetudiant=exam.ide AND exam.idm=module.IdM and user.IdUser=etudiant.iduser AND user.iduser='".$_SESSION["iduser"]."'";
                  
               
                $result=mysqli_query($con,$query);
                while($row=$result->fetch_assoc()){ ?>
            <div class="line"><span class="filiere"> Module : <?php echo $row["Module"] ?></span><span class="Module"> Note :<?php echo $row["note"] ?></span></div>
        
            <?php    }?> 
       
    </div>
    </div>
    
    <?php include"footer.php" ?>
</body>
</html>