<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<?php
	include "definitions.php";
?>

<html>
<head>
	<link href='<?php print_base_url(); ?>images/styles.css' rel='stylesheet' type='text/css'>
	<link rel='shortcut icon' href='<?php print_base_url(); ?>images/favicon.ico'>
	
	<title>
		<?php print_long_title();?>
	</title>
</head>

<body>
	<div class="container">
		<div class="menu">
			<div class="menu_item">
				<a href="index.php">Home</a>
			</div>
			<div class="menu_item">
				<a href="call.php">Call for Papers</a>
			</div>
			<div class="menu_item">
				<a href="submission.php">Submission</a>
			</div>
			<div class="menu_item">
				<a href="registration.php">Registration</a>
			</div>
			<div class="menu_item">
				<a href="programme.php">Programme</a>
			</div>
			<div class="menu_item">
				<a href="tpc.php">Organisers</a>
			</div>
			<div class="menu_item">
				<a href="venue.php">Location</a>
			</div>
			<div class="menu_item">
				<a href="contact.php">Contact Us</a>
			</div>
		</div>

		<div class="header">
			<div class="header_content" style="background-image: url('images/header.png');">
				<h1><?php print_long_acronym(); ?></h1>
				<h4><?php print_sensys_connection(); ?></h4>
				<h2><?php print_title(); ?></h2>
				<h3><?php print_workshop_date(); ?></h3>
			</div>
		</div>

		<div class="main">
