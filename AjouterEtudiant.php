<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>Ajouter Etudiant</title>
</head>
<body>
    <div class="blank"></div>
    <center><h1>Ajouter Etudiant</h1></center>
    <div class="blank"></div>
   <div class="contForm">
    <form action="/action_page.php">
        <div class="blank"></div>
        <div class="row">
          <div class="col-25">
            <label for="fname">Nom</label>
          </div>
          <div class="col-75">
            <input type="text" id="nom" name="nom" placeholder="Nom de l'etudiant">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="lname">Prenom</label>
          </div>
          <div class="col-75">
            <input type="text" id="prenom" name="prenom" placeholder="Prenom de l'etudiant">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="country">Date de naissance</label>
          </div>
          <div class="col-75">
            <input type="date" id="dn" name="Dn" >
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="subject">Email</label>
          </div>
          <div class="col-75">
            <input type="text" id="email" name="email" placeholder="Email de l'etudiant">
          </div>
        </div>
        <div class="row">
            <div class="col-25">
              <label for="subject">Mot de passe</label>
            </div>
            <div class="col-75">
                <input type="password" id="password" name="password" placeholder="mot de passe de l'etudiant" >
            </div>
          </div>
          <div class="blank"></div>
        <div class="row">
          <center><input type="submit" value="Ajouter"></center>
        </div>
        <div class="blank"></div>
      </form>
   </div> 
   <a href="GererEtudiant.php"><input type="submit" value="Return" id="return"  href="GererEtudiant.php"></a>
</body>
</html>