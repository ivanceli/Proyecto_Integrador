<?php 

class reporte_controller extends CI_Controller {

public function __construct() {
    parent::__construct();
    $this->load->model('ventas_model');
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


public function ventas_por_mes() {
    
    $session_data = $this->session->userdata('logged_in');
    $dat['perfil_id'] = $session_data['perfil_id'];
    $dat['nombre'] = $session_data['nombre'];
    $data['ventas'] = $this->ventas_model->get_totales_por_mes();
    $data2 = array('titulo' => 'Reportes por mes');

    $this->load->view('Front/header_views', $data2);
    $this->load->view('Front/navbar_views2', $dat);
    $this->load->view('reportes/reporte_por_mes', $data);
    $this->load->view('Front/footer_views');
}

public function ventas_por_productos() {

    $session_data = $this->session->userdata('logged_in');
    $dat['perfil_id'] = $session_data['perfil_id'];
    $dat['nombre'] = $session_data['nombre'];
    $data['reporte'] = $this->ventas_model->get_top_5_productos();
    $data2 = array('titulo' => 'Reportes de Ventas por Producto');

    $this->load->view('Front/header_views', $data2);
    $this->load->view('Front/navbar_views2', $dat);
    $this->load->view('reportes/reporte_por_producto', $data);
    $this->load->view('Front/footer_views');
}

}
