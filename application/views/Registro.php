<div class="container">
  <h2>Registrarse como Cliente, Si ya estas registrado haz click en el boton de iniciar sesion</h2>
  <div class="row">
    <div class="col-lg-8">

      <a href="<?php echo base_url('login');?>"class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Iniciar sesion</a>
      <br>

      <?php echo validation_errors(); ?>
      <!-- Genero el formulario para crear una usuario -->

      <div class="well bs-component form-horizontal">
        <?php echo form_open('verifico_nuevoregistro', 
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
            <label class="col-lg-2 control-label">Usuario</label>
            <div class="col-lg-10">
              <?php echo form_input(['name' => 'usuario', 
                          'id' => 'usuario', 
                          'class' => 'form-control',
                          'placeholder' => 'Usuario', 
                          'required'=>'required',
                          'value'=>set_value('usuario')]); ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-2 control-label">Contraseña</label>
            <div class="col-lg-10">
              <?php echo form_password(['name' => 'password', 
                          'id' => 'password', 
                          'class' => 'form-control',
                          'placeholder' => 'Contraseña', 
                          'required'=>'required']); ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-2 control-label">Repite Contraseña</label>
            <div class="col-lg-10">
              <?php echo form_password(['name' => 're_password', 
                          'id' => 're_password', 
                          'class' => 'form-control',
                          'placeholder' => 'Repetir Contraseña', 
                          'required'=>'required']); ?>
            </div>
          </div>
          <div class="col-lg-3 col-lg-offset-4">
            <?php echo form_submit('submit', 'Registrarse',"class='btn btn-primary' "); ?> <br><br>
            <?php echo form_reset ('reset', 'Editar', "class='btn btn-primary'"); ?><br>
            <?php echo form_close(); ?>
          </div>
        </fieldset>
      </div>
    </div>
  </div>
</div>