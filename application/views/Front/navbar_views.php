<!---se quito  bg-primary que iba despues de navbar-expland-xl y se agrego id="navbar" para usar como selector # desde css y se agrego sticky-top para que quede fijo el navbar -->

<nav id="navbar" class="navbar navbar-expand-lg navbar-dark sticky-top">
  <!---<a class="navbar-brand" href="#">Navbar</a>--->
  <img src="assets/img/logotipo.jpg" alt="Logo" style="width:40px;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="color: white; border-color: white;">

    <span class="navbar-toggler-icon" style="border-color: white;"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('');?>">Pagina Principal<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('quienes_somos');?>">Quienes Somos</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('comercializacion');?>">Comercializacion</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('info_de_contacto');?>">Informacion de Contacto</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('terminos_de_uso');?>">Terminos de Uso</a>
      </li>
      <!--Boton Desplegable-->
      <li id="dropdown" class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Funcionalidades</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: black;">
          <a class="dropdown-item" href="<?php echo base_url('catalogo');?>">Catalogo de Productos</a>
          <!--<a class="dropdown-item" href="#">Another action</a>-->
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo base_url('consulta');?>">Consultas</a>
        </div>
      </li>
      <!--
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>-->
    <!--Formulario para buscar algo-->
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
      <button id="Boton-buscar" class="btn btn-outline-success my-2 my-sm-0" type="submit" style="border-color: skyblue; color: skyblue">Buscar</button>
    </form>
        <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('registro');?>"> <img id="login" src="assets/img/usuario.png"/></a> 
      </li>
  </div>
</nav>  
