<!DOCTYPE html>
<html lang="en">
  <head>
      <!-- Metadatos -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible"content="IE-edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/mi_estilo.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/hover.css');?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
    <!--Esto es para realizar los reportes-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!--Esto es para que aparezca el logo como icono en el head-->
    <link rel="shorcut icon" type="image/x-icon" href="assets/img/logotipo.jpg" whidth="100" height="100">
    
     <!-- Enlace a la CDN de Font Awesome para que cargue algunos iconos-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!--Script que pregunta si esta seguro de eliminar todo el carrito. Usado en carritoparte_view -->
  <script type="text/javascript">
        function borra_carrito() {
            var result = confirm('Esta seguro de eliminar todo el carrito?');

            if (result) {
                window.location = 'carrito_elimina/all';
            } else {
                return false; // Boton Cancela
            }
        }
    </script>


<script type="text/javascript">
  function actualiza_carrito()
  {
  <?php echo "alert('No hay stock suficiente');"; ?>
  }
</script>


    
    <title> <?php echo ($titulo); ?></title>
 </head>
