<?php

    class Cliente extends CI_Model{

        function __construct(){
            parent::__construct();
        }
        public function insertar($datos){
            return $this->db->insert("cliente",$datos);

        }
        //funcion de consulta de todos los clientes "Consultar Datos De Una Tabla"
        public function obtenerTodos(){
            $clientes=$this->db->get("cliente");
            if($clientes->num_rows()>0){
                return $clientes;
            }else{
                return false;
            }
        }
        //funcion para eliminar 
        public function eliminarPorId($id){
            $this->db->where("id_cli_aaa",$id);
            return $this->db->delete("cliente");
        }
        //consultando el cliente por su id 
        public function obtenerPorId($id){
            $this->db->where("id_cli_aaa",$id);
            $cliente=$this->db->get("cliente");
            if($cliente->num_rows()>0){
                return $cliente->row();
            }else{
                return false;
            }    
        }
        //proceso de actualizacion
        public function actualizar($id,$datos){
                $this->db->where("id_cli_aaa",$id);
                return $this->db->update("cliente",$datos);
            }

        public function eliminar($id)
        {
            $this->db->where('id_cli_aaa', $id);
            $this->db->delete('cliente');
            if ($this->db->affected_rows() > 0) {
            return true;
            } else {
            return false;
            }
        }

        
    }//cierre de la clase total

//?>