<?php
if (!empty($_GET['error'])) {
    if ($_GET['error'] == 1) {
        echo "Erreuur ".$_GET['error']." Veuillez saisir un login et un mot de passe<br><br>";
    } if ($_GET['error'] == 2) {
        echo "Erreuur ".$_GET['error']." Erreur de login/mot de passe<br><br>";
    } if ($_GET['error'] == 3) {
        echo " Vous avez bien été déconnecté du service<br><br>";
    }
} 
    
echo '<form action = "libraries/validation.php" method = "POST">
        Login <input type = "text" name = "name"><br><br>
        Password <input type = "password" name = "password"><br><br>
        <input type = "submit" value = "Se connecter">
    </form>'			
?>