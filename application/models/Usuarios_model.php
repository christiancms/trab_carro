<?php

get_instance()->load->iface('iCadastro');

class Usuarios_model extends CI_Model implements iCadastro {

    public function select(){
        
    }
    public function insert($reg){
        
    }
    
    public function update($reg){
        
    }
            
    public function delete($id){
        
        
    }
    
     public function find($id){
         
         
     }
     
     
    public function verificaUsuario($email, $senha) {
        $sql = "select * from usuarios where email=? and senha=? and ativo=1";
        $query = $this->db->query($sql, array($email, md5($senha)));
        return $query->row();
    }

}
