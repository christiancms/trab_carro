<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
interface iCadastro 
{
    public function select();
    public function insert($reg);
    public function update($reg);
    public function delete($id);
    public function find($id);
}