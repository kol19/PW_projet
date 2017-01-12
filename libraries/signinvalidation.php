<?php
/**
 * @package  Proyecto web
 * @authors  Diana Silva - Maykol Hernandez
 * @license  - License
 * @link     -
 */

require_once 'functions.php';

// Verificacion si variables estan vacias
if(empty($_POST['user']) || empty($_POST['password']) || empty($_POST['nom']) || empty($_POST['prenom'])) {
    header('Location:signin.php?error=1', false);
    //echo 'Veuillez saisir un login et un mot de passe';
}
else{
  createUser($_POST['user'],crypt($_POST['password']),$_POST['prenom'],$_POST['nom']);
  if(login($_POST['user'], $_POST['password'])) {
    header('Location:accueil.php?error=1');
  }
}
?>
