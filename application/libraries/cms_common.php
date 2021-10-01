<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class CMS_Common
{

	 private $CI;
	 
	  public function __construct()
	  {
	  	$this->CI = &get_instance();
	  }
	  public function password_encode($pass)
	  {
	  	return md5($pass);
	  }
	  public function cms_redirect($url='')
	  {
	  		return header('Location:'.$url);
	  		exit();
	  }

}