<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Main extends CI_Controller {



	public function index()
	{
		$this->load->view('login');
	}


	function home(){

		$this->load->view('home');
	}
	
}
