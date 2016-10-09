<?php

class Veiculos_model extends CI_Model {

// retorna os registros cadastrados na tabela marcas
    public function select() {
        $sql = "select v.*, m.nome as marca from veiculos v ";
        $sql .= "inner join marcas m on v.marca_id = m.id order by v.id";
        // result: adequado para uma lista de dados (foreach)
        return $this->db->query($sql)->result();
    }

    public function insert($veiculo) {
        return $this->db->insert('veiculos', $veiculo);
    }

    // recupera o registro a ser alterado
    public function find($id) {
        $sql = "select * from veiculos where id = $id";
        // row: adequado para um único registro ($row)
        return $this->db->query($sql)->row();
    }

    public function update($veiculo) {
        // cláusula where do update
        $this->db->where('id', $veiculo['id']);
        // altera os dados
        return $this->db->update('veiculos', $veiculo);
    }

    public function delete($id) {
        // cláusula where do delete
        $this->db->where('id', $id);
        // altera os dados
        return $this->db->delete('veiculos');
    }

    public function total() {
        $query = $this->db->query("select sum(preco) as soma from veiculos");
        $row = $query->row();
        return $row->soma;
    }

    public function destaque() {
        $sql = "select v.*, m.nome as marca from veiculos v ";
        $sql .= "inner join marcas m on v.marca_id = m.id where destaque = 1 order by v.id";
        // result: adequado para uma lista de dados (foreach)
        return $this->db->query($sql)->result();
    }

    public function pesquisa($palavra) {
        $sql = "SELECT * FROM veiculos WHERE modelo=?";
        $query = $this->db->query($sql, array($palavra));
        return $query->result();  //row
    }
}