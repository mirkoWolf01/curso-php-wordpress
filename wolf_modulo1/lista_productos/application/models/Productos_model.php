<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Productos_model extends CI_Model
{
    /** @var CI_DB $db */

    public function obtenerTodos()
    {
        // SELECT * FROM clase3.productos
        $query = $this->db->get('productos');

        // Con $query->result(); traigo todos los registros
        return $query->result();
    }

    public function obtenerPorId(int $id)
    {
        $this->db->where('codigo_producto', $id);
        $query = $this->db->get('productos');

        // $query->row(); -> trae solo el registro que coincide con el ID
        return $query->row();
    }


    public function create(array $datos)
    {
        $this->db->insert('productos', $datos);
        return $this->db->insert_id();
    }

    public function actualizar(int $id, array $datos){
        if (isset($datos['codigo_producto']) && $datos['codigo_producto'] != $id) {
            throw new Exception("Error: No se permite modificar el ID del producto.");
        }

        $this->db->where('codigo_producto', $id);
        $this->db->update('productos', $datos);
    }

    public function eliminar(int $id){
        $this->db->where('codigo_producto', $id);
        $this->db->delete('productos');
    }
}
