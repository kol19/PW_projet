//On obtient les valeurs du formulaire
var formulaire = document.getElementsByName("formulaire")[0];

// Fontion de verification du formulaire de login
function validar() {
  //Validation du champ password
  if (formulaire.user.value.length == 0) {
   alert("Veuillez saisir un nom d'utilisateur");
   return false;
  }

  //Validation du champ password
  if (formulaire.password.value.length == 0) {
   alert("Veuillez saisir un mot de passe");
   return false;
  }

  return true;
}
