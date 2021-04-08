<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MostrarProductos extends CI_Controller {

	public function index()
	{
		
	}

	public function mostrarProds()
	{
		try{
		$this->load->model('productos_model');
		$productos = $this->productos_model->getProductos();
		if($productos == null){
			$empty = "<h3 style=color:darkred>No hay productos ingresados en la base de datos</h3>";
			$this->load->view('layout',array('contenedor'=>$empty));	
		}else{
			
		$view = $this->load->view('index_productos_view', array('listado'=>$productos),true);
		$this->load->view('layout',array('contenedor'=>$view));

		}
		}catch(Exception $e){
		}
	}

	public function detalle($id){
		$this->load->model('productos_model');
		$producto = $this->productos_model->mostrarDetalle($id);
		$view = $this->load->view('detalle_producto_view', array('producto'=>$producto),true);
		$this->load->view('layout',array('contenedor'=>$view));
	}
}