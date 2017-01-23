<!-- Menu de Home

<nav class="navbar navbar-default navbar-inverse"> -->
<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
<div class="container-fluid">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#"><img id="imageindex" alt="Logo" src="../images/favicon.ico" width="30" height="30"/></a>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav">
<li><a href="notresociete.php">Notre Societ&eacute;</a></li>
<li><a href="contact.php">Contact</a></li>
<li><a href="commandes.php">Mes Commandes</a></li>
<!--<li class="dropdown">
  <a href="services.php" class="dropdown-toggle" data-toggle="dropdown">Services <span class="caret"></span></a>
  <ul class="dropdown-menu" role="menu">
    <li><a href="services.php">Restauration</a></li>
    <li><a href="services.php">Cours</a></li>
    <li class="divider"></li>
    <li><a href="services.php">Personel</a></li>
    <li><a href="services.php">Autres</a></li>
    <li class="divider"></li>
    <li><a href="services.php">Tarifs</a></li>
  </ul>
</li> -->
</ul>

<ul class="nav navbar-nav navbar-right">
  <li><p class="navbar-text">Bienvenue: <?php echo $_SESSION['FIRST_NAME']; ?></p></li>
<li class="dropdown">
  <?php
  session_start();
  if($_SESSION['CONNECT']=='OK') {
      echo '<a href="validation.php?afaire=deconnexion">Deconnexion</a>';
  }
  else {
    header('Location: ../?msjctrl=1');
  }
  ?>
</li>
</ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>


<script src="http://code.jquery.com/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
