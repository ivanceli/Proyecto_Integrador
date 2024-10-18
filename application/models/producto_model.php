<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class Producto_model extends CI_Model{
		
	/**
    * Constructor de la clase
    */
    public function __construct() {
        parent::__construct();
    }

    /**
    * Retorna todos los productos
    */
    function get_productos()
    {
        $query = $this->db->get_where('productos', array('eliminado' => 'NO'));
        
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }        
    }

    /**
    * Retorna todos los electrodomesticos
    */
    function get_lacteos_enteros()
    {
        $query = $this->db->get_where('productos', array('eliminado' => 'NO', 'categoria_id' => '1'));
        
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }        
    }

    /**
    * Retorna todos los muebles
    */
    function get_lacteos_descremados()
    {
        $query = $this->db->get_where('productos', array('eliminado' => 'NO', 'categoria_id' => '2'));
        
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }        
    }

    /**
    * Inserta un producto
    */
    public function add_producto($data){
        $this->db->insert('productos', $data);
    }

    /**
    * Retorna todos los datos de un producto
    */
    function edit_producto($id){

        $query = $this->db->get_where('productos', array('id' => $id),1);
                
        if($query->num_rows() == 1) {
            return $query;
        } else {
            return FALSE;
        }
    }

    /**
    * Actualiza los datos de un producto
    */
    function update_producto($id, $data){
        $this->db->where('id', $id);
        $query = $this->db->update('productos', $data);
        if($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /**
    * Eliminación y activación logica de un producto
    */
    function estado_producto($id, $data){
        $this->db->where('id', $id);
        $query = $this->db->update('productos', $data);
        if($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /**
    * Retorna todos los productos inactivos
    */
    function not_active_productos()
    {
        $query = $this->db->get_where('productos', array('eliminado' => 'SI'));
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }        
    }

        function get_ventas_cabecera()
    {
        $this->db->select('ventas_cabecera.id,usuarios.nombre,usuarios.apellido,ventas_cabecera.fecha,ventas_cabecera.total_venta');
        $this->db->from('ventas_cabecera');
        $this->db->join('usuarios','ventas_cabecera.usuario_id=usuarios.id') ;   
        //select * from ventas_cabecera;
        $query = $this->db->get();
       
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }
    }
    
        function get_ventas_detalle($id)
    {
        $this->db->join('productos','productos.id = ventas_detalle.producto_id');   

        //select * from ventas_detalle;
        $query = $this->db->get_where('ventas_detalle', array('venta_id' => $id));
       
          
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }
    }
} 