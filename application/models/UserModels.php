<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class UserModels extends CI_Model
{
    public function insert($table, $data)
	{
		$result = $this->db->insert($table, $data);
		return $result;
	}

    public function update($table, $data, $id)
	{
		$result = $this->db->where('id_user', $id)->update($table, $data);
		return $result;
	}

	public function delete($table, $id)
	{
		$result = $this->db->delete($table, ['id_user' => $id]);
		return $result;
	}

	public function find_record_by_id($table, $id)
	{
		$result = $this->db->get_where($table, ['id_user' => $id])->row();
		return $result;
	}

	public function cekData($where = null)
  {
    return $this->db->get_where('user', $where);
  }
}