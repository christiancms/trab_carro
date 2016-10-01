<?php

class Marcas_model extends CI_Model {

    public function select() {
        $this->db->order_by('nome');
        return $this->db->get('marcas')->result();
    }

    public function find($id) {
        $sql = "select * from marcas where id = $id";
        // row: adequado para um único registro ($row)
        return $this->db->query($sql)->row();
    }

    public function insert($genero) {
        return $this->db->insert('marcas', $genero);
    }

}
