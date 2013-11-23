<?php
	$user = $_POST['username'];
	$remember = $_POST['longTerm'];
	
	//number of days to keep cookie
	$days = 10;
	
	$cName = 'currentUser';
	$cVal = $user;
	$cTime = time() + (60*60*24*$days);
	
	//if they want to remember set it for $days
	if($remember)
	{
		setcookie($cName, $cVal, $cTime, "/");
	}
	else//if not then default to expire when session ends
	{
		setcookie($cName, $cVal, 0, "/");
	}

?>