<?php
	
class Consulta_model extends CI_Model{

	/**
    * Constructor de la clase
    */
    public function __construct() {
        parent::__construct();
    }
    
		
	function get_consultas()
	{
		//$this->db->select('id, nombre, apellido, ');
		$query = $this->db->get_where('consultas', array('eliminado' => 'NO'));

		if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }
	}
	

	function add_consulta($data)
	{
		$this->db->insert('consultas', $data);
		$insert_id = $this->db->insert_id();
		return $insert_id;
	}
	

	function edit_usuario($id)
	{
		$query = $this->db->get_where('consultas', array('id' => $id),1);
                
        if($query->num_rows() == 1) {
            return $query;
        } else {
            return FALSE;
        }
	}
	
	function update_consulta($id, $data)
	{
		$this->db->where('id', $id);
        $query = $this->db->update('consultas', $data);
        if($query) {
            return TRUE;
        } else {
            return FALSE;
        }
	}

	function delete_consulta($id)
	{			
		$this->db->where('id', $id);
		$query = $this->db->delete('consultas'); 
		return true;	
	}
    
        function estado_consulta($id, $data){
        $this->db->where('id', $id);
        $query = $this->db->update('consultas', $data);
        if($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

	
	
} 