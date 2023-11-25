<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class PendaftaranModels extends CI_Model
{
    public function update($table, $data, $id)
	{
		$result = $this->db->where('id_pendaftaran', $id)->update($table, $data);
		return $result;
	}

	public function find_record_by_id($table, $id)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->join('customer', 'customer.id_customer = pendaftaran.id_customer');
		$this->db->join('jenis_cucian', 'jenis_cucian.id_jenis_cucian = pendaftaran.id_jenis_cucian');
		$this->db->where('id_pendaftaran', $id); // Menambahkan kondisi where

		$query = $this->db->get(); // Menyimpan query dalam variabel $query
		$result = $query->row(); // Mengambil hasil query menggunakan method row()
		
		return $result;
	}
}