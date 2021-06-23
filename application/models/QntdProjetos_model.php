<?php

defined('BASEPATH') or exit('No direct script access allowed');

class QntdProjetos_model extends CI_Model
{
  public function __construct()
	{
		parent::__construct();
		$this->load->database();
    $this->tb = 'qntd_projetos';
	}

  public function get_qntd_projetos(){
    $this->db->select("$this->tb.id, $this->tb.titulo, $this->tb.quantidade");
    $this->db->from($this->tb);
    return $this->db->get()->result_array('array');
  }
}
