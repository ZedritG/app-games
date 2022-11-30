<?php

    class invoice extends  CI_Model{
        function __construct()
        {
            parent::__construct();
        }
    public function insertar($datos)
    {
        return $this->db->insert("facturas",$datos);
    }
    //Funcion que consulta todos los estudiantes de la base de datos
    public function obtenerTodos(){
        $facturas=$this->db->get("facturas");
        if ($facturas->num_rows()>0) {
            return $facturas;
        } else {
            return false; //cuando no existen datos
        }
        
    }
    //funcion para eliminar a un estudiante mediante su id
    public function eliminarPorId($id){
        $this->db->where("id_ft", $id);
        return $this->db->delete("facturas");
    }
     //Consultando al usuario por su id
     public function obtenerPorId($id){

        $this->db->where("id_ft",$id);
        $facturas=$this->db->get("facturas");
        if ($facturas->num_rows()>0) {
            return $facturas->row();// Por que solo existe un estudiante, debido a que el id no se puede repetir
        } else {
            return false;
        }
        
    } 
    //Proceso de actualizacion del usuario
    public function editar($id,$datos){
        $this->db->where("id_ft",$id);
        return $this->db->update("facturas",$datos);//union del elminar e insertar para la creacion de esta funcion

    }

    }//Cierre de clases no borrar
