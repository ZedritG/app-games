<?php

    class game extends  CI_Model{
        function __construct()
        {
            parent::__construct();
        }
    public function insertar($datos)
    {
        return $this->db->insert("lista1",$datos);
    }
    //Funcion que consulta todos los estudiantes de la base de datos
    public function obtenerTodos(){
        $lista1=$this->db->get("lista1");
        if ($lista1->num_rows()>0) {
            return $lista1;
        } else {
            return false; //cuando no existen datos
        }
        
    }
    //funcion para eliminar a un estudiante mediante su id
    public function eliminarPorId($id){
        $this->db->where("id_lt", $id);
        return $this->db->delete("lista1");
    }
    //Consultando al estudainte por su id
    public function obtenerPorId($id){
        $this->db->where("id_lt",$id);
        $lista1=$this->db->get("lista1");
        if ($lista1->num_rows()>0) {
            return $lista1->row();// Por que solo existe un estudiante, debido a que el id no se puede repetir
        } else {
            return false;
        }
        
    } 
    //Proceso de actualizacion del estudiante
    public function editar($id,$datos){
        $this->db->where("id_lt",$id);
        return $this->db->update("lista1",$datos);//union del elminar e insertar para la creacion de esta funcion

    }

}//Cierre de clases no borrar

