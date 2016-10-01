<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class MY_Loader extends CI_Loader 
{
 
  public function __construct() 
  {
    parent::__construct();
  }
 
  public function iface($iface) 
  {
    require_once APPPATH . '/interfaces/' . $iface . '.php';
  }
 
}