<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$data['title'] = 'Online Shope';
		$data['Barang'] = $this->Model_barang->index()->result();
		$this->load->view('templates/header',$data);
		$this->load->view('templates/navbar');
		$this->load->view('home/welcome',$data);
		$this->load->view('templates/footer');
	}

}
