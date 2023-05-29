<?php
   class Proveedor extends CI_Model
   {
     function __construct()
     {
       parent::__construct();
     }
     public function insertar($datos){
        return $this->db->insert("proveedor",$datos);
     }

     //Funcion que consulta todos los proveedores de la bdd
     public function obtenerTodos(){
        $proveedores=$this->db->get("proveedor");
        if ($proveedores->num_rows()>0) {
          return $proveedores;
        } else {
          return false;//cuando no hay datos
        }
     }
     //funcion para eliminar un proveedores se recibe el id
     public function eliminarPorId($id){
        $this->db->where("id_pro_aaa",$id);
        return $this->db->delete("proveedor");
     }
     //Consultando el proveedores por su id
     public function obtenerPorId($id){
        $this->db->where("id_pro_aaa",$id);
        $proveedor=$this->db->get("proveedor");
        if($proveedor->num_rows()>0){
          return $proveedor->row();//xq solo hay uno
        }else{
          return false;
        }
     }
     //Proceso de actualizacion de proveedores
     public function actualizar($id,$datos){
       $this->db->where("id_pro_aaa",$id);
       return $this->db->update("proveedor",$datos);
     }

     public function eliminarProveedor($id)
  {
    $this->db->where('id_pro_aaa', $id);
    $this->db->delete('proveedor');
    if ($this->db->affected_rows() > 0) {
      return true;
    } else {
      return false;
    }
  }

  public function editarProveedor($id, $data)
  {
    $this->db->where('id_pro_aaa', $id);
    $this->db->update('proveedor', $data);
    if ($this->db->affected_rows() > 0) {
      return true;
    } else {
      return false;
    }
  }

   }//Cierre de la clase (No borrar)