<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

	public function __construct()
	{
		parent::__construct	();
		//codeigniter : write less do more

	}

	function index()
	{
		$this->load->model('user_model','usmod');
		// $data ['level'] =

		$data = $this

		->model('user_model','usmod');

		$this->produk_model->add($produk);	

	}


}