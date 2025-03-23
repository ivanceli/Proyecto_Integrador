<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Modelo para realizar los reportes
class ventas_model extends CI_Model {

	/*
    * Constructor de la clase
    */
    public function __construct() {
        parent::__construct();
    }


// Obtener totales de ventas por mes
public function get_totales_por_mes() {
    $query = $this->db->query("SELECT 
        MONTH(fecha) AS mes, 
        YEAR(fecha) AS anio, 
        SUM(total_venta) AS total 
    FROM ventas_cabecera 
    GROUP BY anio, mes 
    ORDER BY anio, mes");

    return $query->result();
}

// Obtener ventas agrupados por productos
public function get_ventas_por_producto() {
    $query = $this->db->query("
        SELECT 
            p.descripcion AS producto,
            SUM(vd.cantidad) AS cantidad_vendida,
            SUM(vd.total) AS total_venta
        FROM 
            ventas_detalle vd
        JOIN 
            productos p ON vd.producto_id = p.id
        GROUP BY 
            vd.producto_id
        ORDER BY 
            total_venta DESC
    ");
    return $query->result();
}

// Obtener los 5 productos mas vendidos
public function get_top_5_productos()
{
    $query = $this->db->query("
        SELECT p.descripcion AS producto, SUM(vd.cantidad) AS total_vendido
        FROM ventas_detalle vd
        JOIN productos p ON vd.producto_id = p.id
        GROUP BY p.descripcion
        ORDER BY total_vendido DESC
        LIMIT 5
    ");
    return $query->result_array();
}


}