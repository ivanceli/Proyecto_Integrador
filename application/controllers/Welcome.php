<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$data['titulo']='Principal';

		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];

        $this->load->view('front/header_views',$data);

		$this->load->view('front/navbar_views2');

		$this->load->view('Principal');

		$this->load->view('front/footer_views');

    }

   public function quienes_somos()
   {

        $data=array ('titulo'=>'Quienes Somos');

        $session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];

        $this->load->view('Front/header_views',$data);

		$this->load->view('Front/navbar_views2');

		$this->load->view('Quienes_Somos');

		$this->load->view('Front/footer_views');
    }

   public function comercializacion()
   {

        $data=array ('titulo'=>'Comercializacion');

       	$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];

        $this->load->view('Front/header_views',$data);

		$this->load->view('Front/navbar_views2');

		$this->load->view('Comercializacion');

		$this->load->view('Front/footer_views');
    }

    public function info_de_contacto()
   {

        $data=array ('titulo'=>'Información de Contacto');

   		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];

        $this->load->view('Front/header_views',$data);

		$this->load->view('Front/navbar_views2');

		$this->load->view('Informacion_de_Contacto');

		$this->load->view('Front/footer_views');
    }

        public function terminos_de_uso()
   {

        $data=array ('titulo'=>'Terminos de Uso');

   		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];

        $this->load->view('Front/header_views',$data);

		$this->load->view('Front/navbar_views2');

		$this->load->view('Terminos_de_uso');

		$this->load->view('Front/footer_views');
    }

        public function catalogo()
   {

        $data=array ('titulo'=>'Catalogo de Productos');

       	$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];

        $this->load->view('Front/header_views',$data);

		$this->load->view('Front/navbar_views2');

		$this->load->view('Catalogo_de_Productos');

		$this->load->view('Front/footer_views');
    }

     public function consulta()
   {

        $data=array ('titulo'=>'Consultas');

       	$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];

        $this->load->view('Front/header_views',$data);

		$this->load->view('Front/navbar_views2');

		$this->load->view('Consultas');

		$this->load->view('Front/footer_views');
    }  

}    