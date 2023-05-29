<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tipos extends CI_Controller {
	//definiendo el constructor de la clase
	public function __construct(){
		parent::__construct();
		$this->load->model("cliente");
    	$this->load->model("plan");
		$this->load->model("tipo");
	}

  public function index(){
		$data["listadoTipos"]=
		$this->tipo->obtenerTodas();
    $this->load->view("header");
    $this->load->view("tipos/index",$data);
    $this->load->view("footer");
  }



  public function nuevo(){
		$data["listadoClientes"]=$this->cliente->obtenerTodos();
		$data["listadoPlanes"]=$this->plan->obtenerTodos();
    $this->load->view("header");
    $this->load->view("tipos/nuevo",$data);
    $this->load->view("footer");
  }

	public function editar($id_tipo_aaa){
		$data["tipo"]=$this->tipo->obtenerPorId($id_tipo_aaa);
		$data["listadoClientes"]=$this->cliente->obtenerTodos();
		$data["listadoPlanes"]=$this->plan->obtenerTodos();
		$this->load->view("header");
		$this->load->view("tipos/editar",$data);
		$this->load->view("footer");
	}

	public function guardarTipo(){
		$datos=array(
			"fk_id_cli_aaa"=>$this->input->post("fk_id_cli_aaa"),
			"fk_id_plan_aaa"=>$this->input->post("fk_id_plan_aaa"),
		);
		if($this->tipo->insertar($datos)){
				$this->session->set_flashdata("confirmacion",
			  "Tipo Plan Insertado Exitosamente");
		}else{
			$this->session->set_flashdata("error",
			"Error al inserta, verifique e intente otra vez");
		}
		redirect("tipos/index");
	}



	public function actualizarTipo(){
		$datos=array(
			"fk_id_cli_aaa"=>$this->input->post("fk_id_cli_aaa"),
			"fk_id_plan_aaa"=>$this->input->post("fk_id_plan_aaa"),
		);
		$id_tipo_aaa=$this->input->post("id_tipo_aaa");
		if($this->tipo->actualizar($id_tipo_aaa,$datos)){
				$this->session->set_flashdata("confirmacion",
			  "Tipo Plan Actualizado Exitosamente");
				redirect("tipos/index");
		}else{
			$this->session->set_flashdata("error",
			"Error al actualizar, verifique e intente otra vez");
			redirect("tipos/editar/".$id_tipo_aaa);
		}

	}

}//Cierre de la clase (No borrar)
