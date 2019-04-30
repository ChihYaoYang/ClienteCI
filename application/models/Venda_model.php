<?php
/*
 *  Classe model da tabela clientes do DB
 *  @author Yang
 */
//Todo model precisa extends a classe CI_Model do framework
class Venda_model extends CI_Model {
    //Método que realiza a busca de todos os vendas no DB
    public function getAll() {
        //Define os campos que serão selecionados
        $this->db->select('venda.*, cliente.nome');
        
        //define a tabela que será chamada no FROM do select
        $this->db->from('venda');
        
        //Realiza o inner join com a tabela cliente
        //Primeiro parametro DB da tabela - 
        //Segundo parametro é os campos que se relacionam
        //Terceiro parametor é o tipo de join('inner','left','right')
        $this->db->join('cliente', 'cliente.id = venda.idCliente', 'inner');
        
        //Nome da tabela no DB
        $query = $this->db->get();
        //result já nos retorna em formato de array 
        return $query->result();
    }
}
?>