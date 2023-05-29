<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configuraciones extends CI_Controller {
	//definiendo el constructor de la clase
	public function __construct(){
		parent::__construct();
		$this->load->model("configuracion");
	}

  public function index(){
    $this->load->view("header");
    $this->load->view("configuraciones/index");
    $this->load->view("footer");
  }

  public function guardar(){
    $datosConfiguracion=array(
      "nombrempre_con_aaa"=>$this->input->post("nombrempre_con_aaa"),
      "ruc_con_aaa"=>$this->input->post("ruc_con_aaa"),
      "telefono_con_aaa"=>$this->input->post("telefono_con_aaa"),
      "direccion_con_aaa"=>$this->input->post("direccion_con_aaa"),
      "representante_con_aaa"=>$this->input->post("representante_con_aaa"),
    );
    if($this->configuracion->insertar($datosConfiguracion)){
        $resultado=array(
            "estado"=>"ok",
            "mensaje"=>"configuracion insertado correctamente"
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
    $data["configuraciones"]=$this->configuracion->obtenerTodos();
    $this->load->view("configuraciones/listado",$data);
  }  

  //funcion para eliminar 
  public function eliminar($id_con_aaa){
    $configuracionEliminado=$this->configuracion->obtenerPorId($id_con_aaa);
    if ($this->configuracion->eliminarPorId($id_con_aaa)){
      $this->session
      ->set_flashdata('confirmacion',
     'Configuracion eliminado exitosamente');
    
    } else {
      $this->session
      ->set_flashdata('error',
     'Error al eliminar, verifique e intente de nuevo');
    }
   redirect('configuraciones/index/');
  }



}//cierre de la clase