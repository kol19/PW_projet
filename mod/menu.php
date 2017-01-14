<!-- Menu de Index -->

<nav class="navbar navbar-default navbar-inverse" role="navigation">
<div class="container-fluid">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#"><strong><font color = "green">BepBep</strong></font></a>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav">
<li><a href="#">Notre Societ&eacute;</a></li>
<li><a href="libraries/contact.php">Contact</a></li>
<li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <span class="caret"></span></a>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#">Restauration</a></li>
    <li><a href="#">Cours</a></li>
    <li class="divider"></li>
    <li><a href="#"a>Personel</li>
    <li class="divider"></li>
    <li><a href="libraries/services.php">Autres</a></li>
  </ul>
</li>
</ul>

<ul class="nav navbar-nav navbar-right">
<li class="dropdown">
  <?php
  session_start();
  if($_SESSION['CONNECT']=='OK') {
      header('Location:libraries/home.php');
  }
  else {
    require_once 'libraries/login.php';
  }
  ?>
</li>
</ul>
</li>
</ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>


<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
