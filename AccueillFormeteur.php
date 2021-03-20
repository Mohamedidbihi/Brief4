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
            <div class="active"><li><a href="#home">Accueil</a></li></div>
            <li><a href="GererEtudiant.php">Gerer les Etudiants</a></li>
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
        <div class="col">
            <center><img src="img/addpic.svg" class="imgaddprof"></center>
            <img>
            <div>
            <?php
                $query="SELECT *  FROM user u,formateur f  where u.IdUser = '".$_SESSION["iduser"]."' and u.IdUser=f.IdUser ";
                $result = $con->query($query);
                $row = $result->fetch_assoc(); 
                
            ?>
                <p>Prenom :<?php echo $row["PRENOM"] ?></p><br>
                <p>Nom :<?php echo $row["NOM"] ?></p><br>
                <p>FormateurId :<?php echo $row["IdF"] ?></p><br>
                <p>E-mail : <?php echo $row["email"] ?></p><br>
                <p>Date de naissance : <?php echo $row["Dn"] ?></p><br>
                <a href="ModifierFormateur.php"><center><input type="button" value="Modifier" id="But"></center></a>
            </div>
        </div>
        <div class="blank"></div>
        <div class="col">
            <center> <img src="img/unknown2.png" class="img"></center>
            <hr>
            <?php
                $query="SELECT C.Nom,C.Ville FROM USER u,formateur f, campus C WHERE u.idUser=f.idUser  AND f.idcampus=C.idC AND u.idUser='".$_SESSION["iduser"]."' "; 
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
        <div class="col2">
        <?php
                $query="SELECT * FROM module m ,filiere f, user u , formateur fr WHERE u.IdUser=fr.IdUser and f.IdF=m.idf AND fr.IdF=f.idformateur AND u.IdUser='".$_SESSION["iduser"]."'GROUP BY m.LebelleM";   
                $result=mysqli_query($con,$query);
                while($row=$result->fetch_assoc()){ ?>
            <div class="line"><span class="filiere"> Filiere : <?php echo $row["Lebelle"] ?></span><span class="Module"> Module :<?php echo $row["LebelleM"] ?></span></div>
        
            <?php    }?> 
        </div>
    </div>
    <?php include"footer.php" ?>
</body>

</html>