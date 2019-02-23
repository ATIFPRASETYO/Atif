<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pelanggan extends CI_Controller {

	public function index()
	{
		$data['page']="pelanggan/form";
		$this-> load ->view('main',$data);

	}


	public function submit()
	{
		$this->load->model('pelanggan_model');
		$this->load->helper('autoid');
		$table='pelanggan';
		$fields='pelangganId';
		$inisial='PL';
		$pelangganId = $this->input->post('pelangganId');
		if ($pelangganId =='') {
			$pelanggan = $this->input->post();
			$pelanggan['pelangganId']= get_id($fields, $table, $inisial);
		$this->pelanggan_model->add($pelanggan);	
	}

	else {
		$data = array(
			'namaPelanggan' =>$this->input->post('namaPelanggan'),
			'email' => $this->input->post('email'),
			'telpon' => $this->input->post('telpon'),
			'alamat' => $this->input->post('alamat'));
		$this->pelanggan_model->update($pelangganId, $data);
	}
}
	public function show_list_pelanggan()
	{
		# code...
		//$this->load->vie('list_pelanggan');
		$data['page'] ="pelanggan/list_pelanggan";
		$this->load->model("pelanggan_model");
		$data['pelanggan']= $this->pelanggan_model->get_pelanggan();
		// $this->load->view('pelanggan/list_pelanggan',$data);
		$this->load->view('main',$data);
	}

	public function hapus_pelanggan()
	{
		$this->load->model('pelanggan_model');
		$pelangganId = $this->uri->segment(3);
		$this->pelanggan_model->delete_pelanggan($pelangganId);
	}

	public function edit_pelanggan()
	{
		$pelangganId = $this->uri->segment(3);
		$this->load->model('pelanggan_model');
		$data["data_pelanggan"] = $this->pelanggan_model->get_pelanggan_detail($pelangganId);
		$data['page'] = "pelanggan/form";
		$this->load->view('main',$data);
	}

}