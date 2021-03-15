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
            <li><a href="GererLesNotes.php">Gerer les Notes</a></li>
            <div class="active"><li><a href="#home">Gerer les Modules</a></li></div>
            <li><a href="Login.php">Deconnexion</a></li>
        </ul>
        <label for="nav-toggle" class="icon-burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </label>
    </nav>
    <div class="container">
        <div class="TitleEtud">
       <center><H1>Filiere / Module</H1></center> 
        </div>
        <div class="Tab">
            <table>
              <tr>
                <th>Filiere</th>
                <th>Module</th>
                <th>Action</th>
              </tr>
              <tr>
                <td>FrontEnd</td>
                <td>Html Css</td>
                <td><a href=""><img src="img/icons8-delete-bin-64.png" onclick="delPopup()" id="button"></a></td> 
              </tr>
              <tr>
                <td>FrontEnd</td>
                <td>Sass</td>
                <td><img src="img/icons8-delete-bin-64.png" onclick="delPopup()" id="button"></td> 
              </tr>
              <tr>
                <td>BackEnd</td>
                <td>SQL</td>
                <td><img src="img/icons8-delete-bin-64.png" onclick="delPopup()" id="button"></td> 
              </tr>
            </table>             
          <a href="AjouterModule.php"><input type="button" value="Ajouter Module"  ><a href="AjouterFiliere.php"><input type="button" value="Ajouter Filiere"  ></a>
          </div>
    </div>

    
                    <!-- popup -->

                    <div id="popup" style="display: none">
                      <div id="popup-content">
                        <div id="close"> <span id="sp">Confirmer la supression </span> &times;</div>
                        <hr>
                        <p>Etes vous sur de vouloir supprimer cet element?</p>
                        </br>
                        <center><button type="button" id="button">Oui</button></center>
                      </div>
                    </div>
                <script src="./JS/Delete-Popup.js"></script>
            
                    <!-- end popup -->
                    <?php include"footer.php" ?>
</body>
</html>