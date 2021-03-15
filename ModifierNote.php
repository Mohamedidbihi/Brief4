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
    <center><h1>Modifier les Notes</h1></center>
    <div class="blank"></div>
   <div class="contForm">
    <form action="/action_page.php">
        <div class="blank"></div>
        <div class="row">
          <div class="col-25">
            <label for="fname">Id</label>
          </div>
          <div class="col-75">
            <input type="text" id="idf" name="idf" value="1"  disabled="disabled" >
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="lname">Prenom</label>
          </div>
          <div class="col-75">
            <input type="text" id="prenom" name="prenom" value="med" disabled="disabled" >
          </div>
        </div>
        <div class="row">
            <div class="col-25">
              <label for="nom">nom</label>
            </div>
            <div class="col-75">
              <input type="text" id="nom" name="nom" value="idbihi"  disabled="disabled" >
            </div>
          </div>
        <div class="row">
          <div class="col-25">
            <label for="country">Filiere</label>
          </div>
          <div class="col-75">
            <select name="Filiere" id="fil"  disabled="disabled" >
                <option value="fil" selected="selected" >Filiere </option>
                <option value="frontend">FrontEnd </option>
                <option value="backend" >BackEnd </option>
              </select>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="subject">Module</label>
          </div>
          <div class="col-75">
            <select name="Filiere" id="fil"  disabled="disabled" >
                <option value="fil" selected="selected" >Html5&Css3 </option>
                <option value="frontend">Sass </option>
                <option value="backend" >Sql </option>
              </select>
          </div>
        </div>
        <div class="row">
            <div class="col-25">
              <label for="nom">Note</label>
            </div>
            <div class="col-75">
              <input type="number" id="note" name="note" value="12" min="0" max="20" >
            </div>
          </div>
          <div class="blank"></div>
        <div class="row">
          <center><input type="submit" value="Modifier"></center>
        </div>
        <div class="blank"></div>
      </form>
   </div> 
   <a href="GererEtudiant.php"><input type="submit" value="Return" id="return"  href="GererEtudiant.php"></a>
</body>
</html>