<?php
	$connect_error = 'Sorry, we\'re experiencing connection problem.';
	
	mysql_connect('localhost', 'root', 'password') or die($connect_error);
	mysql_select_db('utkal_placement_portal') or die($connect_error);
?>
