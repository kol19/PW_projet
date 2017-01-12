<?php

session_start();
if($_SESSION['CONNECT']=='OK') {
  if (!empty($_GET['error'])) {
    if ($_GET['error'] == 1) {
      echo "Creacion de usuario exitosa!!!<br>";
    }
  }
  echo "Bienvenue ".$_SESSION['NAME'];
    echo '<br><a href="validation.php?afaire=deconnexion">Deconnexion</a>';
    }
else {
    header('Location: http://192.168.1.82/~mako/PW_projet/');
    }
?>
