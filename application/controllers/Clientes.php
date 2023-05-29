<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {
	//definiendo constructor de la clase
	public function __construct(){
		parent::__construct();
		//se esta llamando al modelo
		$this->load->model("cliente");


	}

//renderiza la vista clientes
	public function index()
	{
		$data["listadoClientes"]=$this->cliente->obtenerTodos();
		$this->load->view('header');
		$this->load->view('clientes/index',$data);
		$this->load->view('footer');
	}
	//renderiza la vista nuevo
    public function nuevo(){

        $this->load->view('header');
		$this->load->view('clientes/nuevo');
		$this->load->view('footer');
    }
	//funcion para capturar los valores del formulario
	public function guardarCliente(){
		error_reporting(0);
		$datosNuevoCliente=array(
			"nombre_cli_aaa"=>$this->input->post('nombre_cli_aaa'),
			"apellido_cli_aaa"=>$this->input->post('apellido_cli_aaa'),
			"direccion_cli_aaa"=>$this->input->post('direccion_cli_aaa'),
			"correo_cli_aaa"=>$this->input->post('correo_cli_aaa'),
        );
		print_r($datosNuevoCliente);
		if($this->cliente->insertar($datosNuevoCliente)){
			redirect('clientes/index');
			enviarEmail($datosNuevoCliente["direccion_cli_aaa"],"NOTIFICACION_REGISTRO","<h1>FELICITACIONES: ".$datosNuevoCliente["nombre_cli_aaa"]."</h1> Acabas de ser registrado en el sistema");
		}else{
			echo "<h1> ERROR </h1>";
		}
	}
	//funcion para eliminar clientes
	public function borrar($id_cli_aaa){
		if ($this->cliente->eliminarPorId($id_cli_aaa)) {
			redirect('clientes/index');

		} else {
			echo "No se pudo eliminar";

		}
	}

	//fucnion para renderizar formulario de actualizacion
	public function actualizar($id){
			$data["clienteEditar"]=$this->cliente->obtenerPorId($id);
			$this->load->view("header");
			$this->load->view("clientes/actualizar",$data);
			$this->load->view("footer");
	}
	//funcion para actualizar al estudiante del apartado de guardar
	public function procesarActualizacion(){
		error_reporting(0);
		$datosClienteEditado=array(
			"nombre_cli_aaa"=>$this->input->post('nombre_cli_aaa'),
			"apellido_cli_aaa"=>$this->input->post('apellido_cli_aaa'),
			"direccion_cli_aaa"=>$this->input->post('direccion_cli_aaa'),
			"correo_cli_aaa"=>$this->input->post('correo_cli_aaa'),
		);
		$id=$this->input->post("id_cli_aaa");
		if($this->cliente->actualizar($id,$datosClienteEditado)){
			redirect('clientes/index');
		}else{
			echo "<h1> ERROR </h1>";
		}
	}


}//cierre final de la clase
