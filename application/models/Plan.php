<?php

    class Plan extends CI_Model{

        function __construct(){
            parent::__construct();
        }
        public function insertar($datos){
            return $this->db->insert("plan",$datos);

        }
        //funcion de consulta de todos los planes "Consultar Datos De Una Tabla"
        public function obtenerTodos(){
            $planes=$this->db->get("plan");
            if($planes->num_rows()>0){
                return $planes;
            }else{
                return false;
            }
        }
        //funcion para eliminar 
        public function eliminarPorId($id){
            $this->db->where("id_plan_aaa",$id);
            return $this->db->delete("plan");
        }
        //consultando el plan por su id 
        public function obtenerPorId($id){
            $this->db->where("id_plan_aaa",$id);
            $plan=$this->db->get("plan");
            if($plan->num_rows()>0){
                return $plan->row();
            }else{
                return false;
            }    
        }
        //proceso de actualizacion
        public function actualizar($id,$datos){
                $this->db->where("id_plan_aaa",$id);
                return $this->db->update("plan",$datos);
            }

        
    }//cierre de la clase total

//?>