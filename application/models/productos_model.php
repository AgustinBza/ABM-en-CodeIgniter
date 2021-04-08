<?php

class productos_model extends CI_Model
{



    function getProductos()
    {
        $this->db->select('*');
        $this->db->from('productos');
        $query = $this->db->get();
        return $query->result_array();
    }

    function insertProd($producto)
    {
        $data['id']='DEFAULT';
        $data['nombre']=$producto['nombre'];
        $data['descripcion'] = $producto['descripcion'];
        $data['precio'] = $producto['precio'];
        $data['categoria'] = $producto['categoria'];
        $data['cantidad'] = $producto['cantidad'];
        $this->db->insert('productos',$data);
        return $this->db->insert_id();//Obtenemos el ultimo ID insertado.
    }

    function mostrarDetalle($id)
    {
        $this->db->select('*');
        $this->db->from('productos');
        $this->db->where('id',$id);
        $consulta = $this->db->get();
        return $consulta->result_array();
    }

    function edicion_prod($dato)
    {
        $id = $dato['id'];
        unset($dato['id']);
        
        foreach($dato as $campo => $valor){
            switch ($campo) {
                
                case 'nombre':
                     $this->db->where('id',$id);
                     $this->db->update('productos',$dato);
                break;
                
                case 'descripcion':
                    $this->db->where('id',$id);
                    $this->db->update('productos',$dato);
                break;
                
                case 'precio':
                    $this->db->where('id',$id);
                    $this->db->update('productos',$dato);
                break;
                
                case 'categoria':
                    $this->db->where('id',$id);
                    $this->db->update('productos',$dato);
                break;
                
                case 'cantidad':
                    $this->db->where('id',$id);
                    $this->db->update('productos',$dato);
                break;
            }        
        } 
        
        return $id;
    
    }

    function eliminarProd($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('productos');
    }

}

?>