<?php

	include_once 'hmdb.php';
		
	session_unset();
	session_destroy();
	
	header("Location: ../home.php");