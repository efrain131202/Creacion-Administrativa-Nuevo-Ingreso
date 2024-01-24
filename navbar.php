	<?php
		if (isset($title))
		{
	?>
<nav class="navbar navbar-default ">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Creación Administrativa Nuevo Ingreso</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="<?php if (isset($active_productos)){echo $active_productos;}?>"><a href="stock.php"><i class='glyphicon glyphicon-education'></i> Alumnos</a></li>
		<li class="<?php if (isset($active_categoria)){echo $active_categoria;}?>"><a href="categorias.php"><i class='glyphicon glyphicon-open-file'></i> Grupos</a></li>
		<li class="<?php if (isset($active_usuarios)){echo $active_usuarios;}?>"><a href="usuarios.php"><i  class='glyphicon glyphicon-user'></i> Usuarios</a></li>
       </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="https://efrain131202.github.io/Mi-Portafolio-Web/" target='_blank'><i class='glyphicon glyphicon-envelope'></i> Contacto</a></li>
		<li><a href="login.php?logout"><i class='glyphicon glyphicon-off'></i> Salir</a></li>
      </ul>
    </div>
  </div>
</nav>
	<?php
		}
	?>