<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class CustomerModels extends CI_Model
{
  public function insert($table, $data)
	{
		$result = $this->db->insert($table, $data);
		return $result;
	}
}