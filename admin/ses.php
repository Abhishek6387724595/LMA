<?php
session_start();
		
		if($_SESSION['type'] == 1)
		{
			
		}
		else
		{
			header('Location: ../index.php');
		}
?>