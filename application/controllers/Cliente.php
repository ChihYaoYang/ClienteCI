<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//Todo controller do codeigniter precisa extender(ser filho) da classe CI_Controller
class Cliente extends CI_Controller {
    //Método constructor que é chamado sempre que a classe Cliente for usada, ou seja, "Instanciada"
    public function __construct() {
        //Chama o constructor da classe pai(CI_Controller)
        parent::__construct();
        //Chama método que faz a validação de login de usuario
        $this->load->model('Usuario_model');
        $this->Usuario_model->verificaLogin();
    }
    //o método index é o método chamado por padrão 
    //quando nenhum método é definido na URL da requisição
    public function index() {
        $this->listar();
    }

    //Read
    public function listar() {
        //Carrega Menu
        $this->load->view('includes/header');
        //Carregar o model pelo nome      - apelido
        $this->load->model('Cliente_model', 'cm');
        //$data precisa ser em formato de array para ser passada para a view
        //Chamamos o método getAll do Cliente_Model
        $data['clientes'] = $this->cm->getAll();
        //Carrega a view passando o conteúdo da 
        //variável $data
        $this->load->view('ListaCliente', $data);
        //Carrega rodapé
        $this->load->view('includes/footer');
    }

    //Create
    public function cadastrar() {
        //Carrega Menu
        $this->load->view('includes/header');
        //Cria as regras de validação do formulário
        $this->form_validation->set_rules('nome', 'nome', 'required');
        $this->form_validation->set_rules('rg', 'rg', 'required');
        $this->form_validation->set_rules('cpf', 'cpf', 'required');
        //Valida se todos os requisitos do form foram atendidos
        if ($this->form_validation->run() == false) {
            //caso não tenha passado na validação, carrega o formulário
            $this->load->view('FormCliente');
        } else {
            //Carrega o model
            $this->load->model('Cliente_model');
            //Resgata os dados por POST
            $data = array(
                'nome' => $this->input->post('nome'),
                'rg' => $this->input->post('rg'),
                'cpf' => $this->input->post('cpf')
            );
            //chama o método insert do Model passando os dados
            //a inserir, e ja valida se teve linhas afectadas
            if ($this->Cliente_model->insert($data)) {
                //salva uma mensagem na sessão
                $this->session->set_flashdata('mensagem', 'Cliente cadastrado com sucesso! ! !');
                redirect('Cliente/listar');
            } else {
                //salva uma mensagem na sessão
                $this->session->set_flashdata('erro', 'Erro ao cadastrar Cliente *_*');
                redirect('Cliente/cadastrar');
            }
        }
       //Carrega rodapé
       $this->load->view('includes/footer');
    }

    //Update
    public function alterar($id) {
        //Carrega Menu
        $this->load->view('includes/header');
        if ($id > 0) {
            $this->load->model('Cliente_model');
            //Cria as regras de validação do formulário
            $this->form_validation->set_rules('nome', 'nome', 'required');
            $this->form_validation->set_rules('rg', 'rg', 'required');
            $this->form_validation->set_rules('cpf', 'cpf', 'required');
            //valida se o formulario ja foi preenchido
            if ($this->form_validation->run() == false) {
                //monta a variável data para mandar dados para a view
                //e chama o método getOne do cliente model
                //para resgatar os dados do Cliente a ser alterado
                $data['cliente'] = $this->Cliente_model->getOne($id);

                $this->load->view('FormCliente', $data);
            } else {
                //Resgata os dados por POST
                $data = array(
                    'nome' => $this->input->post('nome'),
                    'rg' => $this->input->post('rg'),
                    'cpf' => $this->input->post('cpf')
                );
                //Chama o método update do cliente model 
                //e ja valida se teve linhas afectadas
                if ($this->Cliente_model->update($id, $data)) {
                    $this->session->set_flashdata('mensagem', 'Cliente alterado com sucesso ! ! !');
                    redirect('Cliente/listar');
                } else {
                    $this->session->set_flashdata('erro', 'Falha ao alterar Cliente *_*');
                    redirect('Cliente/alterar/' . $id);
                }
            }
        } else {
            redirect('Cliente/listar');
        }
        //Carrega rodapé
        $this->load->view('includes/footer');
    }

    //Delete
    public function deletar($id) {
        if ($id > 0) {
            //Carrega model
            $this->load->model('Cliente_model');
            //manda para o model deletar e ja valida o retorno para saber se deu certo
            if ($this->Cliente_model->delete($id)) {
                $this->session->set_flashdata('mensagem', 'Cliente deletado com sucesso ! ! !');
            } else {
                $this->session->set_flashdata('erro', 'Falha ao deletar Cliente *_*');
            }
        }
        redirect('Cliente/listar');
    }
}