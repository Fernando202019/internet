<?php
   class Equipo extends CI_Model
   {
     function __construct()
     {
       parent::__construct();
     }
     public function insertar($datos){
        return $this->db->insert("equipo",$datos);
     }
     //Funcion que consulta todos los profesores de la bdd
     public function obtenerTodos(){
        $equipos=$this->db->get("equipo");
        if ($equipos->num_rows()>0) {
          return $equipos;
        } else {
          return false;//cuando no hay datos
        }
     }
     
     //funcion para eliminar un profesor se recibe el id
     public function eliminarPorId($id){
        $this->db->where("id_equi_aaa",$id);
        return $this->db->delete("equipo");
     }
     //Consultando el profesor por su id
     public function obtenerPorId($id){
        $this->db->where("id_equi_aaa",$id);
        $equipo=$this->db->get("equipo");
        if($equipo->num_rows()>0){
          return $equipo->row();//xq solo hay uno
        }else{
          return false;
        }
     }
     //Proceso de actualizacion de profesores
     public function actualizar($id,$datos){
       $this->db->where("id_equi_aaa",$id);
       return $this->db->update("equipo",$datos);
     }

   }//Cierre de la clase (No borrar)