<div class="container">
  <h2>Envianos tu consulta sobre el sitio</h2>
  <div class="row">
    <div class="col-lg-8">
    <?php echo validation_errors(); ?>
      <!-- Genero el formulario para crear una usuario -->
     <div class="well bs-component form-horizontal">
        <?php echo form_open('verifico_consulta', 
                  ['class' => 'form-group', 'role' => 'form', 'id' => 'form_registro']); ?>
        <fieldset>
          <div class="form-group">
            <label class="col-lg-2 control-label">Nombre</label>
            <div class="col-lg-10">
              <?php echo form_input(['name' => 'nombre', 
                          'id' => 'nombre', 
                          'class' => 'form-control',
                          'placeholder' => 'Nombre', 
                          'required'=>'required', 
                          'autofocus'=>'autofocus',
                          'value'=>set_value('nombre')]); ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-2 control-label" class="form-control">Apellido</label>
            <div class="col-lg-10">
              <?php echo form_input(['name' => 'apellido', 
                          'id' => 'apellido', 
                          'class' => 'form-control',
                          'placeholder' => 'Apellido', 
                          'required'=>'required',
                          'value'=>set_value('apellido')]); ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-2 control-label">Email</label>
            <div class="col-lg-10">
              <?php echo form_input(['type'=>'email', 
                          'name' => 'email', 
                          'id' => 'email', 
                          'class' => 'form-control',
                          'placeholder' => 'Email', 
                          'required'=>'required',
                          'value'=>set_value('email')]); ?>
            </div>
          </div>
          <div class="form-group">                                      
            <label class="col-lg-2 control-label">Motivo</label>
            <div class="col-lg-10">
              <?php echo form_input(['name' => 'motivo', 
                          'id' => 'motivo', 
                          'class' => 'form-control',
                          'placeholder' => 'Motivo', 
                          'required'=>'required',
                          'value'=>set_value('motivo')]); ?>
            </div>
          </div>
                    <div class="form-group">                                     
            <label class="col-lg-2 control-label">Mensaje</label>
            <div class="col-lg-10">
              <?php echo form_input(['name' => 'mensaje', 
                          'id' => 'mensaje', 
                          'class' => 'form-control',
                          'placeholder' => 'Mensaje', 
                          'required'=>'required',
                          'value'=>set_value('mensaje')]); ?>
            </div>
          </div>
          <div class="col-lg-3 col-lg-offset-4">
            <?php echo form_submit('submit', 'Enviar',"class='btn btn-primary' "); ?> <br><br>
            <?php echo form_close(); ?>
          </div>
        </fieldset>
      </div>
    </div>
  </div>
</div>