<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tournaments extends CI_Controller {

	//funcion para llamar al modelo 
	public function __construct()
	{
		parent::__construct();
		$this->load->model("tournament");
	}

	public function index()
	{
        $data["listadoTorneos"]=$this->tournament->obtenerTodos();
		$this->load->view('header');
		$this->load->view('torneo/index');
		$this->load->view('footer');
	}

    public function nuevo()
	{
		$data["listadoTorneo"]=$this->tournament->obtenerTodos();
		$this->load->view('header');
		$this->load->view('torneo/nuevo', $data);
		$this->load->view('footer');
	}

//funncion para capturar los valores del nuevo formulario

	public function guardarTorneo(){
        $nombre1 = $this->input->post('nombres_grupo_tn1');
            $nombre2 = $this->input->post('nombres_grupo_tn2');
            $nombre3 = $this->input->post('nombres_grupo_tn3');
            $nombre4 = $this->input->post('nombres_grupo_tn4');
        $datosNuevoTorneo=array(
            "nombre_equipo_tn"=>$this->input->post('nombre_equipo_tn'),
            "nombres_grupo_tn"=>$nombre1 . ', ' . $nombre2 . ', '.  $nombre3 .', '. $nombre4,
            "email_tn"=>$this->input->post('email_tn')
        );
        if ($this->tournament->insertar($datosNuevoTorneo)) {
            redirect('tournaments/index');
        } 
        else {
            echo "<h1>Error</h1>";
        }        
        
        
    }
//Funcion para eliminar usuarios
    public function borrar($id_tn){
        if ($this->tournament->eliminarPorId($id_tn)) {
            redirect('tournaments/index');
        
        } else {
            echo "Error al eliminar :(";
        }
    }
    //funcion para renderizar el formulario de eactualizacion
    public function editar($id){
        $data["torneoEditar"]=$this->tournament->obtenerPorId($id);
        $this->load->view("header");
        $this->load->view("torneo/editar",$data);
        $this->load->view("footer");
    }
    //funcion para editar al estudiante
    public function procesarActualizacion(){
        $datosTorneoEditado=array(
			"nombre_equipo_tn"=>$this->input->post('nombre_equipo_tn'),
            "nombres_grupo_tn"=>$this->input->post('nombres_grupo_tn'),
            "email_tn"=>$this->input->post('email_tn'),
        );

        //Capturar el id para los cambios en edicion
        $id=$this->input->post("id_tn");
        if ($this->tournament->editar($id,$datosTorneoEditado)) {
            redirect('tournaments/index');
        } 
        else {
            echo "<h1>Error</h1>";
        }
    }
}
