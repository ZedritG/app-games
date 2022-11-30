<?php

    class worker extends  CI_Model{
    function __construct()
    {
            parent::__construct();
    }
//Insercion de datos
    public function insertar($datos)
    {
        return $this->db->insert("trabajadores1",$datos);
    }
    //Funcion que consulta todos los estudiantes de la base de datos
    public function obtenerTodos(){
        $trabajadores1=$this->db->get("trabajadores1");
        if ($trabajadores1->num_rows()>0) {
            return $trabajadores1;
        } else {
            return false; //cuando no existen datos
        }
        
    }
    //funcion para eliminar a un estudiante mediante su id
    public function eliminarPorId($id){
        $this->db->where("id_tb", $id);
        return $this->db->delete("trabajadores1");
    }
     //Consultando al usuario por su id
     public function obtenerPorId($id){

        $this->db->where("id_tb",$id);
        $trabajadores1=$this->db->get("trabajadores1");
        if ($trabajadores1->num_rows()>0) {
            return $trabajadores1->row();// Por que solo existe un estudiante, debido a que el id no se puede repetir
        } else {
            return false;
        }
        
    } 
    //Proceso de actualizacion del usuario
    public function editar($id,$datos){
        $this->db->where("id_tb",$id);
        return $this->db->update("trabajadores1",$datos);//union del elminar e insertar para la creacion de esta funcion

    }

    }//Cierre de clases no borrar
