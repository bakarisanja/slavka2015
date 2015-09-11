<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * class Category
 */
class Category_Model extends CI_Model
{
	private $categorys;

	public function getAll()
	{
		$query = $this->db->get('categorys');
		$this->categorys = $query->result();
		return $this->categorys;
	}
}