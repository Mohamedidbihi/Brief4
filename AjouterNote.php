<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <script src="./JS/regex.js" ></script>
    <title>Ajouter Note</title>
</head>
<body>
    <div class="blank"></div>
    <center><h1>Ajouter Notes</h1></center>
    <div class="blank"></div>
   <div class="contForm">
    <form action="/action_page.php">
        <div class="blank"></div>
        <div class="row">
          <div class="col-25">
            <label for="IdE">IdEtudiant</label>
          </div>
          <div class="col-75">
            <input type="text" id="Id" onkeyup="validateId()" name="Id" placeholder="Id de l'etudiant">
          </div>
          <span id="checker7"></span><br>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="lname">Filiere</label>
          </div>
          <div class="col-75">
            <select name="Filtrer" id="filtrer">
                <option value="fil" selected="selected" >Filiere </option>
                <option value="frontend">FrontEnd </option>
                <option value="backend" >BackEnd </option>
              </select>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="country">Module</label>
          </div>
          <div class="col-75">
            <select name="module" id="module">
                <option value="module" selected="selected" >Module  </option>
                <option value="Htmlcss">Html5&Css3 </option>
                <option value="Sass" >Sass </option>
                <option value="jS" >Javascript </option>
                
              </select>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="subject">Note</label>
          </div>
          <div class="col-75">
            <input type="number" id="note" onkeyup="validateNote()" name="Note" placeholder="La note" min="0" max="20">
          </div>
          <span id="checker8"></span><br>
        </div>
          <div class="blank"></div>
        <div class="row">
          <center><input type="submit" value="Ajouter"></center>
        </div>
        <div class="blank"></div>
      </form>
   </div> 
   <a href="GererLesNotes.php"><input type="submit" value="Return" id="return"  "></a>
</body>
</html>