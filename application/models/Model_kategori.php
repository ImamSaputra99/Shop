<?php 

class Model_kategori extends CI_Model{

	public function samsung()
	{
		return $this->db->get_where('Barang',['nama_merek' => 'Samsung']);
	}
	public function iPhone()
	{
		return $this->db->get_where('Barang',['nama_merek' => 'iPhone']);
	}
	public function nokia()
	{
		return $this->db->get_where('Barang',['nama_merek' => 'nokia']);
	}
	public function xiaomi()
	{
		return $this->db->get_where('Barang',['nama_merek' => 'xiaomi']);
	}
	public function huawei()
	{
		return $this->db->get_where('Barang',['nama_merek' => 'huawei']);
	}

}
