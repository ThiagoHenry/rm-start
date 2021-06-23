<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Contato_model extends CI_Model
{
  public function __construct()
	{
		parent::__construct();
		$this->load->database();
    $this->tb = 'contato';
	}

  public function get_contato(){
    $this->db->select("$this->tb.id, $this->tb.texto");
    $this->db->from($this->tb);
    return $this->db->get()->first_row('array');
  }
}
