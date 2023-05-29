<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendedores extends CI_Controller {
	//definiendo el constructor de la clase
	public function __construct(){
		parent::__construct();
		$this->load->model("vendedor");
	}

  public function index(){
    $this->load->view("header");
    $this->load->view("vendedores/index");
    $this->load->view("footer");
  }

  public function guardar(){
    $datosVendedor=array(
        "nombre_ven_aaa"=>$this->input->post("nombre_ven_aaa"),
        "cedula_ven_aaa"=>$this->input->post("cedula_ven_aaa"),
        "correo_ven_aaa"=>$this->input->post("correo_ven_aaa"),
        "telefono_ven_aaa"=>$this->input->post("telefono_ven_aaa"),

    );
    if($this->vendedor->insertar($datosVendedor)){
        $resultado=array(
            "estado"=>"ok",
            "mensaje"=>"Vendedor insertado correctamente"
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
      $data["vendedores"]=$this->vendedor->obtenerTodos();
      $this->load->view("vendedores/listado",$data);

  }

  //funcion para eliminar 
  public function eliminar($id_ven_aaa){
    $vendedorEliminado=$this->vendedor->obtenerPorId($id_ven_aaa);
    if ($this->vendedor->eliminarPorId($id_ven_aaa)){
      $this->session
      ->set_flashdata('confirmacion',
     'Vendedor eliminado exitosamente');
    
    } else {
      $this->session
      ->set_flashdata('error',
     'Error al eliminar, verifique e intente de nuevo');
    }
   redirect('vendedores/index/');
  }

//fucnion para renderizar formulario de actualizacion
public function actualizar($id){
  $data["vendedorEditar"]=$this->vendedor->obtenerPorId($id);
  $this->load->view("header");
  $this->load->view("vendedores/actualizar",$data);
  $this->load->view("footer");	
}

public function procesarActualizacion(){
  $id_ven_aaa=$this->input->post("id_ven_aaa");
  $datosVendedorEditado=array(
    "nombre_ven_aaa"=>$this->input->post("nombre_ven_aaa"),
    "cedula_ven_aaa"=>$this->input->post("cedula_ven_aaa"),
    "correo_ven_aaa"=>$this->input->post("apellido_cov_int"),
    "telefono_ven_aaa"=>$this->input->post("telefono_ven_aaa"),
  );
  if($this->vendedor->actualizar($id_ven_aaa,$datosVendedorEditado)){
      $this->session->set_flashdata('Confirmacion','Actualizado exitosamente.');
    redirect('vendedores/index');
  }else{
    $this->session->set_flashdata('error',
    'Error al actualizar, intente nuevamente.');
        echo "<h1>ERROR</h1>";
  }
}


}//cierre de la clase