<?php
class Csv_import_model extends CI_Model
{

	function insert($data)
	{
		$this->db->insert_batch('tbl_product', $data);
	}
}
