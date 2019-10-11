<?php

class Token {
   
	public static function genarate()
	{
		return $_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(32));
	}
	
	public static function checkToken($token,$cookiecsrf)
	{
			if($cookiecsrf === $token) 
			{
				return true;
			}
			
			else
			{
				return false;
			}
	}
}
?>