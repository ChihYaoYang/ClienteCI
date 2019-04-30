<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Venda extends CI_Controller {
    public function __construct() {
        //Chama o constructor da classe pai(CI_Controller)
        parent::__construct();
        //Chama método que faz a validação de login de usuario
        $this->load->model('Venda_model');
        $this->load->model('Usuario_model');
        $this->Usuario_model->verificaLogin();
    }
    public function listar() {
        $dados['vendas'] = $this->Venda_model->getAll();
        $this->load->view('ListaVendas' , $dados);
    }
}
?>