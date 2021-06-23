<?php

namespace App\Models;

use CodeIgniter\Model;

class QntdProjetosModel extends Model
{
  // protected $table = 'qntd_projetos';
  // protected $primaryKey = 'id';
  // protected $alowedFields = ['titulo', 'quantidade'];
  // protected $returnType = 'array';


  public function __construct()
  {
    parent::__construct();
    // $this->load->database();

    // $tb = "qntd_projetos";
  }

  public function get_qntd_projetos(){
    $this->db->select("$this->tb.titulo, $this->tb.quantidade");
    $this->db->from($this->tb);
    return $this->db->get()->first_row('array');
  }
}
