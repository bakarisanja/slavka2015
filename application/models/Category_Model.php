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

	public function addCat($name, $about)
	{
		$sql = "INSERT INTO `categorys`(`category_id`, `category_name`, `category_about`) VALUES ('', ?, ?)";
       	$res = $this->db->query($sql, array($name, $about));
	}

	public function deleteCat($id)
	{
		$sql = "DELETE FROM `categorys` WHERE category_id = ?";
		$res = $this->db->query($sql, array($id));
	}

	public function updateCat($id, $name, $about)
	{
		$sql = "UPDATE `categorys` SET `category_name`= ?, `category_about`= ? WHERE category_id = ?";
		$res = $this->db->query($sql, array($name, $about, $id)); 
	}
}