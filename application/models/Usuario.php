<?php
   class Usuario extends CI_Model
   {
     function __construct()
     {
       parent::__construct();
       $this->load->model("usuario");
     }

     //Funcion que consulta todos los estudiantes de la bdd
     public function obtenerPorEmailPassword($email,$password){
        $this->db->where("email_usu_aaa",$email);
        $this->db->where("password_usu_aaa",$password);
        $usuario=$this->db->get("usuario");
        if ($usuario->num_rows()>0) {
          return $usuario->row();
        } else {
          return false;//cuando no hay datos
        }
     }
    

   }//Cierre de la clase (No borrar)