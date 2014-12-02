<?php
	require 'config.inc';
	session_save_path("session");
	session_start();
	header('Content-Type: application/json');
	$_SESSION['Login'] = false;

	$reply = array();
	$reply["login"] = $_SESSION['Login'];

	print json_encode($reply);
?>