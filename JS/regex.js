//Nom regular expression

function validateNom() {
  var Nom = document.getElementById("nom").value;

  if (Nom.length == 0) {
    producePrompt("Ce champ est obligatoire", "checker1", "red");
    addButton.disabled = true
    return false;
  }

  if (!Nom.match(/^[a-zA-Z-\s]+$/)) {
    producePrompt("Veuillez entrez un nom correct", "checker1", "red");
    addButton.disabled = true
    return false;
  }

  producePrompt("Nom disponible", "checker1", "green");
  return true;
}

//Prenom regular exprssion

function validatePrenom() {
  var Prenom = document.getElementById("prenom").value;

  if (Prenom.length == 0) {
    producePrompt("Ce champ est obligatoire", "checker2", "red");
    addButton.disabled = true
    return false;
  }

  if (!Prenom.match(/^[a-zA-Z-\s]+$/)) {
    producePrompt("Veuillez entrez un prenom correct", "checker2", "red");
    addButton.disabled = true
    return false;
  }

  producePrompt("Prenom disponible", "checker2", "green");
  return true;
}

//Date regular expression

function validateDate() {
  var Date = document.getElementById("dn").value;

  if (Date.length == 0) {
    producePrompt("Ce champ est obligatoire" , "checker3" , "red");
    addButton.disabled = true
    return false;
    
  }

  // if (!Date.match (/^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/)) {
  //   producePrompt("Veuillez entrez une date correct" , "checker3" , "red");
  //   addButton.disabled = true
  //   return false;
  // }
else{
  producePrompt("Date insertion est correct", "checker3", "green");
  return true;
}
}

//email regular expression

function validateEmail() {
  var email = document.getElementById("email").value;

  if (email.length == 0) {
    producePrompt("Ce champ est obligatoire", "checker4", "red");
    addButton.disabled = true

    return false;
  }

  if (!email.match(/^[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)) {
    producePrompt("Veuillez entrez un email correct", "checker4", "red");
    addButton.disabled = true

    return false;

  }

  producePrompt("Email disponible", "checker4", "green");
  return true;
}

//password regular expression

function validatePassword() {
  var Password = document.getElementById("password").value;

  if (Password.length == 0) {
    producePrompt("Ce champ est obligatoire", "checker5", "red");
    addButton.disabled = true
    return false;
  }

  if (!Password.match(/^[a-zA-Z\d]{8,20}$/)) {
    producePrompt("Veuillez entrez un mot de passe correct", "checker5", "red");
    addButton.disabled = true
    return false;
  }

  producePrompt("mot de passe disponible", "checker5", "green");
  return true;
}

//Filiere-Module regular expression

function validateFiliereModule() {
  var FiliereModule = document.getElementById("module").value;

  if (FiliereModule.length == 0) {
    producePrompt("Ce champ est obligatoire", "checker6", "red");
    addButton.disabled = true
    return false;
  }

  if (!FiliereModule.match(/^[a-zA-Z-\s]+$/)) {
    producePrompt("Insertion incorrect", "checker6", "red");
    addButton.disabled = true
    return false;
  }

  producePrompt("Insertion disponible", "checker6", "green");
  return true;
}

//id regular expression

function validateId() {
  var Id = document.getElementById("Id").value;

  if (Id.length == 0) {
    producePrompt("Ce champ est obligatoire", "checker7", "red");
    addButton.disabled = true
    return false;
  }

  if (!Id.match(/^[\d]{1,3}$/)) {
    producePrompt("Veuillez entrez un ID de l'étudiant", "checker7", "red");
    addButton.disabled = true
    return false;
  }

  producePrompt("ID étudiant disponible", "checker7", "green");
  return true;
}

//Note regular expression

function validateNote() {
  var Note = document.getElementById("note").value;

  if (Note.length == 0) {
    producePrompt("Ce champ est obligatoire", "checker8", "red");
    addButton.disabled = true
    return false;
  }

  if (!Note.match(/^[\d]{1,2}$/)) {
    producePrompt("Veuillez entrez une Note correct pour l'étudiant", "checker8", "red");
    addButton.disabled = true
    return false;
  }

  producePrompt("Insertion du note est correct", "checker8", "green");
  return true;
}




function producePrompt(message, promptlocation, color) {
  document.getElementById(promptlocation).innerHTML = message;
  document.getElementById(promptlocation).style.color = color;

}
