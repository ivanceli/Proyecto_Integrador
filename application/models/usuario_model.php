<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class Usuario_model extends CI_Model{

	/**
    * Constructor de la clase
    */
    public function __construct() {
        parent::__construct();
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
    
 /*   $data = array
   (
    'nombre'=>$this->input->post('nombre',true),
    'apellido'=>$this->input->post('apellido',true),
    'email'=>$this->input->post('email',true),
    'perfil_id'=>$this->input->post('perfil_id',true),
    'usuario'=>$this->input->post('username',true),
    'pass'=>($pass)
   );*/
		
	function get_usuarios()
	{
		//$this->db->select('id, nombre, apellido, username');
		$query = $this->db->get('usuarios');

		if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }
	}

   //Este metodo solo me trae el usuario que esta logeado
    function get_usuario_logeado()
    {
      if($this->_veri_log())
      {
       $session_data = $this->session->userdata('logged_in');
       $data['perfil_id'] = $session_data['perfil_id'];
       $id['id'] = $session_data['id'];
        $query = $this->db->get_where('usuarios', array('id' => $session_data['id']));
        return $query;
    }else{
        return FALSE;
    }

    }
	

	function add_user($data)
	{
		$this->db->insert('usuarios', $data);
		$insert_id = $this->db->insert_id();
		return $insert_id;
	}
	

	function edit_usuario($id)
	{
		$query = $this->db->get_where('usuarios', array('id' => $id),1);
                
        if($query->num_rows() == 1) {
            return $query;
        } else {
            return FALSE;
        }
	}
	
	function update_usuario($id, $data)
	{
		$this->db->where('id', $id);
        $query = $this->db->update('usuarios', $data);
        if($query) {
            return TRUE;
        } else {
            return FALSE;
        }
	}

	function delete_usuario($id)
	{			
		$this->db->where('id', $id);
		$query = $this->db->delete('usuarios'); 
		return true;	
	}

	    /**
    * Retorna todos los usuarios que son clientes
    */
    function get_usuarios_cliente()
    {
        $query = $this->db->get_where('usuarios', array('baja' => 'NO', 'perfil_id' => '2'));
        
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }        
    }

        /**
    * Eliminación y activación logica de un usuario
    */
    function estado_usuario($id, $data)
    {
        $this->db->where('id', $id);
        $query = $this->db->update('usuarios', $data);
        if($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

        /**
    * Retorna todos los usuario inactivos
    */
    function not_active_usuarios()
    {
        $query = $this->db->get_where('usuarios', array('baja' => 'SI'));
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }        
    }
	
	
} 