<?php

get_instance()->load->iface('iCadastro');

class Clientes_model extends CI_Model implements iCadastro {

    public function select() {
        $sql = "select * from clientes order by id";
        $query = $this->db->query($sql);
        // result retorna um array de dados
        return $query->result();
    }

    public function insert($reg) {
        return $this->db->insert('clientes', $reg);
    }

    public function update($reg) {
        
    }

    public function delete($id) {
        
    }

    public function find($id) {
        $sql = "select * from clientes where id= $id";
        $query = $this->db->query($sql);
        // retorna um registro
        return $query->row();
    }

    public function selectGraph() {
        $sql = "select year(datacad) as ano, count(if(cidade='Pelotas', 1, null)) ";
        $sql .= "as num_pel, count(if(cidade<>'Pelotas', 1, null)) as num_outras ";
        $sql .= "from clientes group by year(datacad)";
        $query = $this->db->query($sql);
        // result retorna um array de dados
        return $query->result();
    }
}