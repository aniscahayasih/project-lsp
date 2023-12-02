<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class KritikModels extends CI_Model
{
    public function update($table, $data, $id)
	{
		$result = $this->db->where('id_pendaftaran', $id)->update($table, $data);
		return $result;
	}

  public function insert($table, $data)
	{
		$result = $this->db->insert($table, $data);
		return $result;
	}
}