<?php
/**
 *
 * @package  Proyecto web
 * @authors  Diana Silva - Maykol Hernandez
 * @license  - License
 * @link     -
 *
 */
//Incluimos todas las clases y funciones del proyecto
//require_once 'libraries/functions.php';
// load up header file
require_once 'mod/header.php';
// load up login file
require_once 'libraries/login.php';
/*?>
<div id=”container”>
<div id=”content”>
<!– content –>
</div>
<?php
//require_once(TEMPLATES_PATH . “/rightPanel.php”);
?>
</div>

<?php*/
// load up visit counter file
require_once 'mod/visitCounter.php';
// load up footer file
require_once 'mod/footer.php';

// load up functions file to test connection to DB
require_once 'libraries/functions.php';
        $connect = new Tools();
        $result = $connect->consulta();
/*
        $result = $connect->consultaDB('SELECT username, password FROM users WHERE username="admin"');
        $extraido = mysqli_fetch_array($result);
        echo "<br>- Nombre: ".$extraido['username']."<br/> ";
        echo "<br>- Nombre: ".$extraido['password']."<br/> ";

$mypassword="passadmin";
$hashed_password = crypt($mypassword);
echo "<br>".$hashed_password;

if (hash_equals($hashed_password, crypt($mypassword, $hashed_password))) {
   echo "¡Contraseña verificada!";
} else {
echo "<br>".$mypassword;
}*/




?>
