<?php if (!$usuarios) { ?>

	<div class="container">
		<div class="well">
			<h1>No hay Bajas</h1>
		</div>	
	</div>

<?php } else { ?>

	<div class="container">
		<div class="well">
			<h1>Todas las Bajas</h1>
		</div>	

		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Email</th>
					<th>Usuario</th>
					<th>Pass</th>
					<th>Modificar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($usuarios->result() as $row){ ?>
				<tr>
					<td><?php echo $row->id;  ?></td>
					<td><?php echo $row->nombre;  ?></td>
					<td><?php echo $row->apellido;  ?></td>
					<td><?php echo $row->email;  ?></td>
					<td><?php echo $row->usuario;  ?></td>
					<td><?php echo $row->pass;  ?></td>
					<td><a href="<?php echo base_url("usuarios_modifica/$row->id");?>">Modificar</a>|<a href="<?php echo base_url("usuarios_activa/$row->id");?>">Activar</a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>	            
	</div>

<?php } ?>