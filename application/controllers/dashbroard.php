<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

	class Dashbroard extends CI_Controller
	{

		private $auth;

		public function __construct()
		{
			parent::__construct();
			$this->auth = $this->cms_authentication->check();

		}


		public function index()
		{
			// if($this->auth == null)
			// {
				
			// }
			$data['template'] ='home/index';
			$this->load->view('layout/index',isset($data)? $data :null);


		}

	}




