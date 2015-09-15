<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * product model
 */
Class Product_Model extends CI_Model
{
	/**
	 * getting name, about, and cat id adds image name 
	 * @param  [type] $name        from post
	 * @param  [type] $about       from post
	 * @param  [type] $category_id from post or from get...
	 *
	 */
	public function insertProduct($name, $about, $category_id)
	{
		//set uniqu name for image
		$str = "asdfghjklqwertyuiopzxcvbnm1234567890QERTYUIOPASDFGHJKLZXCVBMN";
    	$img_name = md5(uniqid($str, true));
    	//img thumb name for database
    	$img_thumb = $img_name."_thumb.jpg";
    	//img name for database
    	$img_name = $img_name.".jpg";
    	
    	//check if file is uploaded
		if(move_uploaded_file($_FILES['product_image']['tmp_name'], dirname($_SERVER["SCRIPT_FILENAME"])."/assets/images/proizvod/".$img_name.".jpg")){
    		echo "uredu je";

    		//makeing tumbnail
    		$config['image_library'] = 'gd2';
			$config['source_image']	= dirname($_SERVER["SCRIPT_FILENAME"])."/assets/images/proizvod/".$img_name.".jpg";
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = TRUE;
			$config['width']	= 120;
			$config['height']	= 120;
			//makeing tumbnail
			$this->load->library('image_lib', $config); 
			//makeing thumbnail
			var_dump($this->image_lib->resize());

			//saving product in database
			$sql = "INSERT INTO `products`(`products_id`, `products_name`, `products_about`, `products_image`, `products_image_thumb`, `category_id`) VALUES ('', ?, ?, ?, ?, ?)";
			$res = $this->db->query($sql, array($name, $about, $img_name, $img_thumb, $category_id));

    	} else {
    		echo "fajl ne valja";
    	}
		
	}
}