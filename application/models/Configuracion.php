<?php
   class Configuracion extends CI_Model
   {
     function __construct()
     {
       parent::__construct();
     }
     public function insertar($datos){
        return $this->db->insert("configuracion",$datos);
     }

     //Funcion que consulta todos los proveedores de la bdd
     public function obtenerTodos(){
        $configuraciones=$this->db->get("configuracion");
        if ($configuraciones->num_rows()>0) {
          return $configuraciones;
        } else {
          return false;//cuando no hay datos
        }
     }
     //funcion para eliminar un proveedores se recibe el id
     public function eliminarPorId($id){
        $this->db->where("id_con_aaa ",$id);
        return $this->db->delete("configuracion");
     }
     //Consultando el proveedores por su id
     public function obtenerPorId($id){
        $this->db->where("id_con_aaa ",$id);
        $configuracion=$this->db->get("configuracion");
        if($configuracion->num_rows()>0){
          return $configuracion->row();//xq solo hay uno
        }else{
          return false;
        }
     }
     //Proceso de actualizacion de proveedores
     public function actualizar($id,$datos){
       $this->db->where("id_con_aaa",$id);
       return $this->db->update("configuracion",$datos);
     }
 
   }//Cierre de la clase (No borrar)

