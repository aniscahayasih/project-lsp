<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class TransaksiModels extends CI_Model
{
	public function find_last_no_nota($table)
	{
    $this->db->select('no_nota');
		$this->db->from($table);

		$query = $this->db->limit(1)->order_by('id_transaksi', 'DESC')->get(); // Menyimpan query dalam variabel $query
		$result = $query->row();

		return $result;
	}

  public function insert($table, $data)
	{
		$result = $this->db->insert($table, $data);
		return $result;
	}
}