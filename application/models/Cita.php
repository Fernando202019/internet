<?php
   class Cita extends CI_Model
   {
     function __construct()
     {
       parent::__construct();
     }
     public function insertar($datos){
        return $this->db->insert("cita",$datos);
     }

     //Funcion que consulta todos los proveedores de la bdd
     public function obtenerTodos(){
        $citas=$this->db->get("cita");
        if ($citas->num_rows()>0) {
          return $citas;
        } else {
          return false;//cuando no hay datos
        }
     }
     //funcion para eliminar un proveedores se recibe el id
     public function eliminarPorId($id){
        $this->db->where("id_cit_aaa",$id);
        return $this->db->delete("cita");
     }
     //Consultando el proveedores por su id
     public function obtenerPorId($id){
        $this->db->where("id_cit_aaa",$id);
        $cita=$this->db->get("cita");
        if($cita->num_rows()>0){
          return $cita->row();//xq solo hay uno
        }else{
          return false;
        }
     }
     //Proceso de actualizacion de proveedores
     public function actualizar($id,$datos){
       $this->db->where("id_cit_aaa",$id);
       return $this->db->update("cita",$datos);
     }

   }//Cierre de la clase (No borrar)
