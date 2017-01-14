<?php
/**
 *
 * @package  Project PW - Université Rennes 1
 * @authors  Diana Silva - Maykol Hernandez
 * @link     - https://bepbep.herokuapp.com/
 *
 */

 //Fonction pour verifier les requets

require_once 'functions.php';

if(empty($_POST['description']) || empty($_POST['priority']) || empty($_POST['service']) || empty($_POST['zipcode'])) {
    header('Location:home.php?msjctrl=3', false);
}
elseif(strlen($_POST['description']) > 200) {
  header('Location:home.php?msjctrl=4', false);
}

else{
  addRequest($_POST['description'],$_POST['priority'],$_POST['service'],$_POST['zipcode'],$_POST['file']);
  header('Location:home.php?msjctrl=2');
}

?>
