<?php
/**
 *
 * @package  Project PW - Université Rennes 1
 * @authors  Diana Silva - Maykol Hernandez
 * @link     - https://bepbep.herokuapp.com/
 *
 */

// Ce fichier contient la page "contact"

require_once '../mod/header.php';
require_once '../mod/menu3.php';
?>

<br><br><br>
<form name="contactform" method="post" action="send_form_email.php">
<table width="450px"><!---Este tamaño en px es personalizable -->
<tr>
 <td valign="top">
  <label for="first_name">Prenom *</label>
 </td>
 <td valign="top">
  <input  type="text" name="first_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="last_name">Nom *</label>
 </td>
 <td valign="top">
  <input  type="text" name="last_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="email">E-mail *</label>
 </td>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="telephone">Telephone</label>
 </td>
 <td valign="top">
  <input  type="text" name="telephone" maxlength="30" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="message">Menssage *</label>
 </td>
 <td valign="top">
  <textarea  name="message" maxlength="1000" cols="25" rows="6"></textarea>
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit">
 </td>
</tr>
</table>
</form>

<?php
require_once '../mod/footer.php';
?>
