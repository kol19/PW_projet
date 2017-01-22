<?php
/**
 *
 * @package  Projet PW - Université Rennes 1
 * @authors  Diana Silva - Maykol Hernandez
 * @link     - https://bepbep.herokuapp.com/
 *
 */

 // Ce fichier contient la page "mes commandes"

require_once '../mod/header.php';
require_once '../mod/menu3.php';

require_once 'functions.php';

session_start();
if($_SESSION['CONNECT']!='OK') {
  header('Location:../');
}

$commandes=getCommandes($_SESSION['ID']);

echo '<br><br><br><CENTER><TABLE width=70% border=1>
<TR><th colspan=6 bgcolor="#cccccc">VOS COMMANDES</th></TR>
<tr>
 <th width=15% bgcolor="#cccccc"> DATE DE LA COMMANDE </th>
 <th width=5% bgcolor="#cccccc"> PRIORITE </th>
 <th width=10% bgcolor="#cccccc"> TYPE DE SERVICE </th>
 <th width=10% bgcolor="#cccccc"> CODE POSTALE </th>
 <th width=45% bgcolor="#cccccc"> DESCRIPTION </th>
 <th width=15% bgcolor="#cccccc"> LIEN DU FICHIER </th>
</tr> ';

while($rows=mysqli_fetch_array($commandes)){
  echo '<tr><td bgcolor="#cccccc">'.$rows[5]."</td>";
  echo '<td bgcolor="#cccccc">'.$rows[1]."</td>";
  echo '<td bgcolor="#cccccc">'.$rows[2]."</td>";
  echo '<td bgcolor="#cccccc">'.$rows[3]."</td>";
  echo '<td bgcolor="#cccccc">'.$rows[0]."</td>";
  echo '<td bgcolor="#cccccc">'.$rows[4]."<tr></td>";
}
echo '</table></CENTER><br><br><br>';



require_once '../mod/footer.php';
?>
