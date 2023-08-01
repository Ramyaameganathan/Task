<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

 public $data; 
	
	public function index()
	{
		
		$data = file_get_contents('product.json');
		
		$this->data['decodedData'] = json_decode($data);
			
		$this->load->view('welcome_message',$this->data);
	}
}
