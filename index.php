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
require_once 'libraries/functions.php';
// load up header file
require_once 'mod/header.php';
require_once 'libraries/login.php';
?>
<div id=”container”>
<div id=”content”>
<!– content –>
</div>
<?php
//require_once(TEMPLATES_PATH . “/rightPanel.php”);
?>
</div>


<?php
// load up footer file
require_once 'mod/visitCounter.php';
require_once 'mod/footer.php';

require_once 'libraries/functions.php';


        $connect = new Tools();
        $result = $connect->consulta();
        
        foreach($result as $row) {
            $nb=$row['username'];
            echo $nb."<br>";
        }
?>
