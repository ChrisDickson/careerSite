<?php
	if(password_verify($_POST['pwd'], $hash)
	{
		echo $_POST['name'].' has been added to the menu.';
	}
	else
	{
		echo 'Password is invalid.';
	}
?>
