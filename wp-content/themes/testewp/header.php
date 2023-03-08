<!DOCTYPE html>
<html>
<head>
	<?php
		wp_head();
	?>
	<?php
		$title = get_the_title();
		if($title == ''){
			$title = 'Home';
		}
	?>
	<title><?php echo $title; ?></title>
	<meta charset="utf-8">
	<link rel="icon" href="" type="image/x-icon" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
	<link href="<?php echo get_theme_root_uri(); ?>/testewp/style.css" rel="stylesheet">
</head>
<body>

	<section class="topo">
		<div class="center">
			<header>
				<div class="logo"><a href="<?php echo '/wordpress' ?>"><img src="<?php echo get_theme_root_uri(); ?>/testewp/images/logo.png" /></a></div><!--logo-->
			</header>
			<ul class="menu-desktop">
				<li><a href="/wordpress/">Home</a></li>
				<li><a href="/wordpress/projetos">Projetos</a></li>
				<li><a href="/wordpress/contato">Contato</a></li>
			</ul>
			<div class="menu-mobile">
			<i class="fas fa-align-right"></i>
				<ul>
					<li><a href="/wordpress/">Home</a></li>
					<li><a href="/wordpress/projetos">Projetos</a></li>
					<li><a href="/wordpress/contato">Contato</a></li>
				</ul>
			</div><!--menu-mobile-->
