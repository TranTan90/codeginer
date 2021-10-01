<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

 
 class CMS_Session
 {	
    	private $CI;
    	public function __construct()
    	{
    		$this->CI  = &get_instance();	
    	}

    	public static function flash($name,$string ='')
    	{
    		if(self::exist($name))
    		{
    			$session = self::get_session($name);
    			self::del_session($name);
    			return $session;
    		}
    		else 
            {
    			self::put($name,$string);
    		}
    	}

    	public static function exist($name)
		{
				 return (isset($_SESSION[$name])) ? true :false;
    	}

    	public static function get_session($name)
    	{
    		if(self::exist($name))
    		{
    			return $_SESSION[$name];
    		}
    	}
    	 public static function del_session($name)
         {


    	 	if(self::exist($name))
    	 	{

    	 		unset($_SESSION[$name]);
    	 	}
         }
    	public static function put($name,$value)
    	 	{
    	 		 $_SESSION[$name]= $value;

    	 	}

 }
 

