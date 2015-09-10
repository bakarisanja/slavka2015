<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * class Model_admin
 */
class Model_admin extends CI_Model
{
	private $token;
	private $id;


	/**
	 * @param  geting int, num of caracters you want
	 * @return int token for whriteing in database
	 */
	private function setToken($length)
	{
    	$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789';
   		return substr(str_shuffle($characters), 0, $length);
	}

	/**
	 * check if admin exists in database, and if exists, whriteing token in db and returns it
	 * @param  [type] $username [description]
	 * @param  [type] $password [description]
	 * @return [type]           [description]
	 */
	public function checkAdmin($username, $password)
	{
		$sql = "SELECT * FROM admin WHERE admin_username = ? AND admin_password = ?";
		$res = $this->db->query($sql, array($username, $password));
		$admin  = $res->row();

		if ($admin) {
			$this->id = $admin->admin_id;
			$this->token = $this->setToken(10);

			$sql = "UPDATE admin SET admin_token  = ? where admin_id = ?";
			$res = $this->db->query($sql, array($this->token, $this->id));
			
		    return $this->token;
		} else {
			return false;
		}
	}
}