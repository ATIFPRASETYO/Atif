<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class produk extends CI_Controller {

	public function index()
	{
		$data['page']="produk/form";
		$this-> load ->view('main',$data);

	}

	public function submit()
	{
		$this->load->model('produk_model');

		$produk = $this->input->post();

		$this->produk_model->add($produk);	

	}


}