<?php
namespace App\Controllers;	

class Homecontroller2 extends BaseController {





	
	public function index() {

		$this->session->set('username','infovistar');

		$data = array(
		        'title' => 'infovistar.com',
		        'heading' => 'About Us',
				'message' => 'Welcome to CodeIgniter',
				
				'logged_in' => TRUE

			);



		echo view('about_us', $data);
		echo $this->session->get('username');
	}



}
?>