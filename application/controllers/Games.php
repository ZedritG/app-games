<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Games extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model("game");
    }

    //renderiza vista estudiantes
	public function index()
	{
		$this->load->view('header');
		$this->load->view('game/index');
		$this->load->view('footer');
	}

    public function nuevo()
	{
        $data["listadoGames"]=$this->game->obtenerTodos();
		$this->load->view('header');
		$this->load->view('game/nuevo', $data);
		$this->load->view('footer');
	}


    //funncion para capturar los valores del nuevo formulario
    public function guardarLista(){
        $datosNuevoListado=array(
            "nombre_lt"=>$this->input->post('nombre_lt'),
            "compañia_lt"=>$this->input->post('compañia_lt'),
            "años_lt"=>$this->input->post('años_lt'),
            "precio_lt"=>$this->input->post('precio_lt'),
        );
        print_r($datosNuevoListado);
        
        if ($this->game->insertar($datosNuevoListado)) {
            redirect('games/index');
        } 
        else {
            echo "<h1>Error</h1>";
        }
        
    }

    //Funcion para eliminar estudiantes
    public function borrar($id_lt){
        if ($this->game->eliminarPorId($id_lt)) {
            redirect('games/index');
        
        } else {
            echo "Error al eliminar :(";
        }    

    }
    //funcion para renderizar el formulario de eactualizacion
    
    public function editar($id){
        $data["listaEditar"]=$this->game->obtenerPorId($id);
        $this->load->view("header");
        $this->load->view("game/editar",$data);
        $this->load->view("footer");
    }
    //funcion para editar al estudiante
    public function procesarActualizacion(){
        $datosGamesEditado=array(
            "nombre_lt"=>$this->input->post('nombre_lt'),
            "compañia_lt"=>$this->input->post('compañia_lt'),
            "años_lt"=>$this->input->post('años_lt'),
            "precio_lt"=>$this->input->post('precio_lt'),
        );

        //Capturar el id para los cambios en edicion
        $id=$this->input->post("id_lt");
        if ($this->game->editar($id,$datosGamesEditado)) {
            redirect('games/index');
        } 
        else {
            echo "<h1>Error</h1>";
        }
    }
}
