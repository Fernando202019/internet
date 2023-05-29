<?php
   class Vendedor extends CI_Model
   {
     function __construct()
     {
       parent::__construct();
     }
     public function insertar($datos){
        return $this->db->insert("vendedor",$datos);
     }
     //Funcion que consulta todos los profesores de la bdd
     public function obtenerTodos(){
        $vendedores=$this->db->get("vendedor");
        if ($vendedores->num_rows()>0) {
          return $vendedores;
        } else {
          return false;//cuando no hay datos
        }
     }
     
     //funcion para eliminar un profesor se recibe el id
     public function eliminarPorId($id){
        $this->db->where("id_ven_aaa",$id);
        return $this->db->delete("vendedor");
     }
     //Consultando el profesor por su id
     public function obtenerPorId($id){
        $this->db->where("id_ven_aaa",$id);
        $vendedor=$this->db->get("vendedor");
        if($vendedor->num_rows()>0){
          return $vendedor->row();//xq solo hay uno
        }else{
          return false;
        }
     }
     //Proceso de actualizacion de profesores
     public function actualizar($id,$datos){
       $this->db->where("id_ven_aaa",$id);
       return $this->db->update("vendedor",$datos);
     }

   }//Cierre de la clase (No borrar)