<?php

session_start();

class login{
	function check($username,$password){
		if(!empty($username) && !empty($password)){
			$query = "SELECT * from admin where username='$username' and password='$password'";

			print_r($value);
			if($request =mysql_query($query)) {
				$count = mysql_num_rows($request);
				$value = mysql_fetch_array($request);

				if($count>0){
					$_SESSION['login']=1;
					print_r($query);
					$_SESSION['active_id'] = $value['id'];
					return true;
				} else {
					$_SESSION['err']="Invalid Username or Password";
					return false;
				}
			} else {
				$_SESSION['err']="Failed To Login";
				return false;
			}
		} else {
			$_SESSION['err']="Please Input All Field";
			return false;
		}
	}
}

?>