<?php
/**
 *
 * @package  Project PW - Université Rennes 1
 * @authors  Diana Silva - Maykol Hernandez
 * @link     - https://bepbep.herokuapp.com/
 *
 */

 //On utilise ce fichier pour verifier et ajouter les nouveaux utilisateurs

require_once 'functions.php';

// On verifie si les champs sont vides
if(empty($_POST['user']) || empty($_POST['password']) || empty($_POST['nom']) || empty($_POST['prenom'])) {
    header('Location:signin.php?msjctrl=1', false);
    //echo 'Veuillez saisir un login et un mot de passe';
}

// On verifie si l'utilisateur existe deja
elseif(UserVerification($_POST['user'])) {
  //header('Location:signin.php?msjctrl=2');
  header('Location:signin.php?msjctrl=2&user='.$_POST['user'].'&prenom='.$_POST['prenom'].'&nom='.$_POST['nom']);
}

else{
  // On ajoute l'utilisateur à la base de données
  createUser($_POST['user'],crypt($_POST['password']),$_POST['prenom'],$_POST['nom']);
  if(login($_POST['user'], $_POST['password'])) {
    header('Location:home.php?msjctrl=1');
  }
}

?>
