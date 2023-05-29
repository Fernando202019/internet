<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proveedores extends CI_Controller {
	//definiendo el constructor de la clase
	public function __construct(){
		parent::__construct();
		$this->load->model("proveedor");
	}

  public function index(){
    $this->load->view("header");
    $this->load->view("proveedores/index");
    $this->load->view("footer");
  }

  public function guardar(){
    $datosProveedor=array(
      "cedula_pro_aaa"=>$this->input->post("cedula_pro_aaa"),
      "nombre_pro_aaa"=>$this->input->post("nombre_pro_aaa"),
      "apellido_pro_aaa"=>$this->input->post("apellido_pro_aaa"),
      "email_pro_aaa"=>$this->input->post("email_pro_aaa"),
      "direccion_pro_aaa"=>$this->input->post("direccion_pro_aaa"),
      "telefono_pro_aaa"=>$this->input->post("telefono_pro_aaa"),
    );
    if($this->proveedor->insertar($datosProveedor)){
        $resultado=array(
            "estado"=>"ok",
            "mensaje"=>"Proveedor insertado correctamente"
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
    $data["proveedores"]=$this->proveedor->obtenerTodos();
    $this->load->view("proveedores/listado",$data);
  } 

  //fucnion para renderizar formulario de actualizacion
	public function actualizar($id){
    $data["proveedorEditar"]=$this->proveedor->obtenerPorId($id);
    $this->load->view("header");
    $this->load->view("proveedores/actualizar",$data);
    $this->load->view("footer");	
}	

  //funcion para eliminar 
  public function eliminar($id_pro_aaa){
    $proveedorEliminado=$this->proveedor->obtenerPorId($id_pro_aaa);
    if ($this->proveedor->eliminarPorId($id_pro_aaa)){
      $this->session
      ->set_flashdata('confirmacion',
     'Proveedor eliminado exitosamente');
    
    } else {
      $this->session
      ->set_flashdata('error',
     'Error al eliminar, verifique e intente de nuevo');
    }
   redirect('proveedores/index/');
  }

  public function eliminarProveedor($id)
  {
    if ($this->proveedor->eliminarProveedor($id)) {
      $response = array(
        'status' => 'success',
        'message' => 'Proveedor eliminado correctamente'
      );
    } else {
      $response = array(
        'status' => 'error',
        'message' => 'Error al eliminar el proveedor'
      );
    }
    echo json_encode($response);
  }

  //funcion para actualizar al estudiante del apartado de guardar
	public function procesarActualizacion(){
		error_reporting(0);
		$datosProveedorEditado=array(
			'cedula_pro_aaa' => $this->input->post('cedula_pro_aaa'),
      'nombre_pro_aaa' => $this->input->post('nombre_pro_aaa'),
      'apellido_pro_aaa' => $this->input->post('apellido_pro_aaa'),
      'email_pro_aaa' => $this->input->post('email_pro_aaa'),
      'direccion_pro_aaa' => $this->input->post('direccion_pro_aaa'),
      'telefono_pro_aaa	' => $this->input->post('telefono_pro_aaa	'),
    );
		$id=$this->input->post("id_pro_aaa");
		if($this->proveedor->actualizar($id,$datosProveedorEditado)){
			redirect('proveedores/index');
		}else{
			echo "<h1> ERROR </h1>";
		}
	}

}//cierre de la clase