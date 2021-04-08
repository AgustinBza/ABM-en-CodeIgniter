<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eliminar extends CI_Controller {

	public function index()
	{
		
	}

    
	public function eliminar_producto($id)
	{
        $this->load->model('productos_model');
        $this->productos_model->eliminarProd($id); 
        $this->load->model('productos_model');
		$productos = $this->productos_model->getProductos();
        $aviso = 'Producto eliminado';
        $view = $this->load->view('index_productos_view', array('listado'=>$productos),true);
		$this->load->view('layout',array('contenedor'=>$view,'aviso'=>$aviso));

	}
}

