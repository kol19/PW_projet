var formulaire = document.getElementsByName("formSignIn")[0];

function ValidarCadenaExpReg() {
  var filter=/^.+@.+\..{2,3}$/;
  if (formulaire.user.value.length == 0 ){//}|| filter.test(formulaire.user.value)) {
   alert("Veuillez saisir un nom d'utilisateur");
   return false;
  }
    // Expresion regular que representa un Email válido
    //cadena = "^[a-z]+@[a-z]+\.[a-z]{2,4}$";
    //cadena = /^.+@.+\..{2,3}$/;
    //re = new RegExp(cadena);

    //if (document.getElementById("textValidReg").value.match(re))
      //  alert("Aceptado");
    //else
      //  alert("Email incorrect");
      return true;
}


<script type="text/javascript" src="js/valsignin.js"></script>
