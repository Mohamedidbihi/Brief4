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
            <li><a href="GererEtudiant.php">Gerer les Etudiants</a></li>
            <div class="active"><li><a href="#home">Gerer les Notes</a></li></div>
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
        <a href="AjouterNote.php"><input type="button" value="Ajouter Note" id="But" ></a>
        <div class="c">         
          <h1>Filtrer :</h1>
        <select name="Filtrer" id="filtrer">
            <option value="Id" selected="selected" >Par Id </option>
            <option value="nom">Par nom </option>
            <option value="module" >Par Filiere </option>
            <option value="module" >Par Module </option>
          </select>
          <input type="text" name="par"  placeholder="Recherche ...">
         <input type="submit" value="Recherher" >
        </div>
      </div>
      <div class="blank"></div>
        <div class="Tab">
            <table>
              <tr>
                <th>Id</th>
                <th>Prenom</th>
                <th>Nom</th>
                <th class="hide">Filiere</th>
                <th >Module</th>
                <th >Note</th>
                <th  colspan="2">Action</th>
              </tr>
              <?php
               $query=" SELECT etudiant.Idetudiant,exam.idm,user.PRENOM,user.NOM,filiere.Lebelle as 'Filiere',module.LebelleM as 'Module',exam.note  FROM user,module,filiere,exam,etudiant  WHERE etudiant.Idetudiant=exam.ide AND exam.idm=module.IdM AND filiere.IdF=module.idf and user.IdUser=etudiant.iduser";
                $result=mysqli_query($con,$query);
                while($row=$result->fetch_assoc()){ ?>
              <tr >
                <td><?php echo $row["Idetudiant"] ?></td>
                <td><?php echo $row["PRENOM"] ?></td>
                <td><?php echo $row["NOM"] ?></td>
                <td style="display:none"><?php echo $row["idm"] ?></td>
                <td class="hide"><?php echo $row["Filiere"] ?></td>
                <td><?php echo $row["Module"] ?></td>
                <td><?php echo $row["note"] ?></td>
                <td ><a href="Processe.php?upnote=<?php echo $row['Idetudiant'];?>&idm=<?php echo $row['idm'];?>"><img src="img/icons8-edit-40.png" name="upnote" ></a>
                <a href="Processe.php?delnote=<?php echo $row['Idetudiant'];?>&idm=<?php echo $row['idm'];?>" > <img src="img/icons8-delete-bin-64.png" name="delnote" id="button"></a></td> 
              </tr>
              <?php    }?> 
             
            </table>
          </div>
    </div>
    <?php include"footer.php" ?>
</body>
</html>