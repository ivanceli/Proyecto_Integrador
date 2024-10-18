<?php if (!$productos) { ?>

	<div class="container">
		<div class="well">
			<h1>No hay Lacteos</h1>
		</div>

		<?php if( ($this->session->userdata('logged_in')) and ($perfil_id == '1') ) { ?>
			<a type="button" class="btn btn-success" href="<?php echo base_url('productos_agrega'); ?>">Agregar</a>
			<br> <br>
		<?php } ?>

	</div>

<?php } else { ?>

	<div class="container">
		<div class="well">
			<h1>Todos los Lacteos Enteros</h1>
		</div>	
		<a type="button" class="btn btn-success" href="<?php echo base_url('productos_agrega'); ?>">Agregar</a>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Descripcion</th>
					<th>Precio Costo</th>
					<th>Precio Venta</th>
					<th>Stock</th>
					<th>Eliminado</th>
					<th>Modificar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($productos->result() as $row){ ?>
				<tr>
					<td><?php echo $row->id;  ?></td>
					<td><?php echo $row->descripcion;  ?></td>
					<td><?php echo $row->precio_costo;  ?></td>
					<td><?php echo $row->precio_venta;  ?></td>
					<td><?php echo $row->stock;  ?></td>
					<td><?php echo $row->eliminado;  ?></td>
					<td><a href="<?php echo base_url("productos_modifica/$row->id");?>">Modificar</a>|<a href="<?php echo base_url("productos_elimina/$row->id");?>">Eliminar</a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>	            
	</div>

<?php } ?>