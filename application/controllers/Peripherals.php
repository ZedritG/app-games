<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peripherals extends CI_Controller {

	//funcion para llamar al modelo 
	public function __construct()
	{
		parent::__construct();
		$this->load->model("peripheral");
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('periferico/index');
		$this->load->view('footer');
	}

    public function nuevo()
	{
		$data["listadoPeriferico"]=$this->peripheral->obtenerTodos();
		$this->load->view('header');
		$this->load->view('periferico/nuevo', $data);
		$this->load->view('footer');
	}
//funncion para capturar los valores del nuevo formulario

	public function guardarPeriferico(){
        $datosNuevoPeriferico=array(
            "tipo_pf"=>$this->input->post('tipo_pf'),
            "compañia_pf"=>$this->input->post('compañia_pf'),
            "nombre_pf"=>$this->input->post('nombre_pf'),
            "tamaño_pf"=>$this->input->post('tamaño_pf'),
        );
        print_r($datosNuevoPeriferico);
        
        if ($this->peripheral->insertar($datosNuevoPeriferico)) {
            redirect('peripherals/index');
        } 
        else {
            echo "<h1>Error</h1>";
        }
        
    }
//Funcion para eliminar usuarios
    public function borrar($id_pf){
        if ($this->peripheral->eliminarPorId($id_pf)) {
            redirect('peripherals/index');
        
        } else {
            echo "Error al eliminar :(";
        }
    }
    //funcion para renderizar el formulario de eactualizacion
    public function editar($id){
        $data["perifericoEditar"]=$this->peripheral->obtenerPorId($id);
        $this->load->view("header");
        $this->load->view("periferico/editar",$data);
        $this->load->view("footer");
    }
    //funcion para editar al estudiante
    public function procesarActualizacion(){
        $datosPerifericoEditado=array(
            "tipo_pf"=>$this->input->post('tipo_pf'),
            "compañia_pf"=>$this->input->post('compañia_pf'),
            "nombre_pf"=>$this->input->post('nombre_pf'),
            "tamaño_pf"=>$this->input->post('tamaño_pf'),
        );

        //Capturar el id para los cambios en edicion
        $id=$this->input->post("id_pf");
        if ($this->peripheral->editar($id,$datosPerifericoEditado)) {
            redirect('peripherals/index');
        } 
        else {
            echo "<h1>Error</h1>";
        }
    }
}

