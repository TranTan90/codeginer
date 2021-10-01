<?php if (!defined('BASEPATH')) exit('No direct script access allowed');



class CMS_authentication
{
	private $CI;
	private $permissID;
	private $messages;

	 public function __construct()
	 {
	 	 $this->CI  =& get_instance();

	 }
	 public function check()
	 {
	 	if(CMS_Cookie::exitst('user_login'))
	 	{
	 		$cookie=CMS_Cookie::get_cookie('user_login');
	 		$cookie = json_decode(CMS_Cookie::decode($cookie),true);
	 		$user = $this->CI->db->select('id,username,password,salt,')->where('username',$cookie['username'])->from('users')->get()->row_array();
	 		if(isset($user) && count($user))
	 		{
	 			if($user['username']==$cookie['username'] && $user['passsword'] == $cookie['passsword'] && $user['salt'] == $cookie['salt'])
	 			{
	 				$data=['username'=>$user['username'] ,'passsword' =>$user['passsword'] ,'salt' =>$user['salt']];
	 				CMS_Cookie::set_cookie('user_login'.CMS_PREFIX,CMS_Cookie::encode($data),COOKIE_EXPIRY);
	 				return [
	 					'username ' => $user['username'],
	 					'passsword' => $user['passsword'],
	 					'salt' => $user['salt']
	 				];

	 			}

	 		}
	 	}
	 	return null;


	 }

}




