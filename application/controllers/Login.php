<?php 

defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * 
 */
class Login extends CI_Controller
{
	private $auth;

	public function __construct()
	{
		parent:: __construct();
		$this->auth = $this->authentication->ckeck();
	}
	
	
	public function index()
	{
		$this->load->view('Login_form');
	}
}
