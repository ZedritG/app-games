<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Workers extends CI_Controller {

//funcion para llamar al modelo 
	public function __construct()
	{
		parent::__construct();
		$this->load->model("worker");
	}
	public function index()
	{
		$this->load->view('header');
		$this->load->view('worker/index');
		$this->load->view('footer');
	}
    public function nuevo()
	{
		$data["listadoTrabajador"]=$this->worker->obtenerTodos();
		$this->load->view('header');
		$this->load->view('worker/nuevo', $data);
		$this->load->view('footer');
	}

//funncion para capturar los valores del nuevo formulario

	public function guardarTrabajador(){
        $datosNuevoTrabajador=array(
            "nombre_tb"=>$this->input->post('nombre_tb'),
            "apellido_tb"=>$this->input->post('apellido_tb'),
            "email_tb"=>$this->input->post('email_tb'),
            "cedula_tb"=>$this->input->post('cedula_tb'),
			"horas_tb"=>$this->input->post('horas_tb'),
        );
        print_r($datosNuevoTrabajador);
        
        if ($this->worker->insertar($datosNuevoTrabajador)) {
            redirect('workers/index');
        } 
        else {
            echo "<h1>Error</h1>";
        }
        
    }
//Funcion para eliminar usuarios
    public function borrar($id_tb){
        if ($this->worker->eliminarPorId($id_tb)) {
            redirect('workers/index');
        
        } else {
            echo "Error al eliminar :(";
        }
    }
    //funcion para renderizar el formulario de eactualizacion
    public function editar($id){
        $data["trabajadorEditar"]=$this->worker->obtenerPorId($id);
        $this->load->view("header");
        $this->load->view("worker/editar",$data);
        $this->load->view("footer");
    }
    //funcion para editar al estudiante
    public function procesarActualizacion(){
        $datosTrabajadorEditado=array(
            "nombre_tb"=>$this->input->post('nombre_tb'),
            "apellido_tb"=>$this->input->post('apellido_tb'),
            "email_tb"=>$this->input->post('email_tb'),
            "cedula_tb"=>$this->input->post('cedula_tb'),
			"horas_tb"=>$this->input->post('horas_tb'),
        );

        //Capturar el id para los cambios en edicion
        $id=$this->input->post("id_tb");
        if ($this->worker->editar($id,$datosTrabajadorEditado)) {
            redirect('workers/index');
        } 
        else {
            echo "<h1>Error</h1>";
        }
    }
}

