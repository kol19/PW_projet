<?php
if (!empty($_GET['error'])) {
    if ($_GET['error'] == 1) {
        echo "Veuillez saisir un login et un mot de passe<br><br>";
    } if ($_GET['error'] == 2) {
        echo "Erreur de login/mot de passe<br><br>";
    } if ($_GET['error'] == 3) {
        echo "Vous avez bien été déconnecté du service<br><br>";
    }
}

// Formulaire de connexion
echo '<form action = "libraries/validation.php" name="formulaire" method="POST" onsubmit="return validar()">
        <label for="user">User</label>
          <input type="text" name="user" value="admin"/><br><br>
        <label for="password">Password</label>
          <input type = "password" name = "password" value="passadmin"/><br><br>
        <input type = "submit" value = "Se connecter">
    </form>';

echo '<br><a href=libraries/signin.php>Sign In</a><br>';
?>
