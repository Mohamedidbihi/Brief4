<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <script src="./JS/regex.js" ></script>
    <title>Ajouter Module</title>
</head>
<body>
    <div class="blank"></div>
    <center><h1>Ajouter Module</h1></center>
    <div class="blank"></div>
   <div class="contForm">
    <form action="/action_page.php">
        <div class="blank"></div>
        <div class="row">
          <div class="col-25">
            <label for="lname">Filiere</label>
          </div>
          <div class="col-75">
            <select name="Filiere" id="fil">
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
            <input type="Text" id="module" onkeyup="validateFiliereModule()" name="Module" placeholder="Module.." >
          </div>
          <span id="checker6"></span><br>
        </div>
          <div class="blank"></div>
        <div class="row">
          <center><input type="submit" value="Ajouter"></center>
        </div>
        <div class="blank"></div>
      </form>
   </div> 
   <a href="GererFiliereModule.php"><input type="submit" value="Return" id="return"  "></a>
</body>
</html>