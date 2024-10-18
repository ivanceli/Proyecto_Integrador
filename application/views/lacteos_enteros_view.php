<?php if (!$productos) { ?>

	<div class="container">
		<div class="well">
			<h1>No hay Lacteos</h1>
		</div>	
	</div>

<?php } else { ?>

<div class="container-fluid">
	
	<h2 class="text-center">Lacteos Enteros</h2>

	<hr>

	<div class="row text-center">
		<?php foreach($productos->result() as $row){ ?>
			<div class="col-md-3 col-sm-6 hero-feature">
				<div class="thumbnail">

					<img src="<?php echo base_url($row->imagen); ?>" alt="" class="img-responsive img-thumbnail">

					<div class="caption">
						<h4><?php echo trim($row->descripcion); ?></h4>

						<p>
							<?php 
								if ($row->stock < $row->stock_min && $row->stock > 0) {
									echo 'Por debajo del valor minimo: '.$row->stock_min;
								} elseif ($row->stock == 0) {
									echo 'No hay unidades disponibles';
								}else {
									echo 'Disponible:'.$row->stock.' unidades';
								}
							?>
						</p>

						<p>Precio: $ <?php echo $row->precio_venta; ?> </p>

						<p>
						<?php 
							if (($row->stock > 0) && ($session_data = $this->session->userdata('logged_in'))) {

								// Envia los datos en forma de formulario para agregar al carrito
		                        echo form_open('carrito_agrega');
		                        echo form_hidden('id', $row->id);
		                        echo form_hidden('descripcion', $row->descripcion);
		                        echo form_hidden('precio_venta', $row->precio_venta);
		                        echo form_hidden('stock', $row->stock);
		            	?>
		                    	<div>
		                <?php
		                        $btn = array(
		                            'class' => 'btn btn-primary',
		                            'value' => 'Comprar',
		                            'name' => 'action'
		                        	);
		                        
		                        echo form_submit($btn);
		                        echo form_close();
		               	?>
		                    	</div>
		               	<?php 
								echo "<a href='#' class='btn btn-default'>Más Datos</a>";

							}else{
								echo "<a href='#' class='btn btn-default'>Mas Datos</a>";
							}
						?>	
						</p>
						
					</div>
				</div>
			</div>
		<?php } ?>	
	</div>
	<hr>
</div>
<?php } ?>