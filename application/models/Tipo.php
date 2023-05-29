<?php
   class Tipo extends CI_Model
   {
     function __construct()
     {
       parent::__construct();
     }
     public function insertar($datos){
       return $this->db->insert('tipo',$datos);
     }

     public function obtenerTodas(){
       $this->db->join("cliente",
       "cliente.id_cli_aaa=tipo.fk_id_cli_aaa");
       $this->db->join("plan",
       "plan.id_plan_aaa=tipo.fk_id_plan_aaa");
       $tipos=$this->db->get("tipo");
       if($tipos->num_rows()>0){
         return $tipos;
       }
       return false;
     }

     public function obtenerPorId($id){
       $this->db->join("cliente",
       "cliente.id_cli_aaa=tipo.fk_id_cli_aaa");
       $this->db->join("plan",
       "plan.id_plan_aaa=tipo.fk_id_plan_aaa");
       $this->db->where("id_tipo_aaa",$id);
       $tipo=$this->db->get("tipo");
       if($tipo->num_rows()>0){
         return $tipo->row();
       }
       return false;

     }


     public function actualizar($id_tipo_aaa,$datos){
       $this->db->where("id_tipo_aaa",$id_tipo_aaa);
       return $this->db->update('tipo',$datos);
     }


   }//Cierre de la clase