<?php 
class Invoice extends CI_Controller{
	public function index()
	{
		$data['title'] = 'Invoice';
		$data['invoice'] = $this->Model_invoice->tampil_data();
		$this->load->view('templates_admin/header_admin',$data);
		$this->load->view('templates_admin/sidebar_admin');
		$this->load->view('templates_admin/navbar_admin');
		$this->load->view('admin/invoice',$data);
		$this->load->view('templates_admin/footer_admin');
	}
	public function detail($id_invoice)
	{
		$data['invoice'] = $this->Model_invoice->ambil_id_invoice($id_invoice);
		$data['pesanan'] = $this->Model_invoice->ambil_id_pesanan($id_invoice);
		$data['title'] = 'Detail Invoice';
		$this->load->view('templates_admin/header_admin',$data);
		$this->load->view('templates_admin/sidebar_admin');
		$this->load->view('templates_admin/navbar_admin');
		$this->load->view('admin/detail_invoice',$data);
		$this->load->view('templates_admin/footer_admin');
	}
} 