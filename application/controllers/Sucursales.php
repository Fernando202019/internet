<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sucursales extends CI_Controller {
	//definiendo el constructor de la clase
	public function __construct(){
		parent::__construct();
		$this->load->model("sucursal");
	}

  public function index(){
    $this->load->view("header");
    $this->load->view("sucursales/index");
    $this->load->view("footer");
  }

  public function guardar(){
    $datosSucursal=array(
      "provincia_suc_aaa"=>$this->input->post("provincia_suc_aaa"),
      "ciudad_suc_aaa"=>$this->input->post("ciudad_suc_aaa"),
      "estado_suc_aaa"=>$this->input->post("estado_suc_aaa"),
      "direccion_suc_aaa"=>$this->input->post("direccion_suc_aaa"),
      "email_suc_aaa"=>$this->input->post("email_suc_aaa"),
    );
    if($this->sucursal->insertar($datosSucursal)){
        $resultado=array(
            "estado"=>"ok",
            "mensaje"=>"sucursal insertado correctamente"
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
    $data["sucursales"]=$this->sucursal->obtenerTodos();
    $this->load->view("sucursales/listado",$data);
  }  


  //funcion para eliminar 
  public function eliminar($id_suc_aaa){
    $sucursalEliminado=$this->sucursal->obtenerPorId($id_suc_aaa);
    if ($this->sucursal->eliminarPorId($id_suc_aaa)){
      $this->session
      ->set_flashdata('confirmacion',
     'Configuracion eliminado exitosamente');
    
    } else {
      $this->session
      ->set_flashdata('error',
     'Error al eliminar, verifique e intente de nuevo');
    }
   redirect('sucursales/index/');
  }

}//cierre de la clase