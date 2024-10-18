<?php
class consulta_controller extends CI_Controller
{
   function __construct()
   {
    parent::__construct();
    //cargamos el modelo
    $this ->load->model('consulta_model'); 
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
  

  		function index()
		{
			//Genero las reglas de validacion
		   $this->form_validation->set_rules('nombre', 'Nombre', 'required');
		   $this->form_validation->set_rules('apellido', 'Apellido', 'required');
		 $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[consultas.email]');
		   $this->form_validation->set_rules('motivo', 'Motivo', 'required');
		   $this->form_validation->set_rules('mensaje', 'Mensaje', 'required');

			//Preparo los datos para guardar en la base, en caso de que pase la validacion
			$data = array(
				'nombre'=>$this->input->post('nombre',true),
				'apellido'=>$this->input->post('apellido',true),
				'email'=>$this->input->post('email',true),
				'motivo'=>$this->input->post('motivo',true),
				'mensaje'=>$this->input->post('mensaje',true),
			);

			//Si no pasa la validacion de datos
			if ($this->form_validation->run() == FALSE)
			{
				//Muestra la página de registro con el título de error
		     $data = array('titulo' => 'Consultar');
		
		     $session_data = $this->session->userdata('logged_in');
	         $data['perfil_id'] = $session_data['perfil_id'];
		     $data['nombre'] = $session_data['nombre'];


				$this->load->view('Front/header_views', $data);
				$this->load->view('Front/navbar_views2');
				$this->load->view('Consultas');
				$this->load->view('Front/footer_views');		
			}
			
			else 	//Pasa la validacion
			{
				//Envio array al metodo insert para registro de datos
				$consulta = $this->consulta_model->add_consulta($data);

				//Redirecciono a la pagina de perfil
				redirect('');
			}	
		}

		function muestra_consulta()
		{
			if($this->_veri_log()){
			$data = array('titulo' => 'Consultas');
		
			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];


			$dat = array('consultas' => $this->consulta_model->get_consultas());

			$this->load->view('Front/header_views',$data);
			$this->load->view('Front/navbar_views2',$data);
			$this->load->view('muestraconsultas',$dat);
			$this->load->view('Front/footer_views');
            }else{
			redirect('login', 'refresh');
            }

		}

         function eliminar_consulta()
	    {
	    	$id = $this->uri->segment(2); 
	    	$data = array(
	    		'eliminado'=>'SI'
	    	);

	    	$this->consulta_model->estado_consulta($id, $data);
	    	redirect('cargarconsultas', 'refresh');
	    }
		
}
