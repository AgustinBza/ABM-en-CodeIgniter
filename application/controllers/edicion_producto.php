<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edicion_producto extends CI_Controller {


	public function index()
	{

	}

    public function editar()
    {
        $this->load->model('productos_model');
       try
        {
        $id = $this->productos_model->edicion_prod($_POST);
        $detalle = $this->productos_model->mostrarDetalle($id);
        }catch(Exception $e)
        { 
        }
        $view = $this->load->view('detalle_producto_view',array('producto'=>$detalle),true);
        $this->load->view('layout',array('contenedor'=>$view));
    }

}