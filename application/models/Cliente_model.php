<?php

/*
 *  Classe model da tabela clientes do DB
 *  @author Yang
 */

//Todo model precisa extends a classe CI_Model do framework
class Cliente_model extends CI_Model {

    //Método que realiza a busca de todos os clientes no DB
    public function getAll() {
        //Nome da tabela no DB
        $query = $this->db->get('cliente');
        //result já nos retorna em formato de array 
        return $query->result();
    }

    //Insere
    public function insert($data = array()) {
        $this->db->insert('cliente', $data);
        return $this->db->affected_rows();
    }

    //Update GET_ID
    //Método que recebe um id por parametro e busca apenas o cliente com este id la no DB
    public function getOne($id) {
        //faz o filtro por id na consulta SQL
        $this->db->where('id', $id);
        //busca o cliente na base respeitando o filtro
        $query = $this->db->get('cliente');
        //retorna apenas a primeira linha
        return $query->row(0);
    }

    //Update
    //Método que recebe o id do cliente a alterar
    //e os dados para alterar e faz o update na DB
    public function update($id, $data = array()) {
        if ($id > 0) {
            //filtra o cliente que será alterado
            $this->db->where('id', $id);
            //alterar os dados de acordo com o recebido por parametro
            $this->db->update('cliente', $data);
            //retorno do numero de linhas afectadas
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

    //Delete
    public function delete($id) {
        if ($id > 0) {
             //filtra o cliente que será deletado
            $this->db->where('id', $id);
            //Deletar
            $this->db->delete('cliente');
            //retorno do numero de linhas afectadas
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }
}
?>