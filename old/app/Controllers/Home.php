<?php

namespace App\Controllers;
use App\Models\QntdProjetosModel;

class Home extends BaseController
{
	public function __construct()
	{
		$QntdProjetosModel = new QntdProjetosModel();
		//
		// $data['QntdProjetosModel'] = $QntdProjetosModel->getData();
		// print_r($data['QntdProjetosModel'])
		// $this->load->model('QntdProjetosModel','QntdProjetosModel');
	}

	public function index()
	{
		$QntdProjetosModel = new QntdProjetosModel();

		$data['QntdProjetosModel'] = $QntdProjetosModel->getData();
		print_r($data['QntdProjetosModel'])
	// 	$view = $this->uri->segment(1);
	// 	$view = !empty($view) ? $this->defineRota($view) : "home";
	//
	// 	$data = array(
	// 	'view' => "conteudo/{$view}",
	// 	'title' => 'RAIANY MARQUES - ARQUITETURA 3D',
	// );
	// 	$this->parser->parse('layout-default/index', $data);

		// var_dump($this->qntd_projetos());
		// exit();

		$data = array(
		'view' => "home\index",
		// 'qntd_projetos' => $this->qntd_projetos()
	);
		// $this->parser->parse('home/index', $data);

		return view('home\index');
	}

	private function qntd_projetos() {
		return $this->QntdProjetosModel->get_qntd_projetos();
	}

}
