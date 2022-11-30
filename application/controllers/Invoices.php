<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoices extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("game");//Se llama al modelo
        $this->load->model("tournament");
        $this->load->model("invoice");
    }


	public function index(){
        $data["listadoGames"]=$this->game->obtenerTodos();
        $data["listadoTorneos"]=$this->tournament->obtenerTodos();
        $this->load->view("header");
        $this->load->view("factura/index", $data);
        $this->load->view("footer");

    }
    public function guardarFactura(){
        $datosNuevoFactura=array(
            "fecha_ft"=>$this->input->post('fecha_ft'),
        );
        print_r($datosNuevoFactura);
        
        if ($this->invoice->insertar($datosNuevoFactura)) {
            redirect('invoices/index');
        } 
        else {
            echo "<h1>Error</h1>";
        }
        
    }   
}
