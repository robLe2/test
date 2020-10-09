<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" />
	<title><?php bloginfo('name');?>-<?php bloginfo('description')?></title>
	<?php wp_head();?>
</head>
<body>
<header>
<nav id="menuprincipal">
	<?php wp_page_menu('show_home=1');?>
</nav>
<h1><?php bloginfo('name');?></h1>
<h2><?php bloginfo('description')?></h2>
</header>