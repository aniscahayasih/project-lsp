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

	public function insert($table, $data)
	{
		$result = $this->db->insert($table, $data);
		return $result;
	}

	public function getLatestNoAntrian()
	{
		// Assuming you have a table named 'pendaftaran' with a column 'no_antrian'
		$this->db->select('no_antrian');
		$this->db->order_by('no_antrian', 'desc');
		$this->db->limit(1);
		$query = $this->db->get('pendaftaran');

		if ($query->num_rows() > 0) {
			$row = $query->row();
			$parts = explode('/', $row->no_antrian);
			$latest_date = $parts[0];
			$latest_number = $parts[1];

			// Check if it's a new day, and reset the number if necessary
			$today = date('Y-m-d');
			if ($latest_date == $today) {
				$new_number = $latest_number + 1;
			} else {
				$new_number = 1;
			}

			// Create the new no_antrian
			$new_no_antrian = $today . '/' . $new_number;

			return $new_no_antrian;
		}

		// Return a default value if no data is found
		return '1970-01-01/0';
	}
}