<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Sobre_model extends CI_Model
{
  public function __construct()
	{
		parent::__construct();
		$this->load->database();
    $this->tb = 'sobre';
	}

  public function get_sobre(){
    $this->db->select("$this->tb.id, $this->tb.texto");
    $this->db->from($this->tb);
    return $this->db->get()->first_row('array');
  }
}
