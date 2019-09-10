<?php 

class Produk extends CI_controller{
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('produk/index');
		
	}
}

 ?>