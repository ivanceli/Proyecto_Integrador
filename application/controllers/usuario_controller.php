<?php
class usuario_controller extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    //cargamos el modelo
    $this ->load->model('usuario_model'); 
  }


    private function _veri_log()
      {
        if ($this->session->userdata('logged_in')) 
        {
          return TRUE;
        } else {
          return FALSE;
        }
      }

function index($id)

{ 
  //obtengo el usuario mediante su id
  $user = $this->Usuario_Model->get_by_id($id);
  //asigno a $data las variables que paso a la vista
  $data['titulo'] = 'Perfil de '.$user->name;
  $data['user'] = $user->name;
  //Cargo las vistas

  $this->load->multiple_views(['Front/header_views','Front/navbar_views','Registro','Front/footer_views'],$data);
}

function usuarios()
{
       if($this->_veri_log()){
      $data = array('titulo' => 'Lista de Usuarios');
    
      $session_data = $this->session->userdata('logged_in');
      $data['perfil_id'] = $session_data['perfil_id'];
      $data['nombre'] = $session_data['nombre'];

      $dat = array('usuarios' => $this->usuario_model->get_usuarios_cliente() );

      $this->load->view('Front/header_views',$data);
      $this->load->view('Front/navbar_views2');
      $this->load->view('muestrausuarios_views',$dat);
      $this->load->view('Front/footer_views');
      }else{
      redirect('login', 'refresh'); }
}

    /**
    * Obtiene los datos del usuario a eliminar
    */
      function usuarios_elimina()
      {
        $id = $this->uri->segment(2); 
        $data = array(
          'baja'=>'SI'
        );

        $this->usuario_model->estado_usuario($id, $data);
        redirect('usuarios_todos', 'refresh');
      }

            /**
    * Usuarios eliminados logicamente
    */
      function muestra_eliminados()
      {     
        if($this->_veri_log()){
        $data = array('titulo' => 'Usuarios eliminados');
      $session_data = $this->session->userdata('logged_in');
      $data['perfil_id'] = $session_data['perfil_id'];
      $data['nombre'] = $session_data['nombre'];
      
      $dat = array('usuarios' => $this->usuario_model->not_active_usuarios());

      $this->load->view('Front/header_views', $data);
      $this->load->view('Front/navbar_views2');
      $this->load->view('muestrausuarioseliminados_views', $dat);
      $this->load->view('Front/footer_views');
      }else{
      redirect('login', 'refresh');}
    }


    function form_agrega_usuario()  
    {
      if($this->_veri_log()){
      $data = array('titulo' => 'Agregar Usuario');
    
      $session_data = $this->session->userdata('logged_in');
      $data['perfil_id'] = $session_data['perfil_id'];
      $data['nombre'] = $session_data['nombre'];

      $this->load->view('Front/header_views', $data);
      $this->load->view('Front/navbar_views2');
      $this->load->view('agregarusuario_views');
      $this->load->view('Front/footer_views');
      }else{
      redirect('login', 'refresh'); }
    }


    function agrega_usuario()
    {
         //Validación del formulario
      $this->form_validation->set_rules('nombre', 'Nombre', 'required');
      $this->form_validation->set_rules('apellido', 'Apellido', 'required');
      $this->form_validation->set_rules('email', 'Email', 'required');
      $this->form_validation->set_rules('usuario', 'Usuario', 'required');
      $this->form_validation->set_rules('pass', 'Pass', 'required');

      //Mensaje del form_validation
      $this->form_validation->set_message('required','<div class="alert alert-danger">El campo %s es obligatorio, al intentar modificar estaba vacio</div>');

      $this->form_validation->set_message('numeric','<div class="alert alert-danger">El campo %s debe contener un valor numérico, al intentar modificar estaba vacio</div>');

      //Mensaje de error si no pasan las reglas
      $this->form_validation->set_message('required',
                    '<div class="alert alert-danger">El campo %s es obligatorio</div>');

      $this->form_validation->set_message('is_unique',
                    '<div class="alert alert-danger">El campo %s ya existe</div>');

      $this->form_validation->set_message('numeric',
              '<div class="alert alert-danger">El campo %s debe contener un valor numérico</div>');

         

      //Preparo los datos para guardar en la base, en caso de que pase la validacion
      $data = array(
        'nombre'=>$this->input->post('nombre',true),
        'apellido'=>$this->input->post('apellido',true),
        'email'=>$this->input->post('email',true),
        'usuario'=>$this->input->post('usuario',true),
        'perfil_id'=>'2',
        'pass'=>$this->input->post('pass',true),
      );
      if (!$this->form_validation->run())
      {
        $data = array('titulo' => 'Error de formulario');
    
        $session_data = $this->session->userdata('logged_in');
        $data['perfil_id'] = $session_data['perfil_id'];
        $data['nombre'] = $session_data['nombre'];


        $this->load->view('Front/header_views', $data);
        $this->load->view('Front/navbar_views2');
        $this->load->view('agregarusuario_views');
        $this->load->view('Front/footer_views');
      }
      else
      {
        $usuarios = $this->usuario_model->add_user($data);
        redirect('usuarios_todos');     
      }
    }





   





      /**
      * Muestra para modificar un usuario
      */
    function muestra_modificar()
    {
      $id = $this->uri->segment(2);
      $datos_usuario = $this->usuario_model->edit_usuario($id);

      if ($datos_usuario != FALSE) {
        foreach ($datos_usuario->result() as $row) 
        {
          $nombre = $row->nombre;
          $apellido = $row->apellido;
          $email = $row->email;
          $usuario = $row->usuario;
          $pass = $row->pass; 
        }

        $dat = array('usuario' =>$datos_usuario,
          'id'=>$id,
          'nombre'=>$nombre,
          'apellido'=>$apellido,
          'email'=>$email,
          'usuario'=>$usuario,
          'pass'=>$pass,
        );
      } 
      else 
      {
        return FALSE;
      }
      if($this->_veri_log()){
      $data = array('titulo' => 'Modificar Usuario');
      $session_data = $this->session->userdata('logged_in');
      $data['perfil_id'] = $session_data['perfil_id'];
      $data['nombre'] = $session_data['nombre'];

      $this->load->view('Front/header_views', $data);
      $this->load->view('Front/navbar_views2');
      $this->load->view('modificausuario_views', $dat);
      $this->load->view('Front/footer_views');
      }else{
      redirect('login', 'refresh');}
    }

    /**
      * Verifica datos para modificar un usuario
      */
    function modificar_usuario()
    {
      //Validación del formulario
      $this->form_validation->set_rules('nombre', 'Nombre', 'required');
      $this->form_validation->set_rules('apellido', 'Apellido', 'required');
      $this->form_validation->set_rules('email', 'Email', 'required');
      $this->form_validation->set_rules('usuario', 'Usuario', 'required');
      $this->form_validation->set_rules('pass', 'Pass', 'required');

      //Mensaje del form_validation
      $this->form_validation->set_message('required','<div class="alert alert-danger">El campo %s es obligatorio, al intentar modificar estaba vacio</div>');

      $this->form_validation->set_message('numeric','<div class="alert alert-danger">El campo %s debe contener un valor numérico, al intentar modificar estaba vacio</div>'); 

      $id = $this->uri->segment(2);
      $datos_usuario = $this->usuario_model->edit_usuario($id);

      $dat = array(
        'id'=>$id,
        'nombre'=>$this->input->post('nombre',true),
        'apellido'=>$this->input->post('apellido',true),
        'email'=>$this->input->post('email',true),
        'usuario'=>$this->input->post('usuario',true),
        'pass'=>$this->input->post('pass',true),
      );


      if ($this->form_validation->run()==FALSE)
      {
        $data = array('titulo' => 'Error de formulario');
        $session_data = $this->session->userdata('logged_in');
        $data['perfil_id'] = $session_data['perfil_id'];
        $data['nombre'] = $session_data['nombre'];

        $this->load->view('Front/header_views', $data);
        $this->load->view('Front/navbar_views2');
        $this->load->view('modificausuario_views', $dat);
        $this->load->view('Front/footer_views');

      }

      else{
        $usuario = $this ->usuario_model->update_usuario($id, $dat);
        redirect('usuarios_todos');
      }
      
      
    }


          /**
    * Obtiene los datos del usuario a activar
    */
      function activar_usuario(){
        $id = $this->uri->segment(2);
        $data = array(
          'baja'=>'NO'
        );

        $this->usuario_model->estado_usuario($id, $data);
        redirect('usuarios_todos', 'refresh');
      }

      //para un usuario logeado
      function mostrar_datos()
     {
       if($this->_veri_log()){
      $data = array('titulo' => 'Mis Datos');
    
      $session_data = $this->session->userdata('logged_in');
      $data['perfil_id'] = $session_data['perfil_id'];
      $data['id'] = $session_data['id'];
      $data['nombre'] = $session_data['nombre'];

      $dat = array('usuarios' => $this->usuario_model->get_usuario_logeado() );

      $this->load->view('Front/header_views',$data);
      $this->load->view('Front/navbar_views2');
      $this->load->view('mostrardatos',$dat);
      $this->load->view('Front/footer_views');
      }else
       {
        redirect('login', 'refresh');
       }
    }



    function muestra_modificar2()
    {
      $id = $this->uri->segment(2);
      $datos_usuario = $this->usuario_model->edit_usuario($id);

      if ($datos_usuario != FALSE) {
        foreach ($datos_usuario->result() as $row) 
        {
          $nombre = $row->nombre;
          $apellido = $row->apellido;
          $email = $row->email;
          $usuario = $row->usuario;
          $pass = $row->pass; 
        }

        $dat = array('usuario' =>$datos_usuario,
          'id'=>$id,
          'nombre'=>$nombre,
          'apellido'=>$apellido,
          'email'=>$email,
          'usuario'=>$usuario,
          'pass'=>$pass,
        );
      } 
      else 
      {
        return FALSE;
      }
      if($this->_veri_log()){
      $data = array('titulo' => 'Modificar Usuario');
      $session_data = $this->session->userdata('logged_in');
      $data['perfil_id'] = $session_data['perfil_id'];
      $data['nombre'] = $session_data['nombre'];

      $this->load->view('Front/header_views', $data);
      $this->load->view('Front/navbar_views2');
      $this->load->view('modificausuariologeado_views', $dat);
      $this->load->view('Front/footer_views');
      }else{
      redirect('login', 'refresh');}
    }


    function modificar_usuario_logeado()
    {
      //Validación del formulario
      $this->form_validation->set_rules('nombre', 'Nombre', 'required');
      $this->form_validation->set_rules('apellido', 'Apellido', 'required');
      $this->form_validation->set_rules('email', 'Email', 'required');
      $this->form_validation->set_rules('usuario', 'Usuario', 'required');
      $this->form_validation->set_rules('pass', 'Pass', 'required');

      //Mensaje del form_validation
      $this->form_validation->set_message('required','<div class="alert alert-danger">El campo %s es obligatorio, al intentar modificar estaba vacio</div>');

      $this->form_validation->set_message('numeric','<div class="alert alert-danger">El campo %s debe contener un valor numérico, al intentar modificar estaba vacio</div>'); 

      $id = $this->uri->segment(2);
      $datos_usuario = $this->usuario_model->edit_usuario($id);

      $dat = array(
        'id'=>$id,
        'nombre'=>$this->input->post('nombre',true),
        'apellido'=>$this->input->post('apellido',true),
        'email'=>$this->input->post('email',true),
        'usuario'=>$this->input->post('usuario',true),
        'pass'=>$this->input->post('pass',true),
      );


      if ($this->form_validation->run()==FALSE)
      {
        $data = array('titulo' => 'Error de formulario');
        $session_data = $this->session->userdata('logged_in');
        $data['perfil_id'] = $session_data['perfil_id'];
        $data['nombre'] = $session_data['nombre'];

        $this->load->view('Front/header_views', $data);
        $this->load->view('Front/navbar_views2');
        $this->load->view('modificausuariologeado_views', $dat);
        $this->load->view('Front/footer_views');

      }

      else{
        $usuario = $this ->usuario_model->update_usuario($id, $dat);
        redirect('mostrar_datos');
      }
      
      
    }


}
