<?php
	$user;

	if(isset($_COOKIE['currentUser']))
	{
		$user = $_COOKIE['currentUser'];
		echo 'true';
	}

?>