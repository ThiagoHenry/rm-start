<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
{
	parent::__construct();
	$this->load->model('QntdProjetos_model','QntdProjetos_model');
	$this->load->model('Sobre_model','Sobre_model');
	$this->load->model('Contato_model','Contato_model');
}
	public function index()
	{
		// $data = $this->qntd_projetos();
// var_dump($this->contato());
// exit();
		$data = array(
		'view' => "",
		'title' => 'RAIANY MARQUES - ARQUITETURA 3D',
		'projetos' => $this->qntd_projetos(),
		'sobre' => $this->sobre(),
		'contato' => $this->contato(),
	);
		$this->parser->parse('home/index', $data);
	}

	private function qntd_projetos() {
		return $this->QntdProjetos_model->get_qntd_projetos();
	}

	private function sobre() {
		return $this->Sobre_model->get_sobre();
	}

	private function contato() {
		return $this->Contato_model->get_contato();

		// return $this->Contato_model->get_contato();
	}
}




























// defined('BASEPATH') OR exit('No direct script access allowed');

// class Home extends CI_Controller {
// 	public function __construct()
// 	{
//
// 	}
//
// 	public function index()
// 	{
// 	// 	$view = $this->uri->segment(1);
// 	// 	$view = !empty($view) ? $this->defineRota($view) : "home";
// 	//
// 	// 	$data = array(
// 	// 	'view' => "conteudo/{$view}",
// 	// 	'title' => 'RAIANY MARQUES - ARQUITETURA 3D',
// 	// );
// 	// 	$this->parser->parse('layout-default/index', $data);
//
// 	// 	$data = array(
// 	// 	'view' => "home\index",
// 	// 	// 'qntd_projetos' => $this->qntd_projetos()
// 	// );
// 		// $this->parser->parse('home/index', $data);
// 		$this->load->view('welcome_message');
//
// 		// $this->load->view('index');
// 	}
//
// 	private function qntd_projetos() {
// 		return $this->QntdProjetos_Model->get_qntd_projetos();
// 	}
//
// }
