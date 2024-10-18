<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginModel extends CI_Model{

	public function __construct() 
    {
        parent::__construct();
    }
	
	function validarUsuario($usuario, $pass)
	{
		$query = $this->db->get_where('usuarios', array('usuario'=>$usuario,'pass'=>$pass), 1);

        if($query->num_rows() == 1)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
	}
}