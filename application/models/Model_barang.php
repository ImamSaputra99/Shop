<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_barang extends CI_Model {

	public function index()
	{
		return $this->db->get('Barang');
	}
	public function tambah_barang($data,$table)
	{
		$this->db->insert($table,$data);
	}
	public function edit_barang($where,$table)
	{
		return $this->db->get_where($table,$where);
	}
	public function update_data($where,$data,$table)
	{	

		$this->db->where($where);
		$this->db->update($table,$data);
	}
	public function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function find($id)
	{
		$result = $this->db->where('id',$id)
						->limit(1)
						->get('Barang');
		if($result->num_rows() > 0 ){
			return $result->row();
		}else{
			return array();
		}			
	}
	public function detail_brg($id_brg)
	{
		$result = $this->db->where('id',$id_brg)->get('Barang');
		if($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	}
}