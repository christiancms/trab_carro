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

}
