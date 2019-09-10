<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Dashboard';
		$this->load->view('templates_admin/header_admin',$data);
		$this->load->view('templates_admin/sidebar_admin',$data);
		$this->load->view('templates_admin/navbar_admin',$data);
		$this->load->view('admin/dashboard');
		$this->load->view('templates_admin/footer_admin');
	}

	public function data_barang()
	{
		$data['Barang'] = $this->Model_barang->index()->result();
		$data['title'] = 'Data Barang';
		$this->load->view('templates_admin/header_admin',$data);
		$this->load->view('templates_admin/sidebar_admin',$data);
		$this->load->view('templates_admin/navbar_admin');
		$this->load->view('admin/databarang');
		$this->load->view('templates_admin/footer_admin');
	}
	public function tambah_data()
	{
		$nama_barang = $this->input->post('nama_barang');
		$nama_merek = $this->input->post('nama_merek');
		$keterangan = $this->input->post('keterangan');
		$harga = $this->input->post('harga');
		$stok = $this->input->post('stok');
		$image = $_FILES['image']['name'];
		// die(var_dump($_FILES['image']['name']));
			if ($image !== NULL) {
				$config['upload_path'] = './assets/img/';
				$config['allowed_types'] = 'jpg|jpeg|png|gif';
				$confif['max_size'] ='100';
				$config['max_width'] = '1024';
				$config['max_height'] = '760';
				
				$this->load->library('upload',$config);
				if (!$this->upload->do_upload('image')) {
	 				die("Gambar Gagal diupload!");
	 			}else{
					$image = $this->upload->data('file_name');
				}
			}

		$data = array(
			'nama_barang' => $nama_barang,
			'nama_merek' => $nama_merek,
			'keterangan' => $keterangan,
			'harga' => $harga,
			'stok' => $stok,
			'image' => $image
		);
		$this->Model_barang->tambah_barang($data,'Barang');
		$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">
											Data berhasil di tambah
											</div>');
		redirect('admin/dashboard/data_barang');
	}
	public function edit($id)
	{
		$where= array('id' => $id);
		$data['Barang'] = $this->Model_barang->edit_barang($where,'Barang')->result_array();
		$data['title'] = 'edit';
		$this->load->view('templates_admin/header_admin',$data);
		$this->load->view('templates_admin/sidebar_admin');
		$this->load->view('admin/edit_barang',$data);
		$this->load->view('templates_admin/footer_admin');
	}
	public function update()
	{
		$id = $this->input->post('id');
		$nama_barang = $this->input->post('nama_barang');
		$nama_merek = $this->input->post('nama_merek');
		$keterangan = $this->input->post('keterangan');
		$harga = $this->input->post('harga');
		$stok = $this->input->post('stok');

		$data = array(
			'nama_barang' => $nama_barang,
			'nama_merek' => $nama_merek,
			'keterangan' => $keterangan,
			'harga' => $harga,
			'stok' => $stok
			
		);
		$where = array(
			'id' => $id
		);
		$this->Model_barang->update_data($where,$data,'Barang');
		$this->session->set_flashdata('pesan','<div class="alert alert-warning" role="alert">
											Data Berhasil diubah
											</div>');
		redirect('admin/Dashboard/data_barang');
	}
	
	public function hapus($id)
	{
		$where = array(
			'id' => $id);
		$this->Model_barang->hapus_data($where,'Barang');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">
											Data dihapus
											</div>');
		redirect('admin/dashboard/data_barang');
	}
}
