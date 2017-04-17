<?php

	echo "Logged out scuccessfully";
    
    session_start();
	session_destroy();
	//setcookie(PHPSESSID,session_id(),time()-1);
	session_regenerate_id(true);

?>