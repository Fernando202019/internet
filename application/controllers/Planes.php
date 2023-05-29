<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Planes extends CI_Controller {
	//definiendo constructor de la clase
	public function __construct(){
		parent::__construct();
		//se esta llamando al modelo
		$this->load->model("plan");


	}

//renderiza la vista planes
	public function index()
	{
		$data["listadoPlanes"]=$this->plan->obtenerTodos();
		$this->load->view('header');
		$this->load->view('planes/index',$data);
		$this->load->view('footer');
	}
	//renderiza la vista nuevo
    public function nuevo(){

        $this->load->view('header');
		$this->load->view('planes/nuevo');
		$this->load->view('footer');
    }
	//funcion para capturar los valores del formulario
	public function guardarPlan(){
		error_reporting(0);
		$datosNuevoPlan=array(
			"tipo_plan_aaa"=>$this->input->post('tipo_plan_aaa'),
			"velocidad_plan_aaa"=>$this->input->post('velocidad_plan_aaa'),
		);
		print_r($datosNuevoPlan);
		if($this->plan->insertar($datosNuevoPlan)){
			redirect('planes/index');
		}else{
			echo "<h1> ERROR </h1>";
		}
	}
	//funcion para eliminar
	public function borrar($id_plan_aaa){
		if ($this->plan->eliminarPorId($id_plan_aaa)) {
			redirect('planes/index');

		} else {
			echo "No se pudo eliminar";

		}
	}
	//fucnion para renderizar formulario de actualizacion
	public function actualizar($id){
			$data["planEditar"]=$this->plan->obtenerPorId($id);
			$this->load->view("header");
			$this->load->view("planes/actualizar",$data);
			$this->load->view("footer");
	}

	public function procesarActualizacion(){
		error_reporting(0);
		$datosPlanEditado=array(
            "tipo_plan_aaa"=>$this->input->post('tipo_plan_aaa'),
			"velocidad_plan_aaa"=>$this->input->post('velocidad_plan_aaa'),
			"costo_plan_aaa"=>$this->input->post('costo_plan_aaa'),
		);
		$id=$this->input->post("id_plan_aaa");
		if($this->plan->actualizar($id,$datosPlanEditado)){
			redirect('planes/index');
		}else{
			echo "<h1> ERROR </h1>";
		}
	}


}//cierre final de la clase
