<?php

define('host_name','Localhost');
define('username','root');
define('password','');
define('db_name','library');

if($connection = mysql_connect(host_name,username,password,db_name)){
	//Process Move On
	if($database = mysql_select_db(db_name,$connection)){
	//Process Move On	
	}
	else{
		echo "Failed to connect Database";
	}
}
else{
	echo "Failed to connect Server";
}


?>