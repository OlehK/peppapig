<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Rock CastleDescription: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20111127

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Peppa Pig</title>
	<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css' />
	<?php wp_head(); ?>
</head>
<body>
<div id="header" class="container">
	<div id="logo">
		<h1><a href="#">Peppa Pig</a></h1>
	</div>
	<div id="menu">
		<?php wp_nav_menu();?>
	</div>
</div>
<div id="splash-wrapper">
	<div id="splash" >
		<h2 style="color:red">Welcome to the blog pig Peppa</h2>
	</div>
</div>










