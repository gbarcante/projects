<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $page_name; ?></title>
		<link href="css/main.css" rel="stylesheet" type="text/css"/>
		<?php 
			if($page_name=="StartupStratford"){
				echo '<link href="css/index.css" rel="stylesheet" type="text/css"/>';
			}elseif($page_name=="Idea Farm"){
				echo '<link href="css/ideafarm.css" rel="stylesheet" type="text/css"/>';
			}elseif($page_name=="Who We Are"){
				echo '<link href="css/about.css" rel="stylesheet" type="text/css"/>';
			}elseif($page_name=="Our Start Ups"){
				echo '<link href="css/current.css" rel="stylesheet" type="text/css"/>';
			}elseif($page_name=="Getting Started"){
				echo '<link href="css/apply.css" rel="stylesheet" type="text/css"/>';
			}elseif($page_name=="Contact"){
				echo '<link href="css/contact.css" rel="stylesheet" type="text/css"/>';
			}
		
		
		?>
		
	</head>
	<body>
		<div id="wrap">
			<div id="header">
				<header>
					<a href="index.php"><div id="main_icon">
						<img src="content/logo_small.png">
					</div>
					</a>
					<nav class="primary_nav">
						<ul id="primary_nav">
							<?php if($page_name=="Who We Are"){ ?>
							<li><a class="highlight">who we are?</a></li>
							<?php }else{
								echo '<li><a href="about.php">who we are?</a></li>';
							} ?>
							<?php if($page_name=="Our Start Ups"){ ?>
							<li><a class="highlight">our start ups</a></li>
							<?php }else{
								echo '<li><a href="current.php">our start ups</a></li>';
							} ?>
							
							<?php if($page_name=="Idea Farm"){ ?>
							<li><a class="highlight"><img src="content/ideafarm_icon1.png">idea farm</a></li>
							<?php }else{
								echo '<li><a href="ideafarm.php">idea farm</a></li>';
							} ?>
							<?php if($page_name=="Contact"){ ?>
							<li><a class="highlight">contact</a></li>
							<?php }else{
								echo '<li><a href="contact.php">contact</a></li>';
							} ?>
							
							
						</ul>
					</nav>
				</header>
				<div class="online_user">
					
				</div>
			</div>
		
		<div id="content">