<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Principal_model extends CI_Model
{
  public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->home_Imgbanner = "home_banner";
		$this->home_Textobanner = "home_texto_banner";
		$this->home_destaques = "home_destaques";
		$this->home_titulo = "home_titulo";
		$this->redes_sociais = "redes_sociais";
	}



  public function getImgBannerHome(){
    $this->db->select($this->home_Imgbanner . '.img_banner');
    $this->db->from($this->home_Imgbanner);
    return $this->db->get()->first_row('array');
  }

  public function getTextoBannerHome(){
    $this->db->select($this->home_Textobanner . '.texto');
    $this->db->from($this->home_Textobanner);
    return $this->db->get()->result_array();
  }

  public function getHomeTitulo(){
    $this->db->select($this->home_titulo . '.titulo');
    $this->db->from($this->home_titulo);
    return $this->db->get()->first_row('array');
  }

  public function getImgDestaqueHome(){
    $this->db->select(array(
      $this->home_destaques . '.img_destaque',
      $this->home_destaques . '.text_destaque',
    ));
    $this->db->from($this->home_destaques);
    return $this->db->get()->result_array();
  }

  public function getRedesSociais(){
    $this->db->select(array(
      $this->redes_sociais . '.id',
      $this->redes_sociais . '.nome',
      $this->redes_sociais . '.url',
      $this->redes_sociais . '.class',
      $this->redes_sociais . '.status'
    ));
    $this->db->from($this->redes_sociais);
    $this->db->where($this->redes_sociais . '.status = 1');
    $this->db->order_by($this->redes_sociais . '.ordenar ASC');
    return $this->db->get()->result_array();
  }



  public function getProdutosCliente($id_user, $verifica_calculo = null, $CursoPremium = null)
	{
		$this->db->select_max('data_expiracao');
		$this->db->select(array(
			$this->tb_produtos . '.id_produto',
			$this->tb_produtos . '.fotos',
			$this->tb_produtos . '.principal',
			$this->tb_produtos . '.desc_produtos',
			$this->tb_produtos . '.id_calculo',
			$this->tb_produtos . '.id_moodle',
			$this->tb_produtos . '.id_tipo_conta',
			$this->tb_produtos . '.status',
			$this->tb_produtos . '.permitir_renovacao',
			$this->tb_produtos . '.premium_conteudo',
			$this->tb_produtos . '.data_realizacao',
			$this->tb_users . '.email',
			$this->tb_users . '.username',
			$this->tb_categorias . '.id_categoria',
			$this->tb_categorias . '.pos',
			$this->tb . '.numero_pedido',
			$this->tb . '.codigo_adesao_recorrente'
		));
		$this->db->from($this->tb);
		$this->db->join($this->tb_produtos, $this->tb_produtos . '.id_produto =' . $this->tb . ".id_produto");
		$this->db->join($this->tb_users, $this->tb_users . '.id =' . $this->tb . ".id_user");
		$this->db->join($this->tb_categorias_produtos, $this->tb_categorias_produtos . '.id_produto =' . $this->tb_produtos . '.id_produto', 'left');
		$this->db->join($this->tb_categorias, $this->tb_categorias . '.id_categoria =' . $this->tb_categorias_produtos . ".id_categoria", 'left');
		$this->db->where(array($this->tb . '.id_user' => $id_user, $this->tb . '.status' => 4));

		if ($verifica_calculo == 1) {
			$this->db->where('id_calculo >', 0);
		}

		$this->db->group_start();
		$this->db->where(array($this->tb . '.id_user' => $id_user, $this->tb . '.status' => 4));
		$this->db->not_like($this->tb . '.numero_pedido', "PREM_");
		$this->db->or_where($this->tb . '.numero_pedido IS NULL');
		$this->db->group_end();
		$this->db->group_by(array($this->tb_produtos . '.id_produto',  $this->tb_produtos . '.fotos', $this->tb_produtos . '.principal', 'desc_produtos', 'info_produto', 'id_calculo', 'id_moodle', $this->tb_produtos . '.status', $this->tb_users . '.email', $this->tb_users . '.username', $this->tb_categorias . '.pos'));

		$this->db->order_by($this->tb_produtos . '.ordenar_painel_cliente ASC');

		return $this->db->get()->result_array();
	}

}
