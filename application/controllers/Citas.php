<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Citas extends CI_Controller {
	//definiendo el constructor de la clase
	public function __construct(){
		parent::__construct();
		$this->load->model("cita");
	}

  public function index(){
    $this->load->view("header");
    $this->load->view("citas/index");
    $this->load->view("footer");
  }

  public function guardar(){
    $datosCita=array(
      "cedula_cit_aaa"=>$this->input->post("cedula_cit_aaa"),
      "nombre_cit_aaa"=>$this->input->post("nombre_cit_aaa"),
      "apellido_cit_aaa"=>$this->input->post("apellido_cit_aaa"),
      "email_cit_aaa"=>$this->input->post("email_cit_aaa"),
      "celular_cit_aaa"=>$this->input->post("celular_cit_aaa"),
      "provincia_cit_aaa"=>$this->input->post("provincia_cit_aaa"),
      "sucursal_cit_aaa"=>$this->input->post("sucursal_cit_aaa"),
      "fecha_cit_aaa"=>$this->input->post("fecha_cit_aaa"),
      "hora_cit_aaa"=>$this->input->post("hora_cit_aaa"),
    );
    if($this->cita->insertar($datosCita)){
        $resultado=array(
            "estado"=>"ok",
            "mensaje"=>"Cita guardada correctamente"
        );
    }else{
        $resultado=array(
            "estado"=>"error"
        );
    }
    echo json_encode($resultado);

  }
  //funcion para consultar proveedores en formato Json
  public function listado(){
    $data["citas"]=$this->cita->obtenerTodos();
    $this->load->view("citas/listado",$data);
  }
	public function eliminar($id_cit_aaa){
    $citaEliminado=$this->cita->obtenerPorId($id_cit_aaa);
    if ($this->cita->eliminarPorId($id_cit_aaa)){
      $this->session
      ->set_flashdata('confirmacion',
     'Cita eliminada exitosamente');

    } else {
      $this->session
      ->set_flashdata('error',
     'Error al eliminar, verifique e intente de nuevo');
    }
   redirect('citas/index/');
  }
	//fucnion para renderizar formulario de actualizacion
	public function actualizar($id){
	  $data["citaEditar"]=$this->cita->obtenerPorId($id);
	  $this->load->view("header");
	  $this->load->view("citas/actualizar",$data);
	  $this->load->view("footer");
	}

	public function procesarActualizacion(){
	  $id_cit_aaa=$this->input->post("id_cit_aaa");
	  $datosCitaEditado=array(
			"cedula_cit_aaa"=>$this->input->post("cedula_cit_aaa"),
			"nombre_cit_aaa"=>$this->input->post("nombre_cit_aaa"),
			"apellido_cit_aaa"=>$this->input->post("apellido_cit_aaa"),
			"email_cit_aaa"=>$this->input->post("email_cit_aaa"),
			"celular_cit_aaa"=>$this->input->post("celular_cit_aaa"),
			"provincia_cit_aaa"=>$this->input->post("provincia_cit_aaa"),
			"sucursal_cit_aaa"=>$this->input->post("sucursal_cit_aaa"),
			"fecha_cit_aaa"=>$this->input->post("fecha_cit_aaa"),
			"hora_cit_aaa"=>$this->input->post("hora_cit_aaa"),
	  );
	  if($this->cita->actualizar($id_cit_aaa,$datosCitaEditado)){
	      $this->session->set_flashdata('Confirmacion','Actualizado exitosamente.');
	    redirect('citas/index');
	  }else{
	    $this->session->set_flashdata('error',
	    'Error al actualizar, intente nuevamente.');
	        echo "<h1>ERROR</h1>";
	  }
	}
}//cierre de la clase
