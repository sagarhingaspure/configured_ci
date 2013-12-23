<html>
	<head>
		<title>
			<?= $title ?> :: Configured Code Igniter
		</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/main.css">
		
		
	</head>
	<body>
		<div id="wrapper">
		<header>
			<h1>Configured Code Igniter</h1>
			<h2>Sagar Udasi</h2>
		</header>
		
		<nav>
		<?= $navigation ?>
		<div class="clearfix"></div>
		</nav>
		
		<div id="leftsidebar" class="sidebar">
			<?= $leftsidebar ?>
		</div>
		<div id="rightsidebar" class="sidebar">
			<?= $rightsidebar ?>
		</div>
		<div id="content">
			<?= $content ?>
		</div>
		
		<div class="clearfix"></div>
		
		<footer>
			<p>2013 G. C. O. E. Amravati</p>
		</footer>
		</div>
	</body>
</html>
