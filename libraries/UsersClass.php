<?php
/**
  *
  *
  * @package  Project PW - Université Rennes 1
  * @authors  Diana Silva - Maykol Hernandez
  * @link     - https://bepbep.herokuapp.com/
  *
  */

  // Ce fichier gère les requets de la table users de la base de données

    // Fonction de verification de login
    function login($user, $password) {
      $user=strtolower($user);
      $connect = new Tools();
      $result = $connect->consultaDB('SELECT id, username, password, first_name, last_name FROM users WHERE username="'.$user.'"');
      $extraido = mysqli_fetch_array($result);
      $hashed_password=$extraido['password'];

      // Utilisateur et mot de passe corrects
      if($user == $extraido['username'] && hash_equals($hashed_password, crypt($password, $hashed_password))) {
          session_start();
          $_SESSION['CONNECT']='OK';
          $_SESSION['USER']=$user;
          $_SESSION['FIRST_NAME']=$extraido['first_name'];
          $_SESSION['LAST_NAME']=$extraido['last_name'];
          $_SESSION['ID']=$extraido['id'];
        return true;
      }

      // Erreur de login/mot de passe
      else {
        return false;
      }
    }

    //On utilise cette fonction pour créer les utilisateurs
    function createUser($user,$password,$prenom,$nom) {
      $user=strtolower($user);
      $connect = new Tools();
      $cons='INSERT INTO users(username, password, first_name, last_name) VALUES ("'.strtolower($user).'","'.$password.'","'.$prenom.'","'.$nom.'")';
      $connect->consultaDB($cons);
    }

    // Fonction pour verifier si un username existe déjà. true s'il existe
    function UserVerification($user) {
      $user=strtolower($user);
      $connect = new Tools();
      $result = $connect->consultaDB('SELECT username FROM users WHERE username="'.$user.'"');
      $extraido = mysqli_fetch_array($result);
      if( $extraido['username'] != "") {
        return true;
      }
      else {
        return false;
      }
    }
