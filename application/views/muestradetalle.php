  <section class="mbr-section article content12 cid-qRlf4ndxBK" id="content12-m">
       <div class="container">
	<div class="well">
	<br>       
     <?php if (!$ventas_detalle) { ?>

	<div class="container">
		<div class="well">
			<h1>No se realizaron Ventas</h1>
            <hr>
		</div>
		
	</div>

<?php } else { ?>                  
<div class="container mt-5 pt-5">
	<div class="well">
        <br>
		<h1><b>Detalle de Ventas</b></h1>
        <hr>
	</div>	
	<br>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>id producto </th>
              	<th>Descripción</th>
				<th>Cantidad</th>
				<th>Precio Unitario</th>
				<th>Sub Total</th>
				
			</tr>
		</thead>
		<tbody>
			<?php foreach($ventas_detalle->result() as $row){ ?>

			<tr>
                <td><?php echo $row->id;  ?></td>
				<td><?php echo $row->descripcion;  ?></td>
				<td><?php echo $row->cantidad;  ?></td>
				<td><?php echo $row->precio;  ?></td>
                <td><?php echo $row->precio * $row->cantidad; ?></td>
			</tr>
           
            
			<?php } ?>
		</tbody>
	</table>
		<?php } ?>
</div>	            
	 <br>
</div>
</section>
