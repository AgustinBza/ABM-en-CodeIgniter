<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insercion_prod extends CI_Controller {

	public function index()
	{
		$this->views();
	}


	public function ingreso(){

		try{
			$this->form_validation->set_rules('nombre','Producto','required',array('required'=>'El campo %s es obligatorio!'));
			$this->form_validation->set_rules('descripcion','Descripcion','required',array('required'=>'El campo %s es obligatorio!'));
			$this->form_validation->set_rules('precio','Precio','required',array('required'=>'El campo %s es obligatorio!'));
			$this->form_validation->set_rules('cantidad','Cantidad','required|max_length[3]',array('required'=>'El campo %s es obligatorio'));
			if($this->form_validation->run()==FALSE){
				$this->views();
			}else{
				$this->load->model('productos_model');
				$inserted = $this->productos_model->insertProd($_POST);
				
				if(!$inserted){
					$this->load->view('layout', array('contenedor'=>'Error de ingreso'));	
				}else{
					$view = $this->load->view('insercion_prod_view',array(),true);
					$this->load->view('layout', array('contenedor'=>$view,'mensaje'=>'Producto ingresado'));
					}
			}

		}catch(Exception $e){

		}
	}	
		
	private function views(){
		$view = $this->load->view('insercion_prod_view',array(),true);
		$this->load->view('layout', array('contenedor'=>$view));
	
	}
}