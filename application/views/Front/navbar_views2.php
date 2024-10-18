
    <!-- MENU PARA ADMINISTRADOR-->

 <?php if( ($this->session->userdata('logged_in')) and (($perfil_id) == '1')){?>

<nav id="navbar" class="navbar navbar-expand-lg navbar-dark sticky-top">
  <!---<a class="navbar-brand" href="#">Navbar</a>--->
  <img src="<?php echo base_url('assets/img/logotipo.jpg');?>" alt="Logo" style="width:40px;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="color: white; border-color: white;">

    <span class="navbar-toggler-icon" style="border-color: white;"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link " href="<?php echo base_url('');?>">Pagina Principal<span class="sr-only">(current)</span></a>
      </li>
      </li>
      <!--Boton Desplegable-->
      <li id="dropdown" class="nav-item dropdown">
        <a class="nav-link dropdown-toggle hvr-underline-from-center" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Productos</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: black;">
          <a class="dropdown-item hvr-underline-from-center" href="<?php echo base_url('cargarproducto');?>">Agregar Productos</a>
          <!--<a class="dropdown-item" href="#">Another action</a>-->
          <div class="dropdown-divider"></div>
          <a class="dropdown-item hvr-underline-from-center" href="<?php echo base_url('productos_todos');?>">Listar Productos</a>
        </div>
      </li>
         </li>
         <li class="nav-item">
        <a class="nav-link hvr-underline-from-center" href="<?php echo base_url('usuarios_todos');?>">Usuarios</a>
      </li>
         </li>
         <!--Boton Desplegable-->
      <li id="dropdown" class="nav-item dropdown">
        <a class="nav-link dropdown-toggle hvr-underline-from-center" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Reportes</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: black;">
          <a class="dropdown-item hvr-underline-from-center" href="<?php echo base_url('cargarventas');?>">Ventas</a>
          <!--<a class="dropdown-item" href="#">Another action</a>-->
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo base_url('cargarconsultas');?>">Consultas</a>
        </div>
      </li>
        <li id="dropdown" class="nav-item dropdown">
        <a class="nav-link dropdown-toggle hvr-underline-from-center" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>Administrador <?= $nombre ?></b></a></a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: black;">
          <a class="dropdown-item" href="<?php echo base_url('mostrar_datos');?>">Mis datos</a>
          <a class="dropdown-item hvr-underline-from-center" href="<?php echo base_url('cerrar_sesion');?>">Salir</a>
      </li>


    <!--Formulario para buscar algo-->
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
      <button id="Boton-buscar" class="btn btn-outline-success my-2 my-sm-0" type="submit" style="border-color: skyblue; color: skyblue">Buscar</button>
    </form>

  </div>
</nav>  






  








<!-- MENU PARA CLIENTES-->
 <?php } else if( ($this->session->userdata('logged_in')) and (($perfil_id)=='2')){
  ?> 


<nav id="navbar" class="navbar navbar-expand-lg navbar-dark sticky-top">
  <!---<a class="navbar-brand" href="#">Navbar</a>--->
  <img src="<?php echo base_url('assets/img/logotipo.jpg');?>" alt="Logo" style="width:40px;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="color: white; border-color: white;">

    <span class="navbar-toggler-icon" style="border-color: white;"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link hvr-underline-from-center" href="<?php echo base_url('');?>">Pagina Principal<span class="sr-only">(current)</span></a>
      </li>
        <li id="dropdown" class="nav-item dropdown">
        <a class="nav-link dropdown-toggle hvr-underline-from-center" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>Bienvenido <?= $nombre ?></b></a></a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: black;">
          <a class="dropdown-item" href="<?php echo base_url('mostrar_datos');?>">Mis datos</a>
          <a class="dropdown-item" href="<?php echo base_url('cerrar_sesion');?>">Salir</a>
      </li>

              <li id="dropdown" class="nav-item dropdown">
        <a class="nav-link dropdown-toggle hvr-underline-from-center" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catalogo</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: black;">
          <a class="dropdown-item hvr-underline-from-center" href="<?php echo base_url('lacteos_enteros');?>">Lacteos Enteros</a>
          <!--<a class="dropdown-item" href="#">Another action</a>-->
          <div class="dropdown-divider"></div>
          <a class="dropdown-item hvr-underline-from-center" href="<?php echo base_url('lacteos_descremados');?>">Lacteos Descremados</a>
        </div>
      </li>
          <li class="nav-item">
        <a class="nav-link hvr-underline-from-center" href="<?php echo base_url('consulta');?>">Consultar</a>
      </li>

    <!--Formulario para buscar algo-->
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
      <button id="Boton-buscar" class="btn btn-outline-success my-2 my-sm-0" type="submit" style="border-color: skyblue; color: skyblue">Buscar</button>
    </form>
        <li class="nav-item">
        <a class="nav-link hvr-underline-from-center" href="<?php echo base_url('comprar');?>"> <img id="login" src="<?php echo base_url('assets/img/carrito.png');?>" class="img-fluid" alt="Responsive image"/></a> 
      </li>
  </div>
</nav> 












<!-- MENU PARA PUBLICO EN GENERAL-->
<?php } else {?> 

<nav id="navbar" class="navbar navbar-expand-lg navbar-dark sticky-top">
  <!---<a class="navbar-brand" href="#">Navbar</a>--->
  <img src="assets/img/logotipo.jpg" alt="Logo" style="width:40px;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="color: white; border-color: white;">

    <span class="navbar-toggler-icon" style="border-color: white;"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link hvr-underline-from-center" href="<?php echo base_url('');?>">Pagina Principal<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link hvr-underline-from-center" href="<?php echo base_url('quienes_somos');?>">Quienes Somos</a>
      </li>
            <li class="nav-item">
        <a class="nav-link hvr-underline-from-center" href="<?php echo base_url('comercializacion');?>">Comercializacion</a>
      </li>
            <li class="nav-item">
        <a class="nav-link hvr-underline-from-center" href="<?php echo base_url('info_de_contacto');?>">Informacion de Contacto</a>
      </li>
       <li class="nav-item">
        <a class="nav-link hvr-underline-from-center" href="<?php echo base_url('terminos_de_uso');?>">Terminos de Uso</a>
      </li>
         <li class="nav-item">
        <a class="nav-link hvr-underline-from-center" href="<?php echo base_url('consulta');?>">Consultar</a>
      </li>
    <!--Formulario para buscar algo-->
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
      <button id="Boton-buscar" class="btn btn-outline-success my-2 my-sm-0" type="submit" style="border-color: skyblue; color: skyblue;">Buscar</button>
    </form>
        <li class="nav-item">
        <a class="nav-link hvr-underline-from-center" href="<?php echo base_url('registro');?>"> <img id="login" src="assets/img/usuario.png" class="img-fluid" alt="Responsive image"/></a> 
      </li>
  </div>
  <?php }?>
</nav> 