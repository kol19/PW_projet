<?php

session_start();
if($_SESSION['CONNECT']=='OK') {
    echo "Hello ".$_SESSION['NAME'];
    ?>
    <br><a href="validation.php?afaire=deconnexion">Deconnexion</a>
    <?php
    }
else {
    header('Location: login.php');
    }
?>