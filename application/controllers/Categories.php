<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('categories/index');
		$this->load->view('templates/footer');
	}
	public function samsung()
	{
		$data['samsung'] = $this->Model_kategori->samsung()->result();
		$data['title'] = 'Kategori';
		$this->load->view('templates/header',$data);		
		$this->load->view('templates/navbar');
		$this->load->view('categories/samsung',$data);
		$this->load->view('templates/footer');
	}
	public function iPhone()
	{
		$data['iPhone'] = $this->Model_kategori->iPhone()->result();
		$data['title'] = 'Kategori';
		$this->load->view('templates/header',$data);
		$this->load->view('templates/navbar');
		$this->load->view('categories/iPhone',$data);
		$this->load->view('templates/footer');
	}
	public function nokia()
	{
		$data['nokia'] = $this->Model_kategori->nokia()->result();
		$data['title'] = 'Kategori';
		$this->load->view('templates/header',$data);		
		$this->load->view('templates/navbar');
		$this->load->view('categories/nokia',$data);
		$this->load->view('templates/footer');
	}
	public function xiaomi()
	{
		$data['xiaomi'] = $this->Model_kategori->xiaomi()->result();
		$data['title'] = 'Kategori';
		$this->load->view('templates/header',$data);
		$this->load->view('templates/navbar');
		$this->load->view('categories/xiaomi',$data);
		$this->load->view('templates/footer');
	}
	public function huawei()
	{
		$data['huawei'] = $this->Model_kategori->huawei()->result();
		$data['title'] = 'Kategori';
		$this->load->view('templates/header',$data);
		$this->load->view('templates/navbar');
		$this->load->view('categories/huawei',$data);
		$this->load->view('templates/footer');
	}
}
