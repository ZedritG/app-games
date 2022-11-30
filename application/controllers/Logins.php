<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logins extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("login");
    }
//se renderiza la vista
	public function index()
	{
		$this->load->view('header');
		$this->load->view('login/index');
		$this->load->view('footer');
	}

    public function nuevo()
	{
		$data["listadoLogin"]=$this->login->obtenerTodos();
		$this->load->view('header');
		$this->load->view('login/nuevo', $data);
		$this->load->view('footer');
	}
//funncion para capturar los valores del nuevo formulario

	 public function guardarLogin(){
        $datosNuevoLogin=array(
            "nombre_lg"=>$this->input->post('nombre_lg'),
            "apellido_lg"=>$this->input->post('apellido_lg'),
            "email_lg"=>$this->input->post('email_lg'),
            "contraseña_lg"=>$this->input->post('contraseña_lg'),
        );
        print_r($datosNuevoLogin);
        
        if ($this->login->insertar($datosNuevoLogin)) {
            redirect('logins/index');
        } 
        else {
            echo "<h1>Error</h1>";
        }
        
    }
//Funcion para eliminar usuarios
    public function borrar($id_lg){
        if ($this->login->eliminarPorId($id_lg)) {
            redirect('logins/index');
        
        } else {
            echo "Error al eliminar :(";
        }
    }
    //funcion para renderizar el formulario de eactualizacion
    public function editar($id){
        $data["loginEditar"]=$this->login->obtenerPorId($id);
        $this->load->view("header");
        $this->load->view("login/editar",$data);
        $this->load->view("footer");
    }
    //funcion para editar al estudiante
    public function procesarActualizacion(){
        $datosLoginEditado=array(
            "nombre_lg"=>$this->input->post('nombre_lg'),
            "apellido_lg"=>$this->input->post('apellido_lg'),
            "email_lg"=>$this->input->post('email_lg'),
            "contraseña_lg"=>$this->input->post('contraseña_lg'),
        );

        //Capturar el id para los cambios en edicion
        $id=$this->input->post("id_lg");
        if ($this->login->editar($id,$datosLoginEditado)) {
            redirect('logins/index');
        } 
        else {
            echo "<h1>Error</h1>";
        }
    }
}
