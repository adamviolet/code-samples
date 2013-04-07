<?php

	//validating email address
	function is_email($email)
	{
		if (! preg_match( '/[A-Za-z0-9!#$%&\'*+-/=?^_`{|}~]+@[A-Za-z0-9-]+(\.[A-Za-z0-9-]+)+[A-Za-z]$/', $email))
		{
			return false;
		}
		else
		{
			return true;
		}
	}
	
	//checking american phone numbers
	function is_phone($phone)
	{
		$phone = preg_replace('/[^\d]+/', '', $phone);
		$num_digits = strlen($phone);
		if ($num_digits == 11 && phone[0] == '1')
		{
			return substr($phone, 1);
		}
		elseif($num_digits == 10)
		{
			return $phone;
		}
		else
		{
			return false;
		}
	}


?>