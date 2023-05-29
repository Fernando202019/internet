<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Equipos extends CI_Controller {
	//definiendo el constructor de la clase
	public function __construct(){
		parent::__construct();
		$this->load->model("equipo");
	}

  public function index(){
    $this->load->view("header");
    $this->load->view("equipos/index");
    $this->load->view("footer");
  }

  public function guardar(){
    $datosEquipo=array(
        "nombre_equi_aaa"=>$this->input->post("nombre_equi_aaa"),
        "precio_equi_aaa"=>$this->input->post("precio_equi_aaa"),
        "descripcion_equi_aaa"=>$this->input->post("descripcion_equi_aaa"),
    );
    if($this->equipo->insertar($datosEquipo)){
        $resultado=array(
            "estado"=>"ok",
            "mensaje"=>"equipo insertado correctamente"
        );
    }else{
        $resultado=array(
            "estado"=>"error"
        );
    }
    echo json_encode($resultado);
    }
    
    //funcion para consultar los profesores en formato json
    public function listado(){
      $data["equipos"]=$this->equipo->obtenerTodos();
      $this->load->view("equipos/listado",$data);
  }

   //funcion para eliminar 
   public function eliminar($id_equi_aaa){
    $equipoEliminado=$this->equipo->obtenerPorId($id_equi_aaa);
    if ($this->equipo->eliminarPorId($id_equi_aaa)){
      $this->session
      ->set_flashdata('confirmacion',
     'Equipo Eliminado Exitosamente');
    
    } else {
      $this->session
      ->set_flashdata('error',
     'Error al ELIMINAR, verifique e intente de nuevo');
    }
   redirect('equipos/index/');
  }

  //fucnion para renderizar formulario de actualizacion
public function actualizar($id){
  $data["equipoEditar"]=$this->equipo->obtenerPorId($id);
  $this->load->view("header");
  $this->load->view("equipos/actualizar",$data);
  $this->load->view("footer");	
}

public function procesarActualizacion(){
  $id_equi_aaa=$this->input->post("id_equi_aaa");
  $datosEquipoEditado=array(
    "nombre_equi_aaa"=>$this->input->post("nombre_equi_aaa"),
    "precio_equi_aaa"=>$this->input->post("precio_equi_aaa"),
    "descripcion_equi_aaa"=>$this->input->post("descripcion_equi_aaa"),
  );
  if($this->equipo->actualizar($id_equi_aaa,$datosEquipoEditado)){
      $this->session->set_flashdata('Confirmacion','Actualizado exitosamente.');
    redirect('equipos/index');
  }else{
    $this->session->set_flashdata('error',
    'Error al actualizar, intente nuevamente.');
        echo "<h1>ERROR</h1>";
  }
}


}//cierre de la clase