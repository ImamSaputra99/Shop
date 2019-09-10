<?php 
class Chart extends CI_Controller{

	public function beli($id)
	{
	$Barang = $this->Model_barang->find($id);
	$data = array(
		        'id'      => $Barang->id,
		        'qty'     => 1,
		        'price'   => $Barang->harga,
		        'name'    => $Barang->nama_barang,
		        
		);
		$this->cart->insert($data);
		redirect('Home');
	}
	public function detail_beli()
	{
		$data['title'] = 'Chart detail';
		$this->load->view('templates/header',$data);
		$this->load->view('templates/navbar');
		$this->load->view('chart/index');
	}
	public function hapus_cart()
	{
		$this->cart->destroy();
		redirect('chart/detail_beli');
	}
	public function pembayaran()
	{
		$data['title'] = 'Transaksi';
		$this->load->view('templates/header',$data);
		$this->load->view('templates/navbar');
		$this->load->view('chart/pembayaran');

	}
	public function pengiriman()
	{
		$proses = $this->Model_invoice->index();
		if($proses){
			$data['title'] = 'Pengiriman';
			$this->cart->destroy();
			$this->load->view('templates/header',$data	);
			$this->load->view('templates/navbar');
			$this->load->view('chart/pengiriman');
		}else{
			echo "Maaf , Pengiriman Anda Gagal";
		}
	}
	public function detail($id_brg)
	{
		
		$data['Barang'] = $this->Model_barang->detail_brg($id_brg);
		$data['title'] = 'Detail Produk';
		$this->load->view('templates/produk_header',$data);
		$this->load->view('templates/navbar');
		$this->load->view('produk/index',$data);
		$this->load->view('templates/produk_footer');

	}
} 
?>