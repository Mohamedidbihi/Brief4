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
              <tr>
                <td>1</td>
                <td>med</td>
                <td>idbihi</td>
                <td class="hide">FrontEnd</td>
                <td  >Html&Css</td>
                <td>10</td>
                <td ><a href="ModifierNote.php"><img src="img/icons8-edit-40.png" ></a>
              <img src="img/icons8-delete-bin-64.png" onclick="delPopup()" id="button"></td> 
              </tr>
              <tr>
                <td>1</td>
                <td>med</td>
                <td>idbihi</td>
                <td class="hide">FrontEnd</td>
                <td  >Sass</td>
                <td>12</td>
                <td ><a href="ModifierNote.php"><img src="img/icons8-edit-40.png" ></a>
                <img src="img/icons8-delete-bin-64.png" onclick="delPopup()" id="button"></td> 
              </tr>
              <tr>
                <td>1</td>
                <td>med</td>
                <td>idbihi</td>
                <td class="hide">BackEnd</td>
                <td  >MySql</td>
                <td>14</td>
                <td ><a href="ModifierNote.php"><img src="img/icons8-edit-40.png" ></a>
                <img src="img/icons8-delete-bin-64.png" onclick="delPopup()" id="button"></a></td> 
              </tr>
            </table>
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