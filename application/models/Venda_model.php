<?php
/*
 *  Classe model da tabela clientes do DB
 *  @author Yang
 */
//Todo model precisa extends a classe CI_Model do framework
class Venda_model extends CI_Model {
    const table = 'venda';
    //Método que realiza a busca de todos os vendas no DB
    public function getAll() {
        //Nome da tabela no DB
        $query = $this->db->get(self::table);
        //result já nos retorna em formato de array 
        return $query->result();
    }
}
?>