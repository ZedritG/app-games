<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoices extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("game");//Se llama al modelo
        $this->load->model("tournament");
    }


	public function index(){
        $data["listadoGames"]=$this->game->obtenerTodos();
        $data["listadoTorneos"]=$this->tournament->obtenerTodos();
        $this->load->view("header");
        $this->load->view("factura/index", $data);
        $this->load->view("footer");

    }
}
