<?php

	ob_start();
	session_start();
	require('vc/includes.php');
	$vc = new Users();
	$acceptace = $vc->checkFirstLoginStatus();

	$quote = $vc->get_quote();
	$admin_name = $quote['admin_name'];
	$comment = $quote['comment'];

	$notice = $vc->get_notice();


	require('header.php');
	require('sidebar.php');
	require('dashboard.php');
	require('footer.php');
?>