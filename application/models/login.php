<?php

    class login extends  CI_Model{
        function __construct()
        {
            parent::__construct();
        }
    public function insertar($datos)
    {
        return $this->db->insert("login1",$datos);
    }
    //Funcion que consulta todos los estudiantes de la base de datos
    public function obtenerTodos(){
        $login1=$this->db->get("login1");
        if ($login1->num_rows()>0) {
            return $login1;
        } else {
            return false; //cuando no existen datos
        }
        
    }
    //funcion para eliminar a un estudiante mediante su id
    public function eliminarPorId($id){
        $this->db->where("id_lg", $id);
        return $this->db->delete("login1");
    }
     //Consultando al usuario por su id
     public function obtenerPorId($id){

        $this->db->where("id_lg",$id);
        $login1=$this->db->get("login1");
        if ($login1->num_rows()>0) {
            return $login1->row();// Por que solo existe un estudiante, debido a que el id no se puede repetir
        } else {
            return false;
        }
        
    } 
    //Proceso de actualizacion del usuario
    public function editar($id,$datos){
        $this->db->where("id_lg",$id);
        return $this->db->update("login1",$datos);//union del elminar e insertar para la creacion de esta funcion

    }

    }//Cierre de clases no borrar
