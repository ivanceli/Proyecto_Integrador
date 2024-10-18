<div class="container">
	<div class="well">
	<br>       
     <?php if (!$consultas) { ?>

	<div class="container">
		<div class="well">
			<h1>No se hay Consultas</h1>
            <hr>
		</div>
		
	</div>

<?php } else { ?>           
<div class="container">
	<div class="well">
		<h1><b>Consultas</b></h1>
	</div>	
	<br>
	<table  class="table table-bordered" >
<!--        table table-bordered-->
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
                <th>Apellido</th>
				<th>Email</th>
				<th>Motivo</th>
				<th>Mensaje</th>
				<th> </th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($consultas->result() as $row){ ?>
			<tr>
				<td><?php echo $row->id;  ?></td>
				<td><?php echo $row->nombre;  ?></td>
                <td><?php echo $row->apellido;  ?></td>
				<td><?php echo $row->email;  ?></td>
				<td><?php echo $row->motivo;  ?></td>
				<td><?php echo $row->mensaje;  ?></td>                
				
				<td>
                     <a href="<?php echo base_url("consulta_elimina/$row->id");?>">Eliminar</a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>	            
	<?php } ?>
</div>
            </div>
        </div>