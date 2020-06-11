<?php
global $app;
?>
<!DOCTYPE html>
<html lang="<?php echo $app->theme->lang() ?>">

<head>
	<title><?php echo $app->theme->title() ?></title>
	<!--
                META TAGS
        -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="<?php echo $app->theme->charset() ?>">
	<meta name="description" content="<?php echo $app->theme->description() ?>">
	<meta name="keywords" content="<?php echo $app->theme->keywords() ?>">
	<meta name="author" content="<?php echo $app->theme->author() ?>">
	<link rel="icon" type="image/png" href="favicon.ico">


	<!--
                STYLES
        -->
	<link rel="stylesheet" href="<?php echo BASE_URL ?>assets/css/flickity.css">
	<link rel="stylesheet" href="<?php echo BASE_URL ?>assets/css/style.css">

	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<!--
                Dynamic STYLE BY PAGE
        -->
	<?php
	$styleUrl = BASE_URL . 'assets/css/' . PAGE . '.css';
	if (file_get_contents($styleUrl)) {
		echo '<link rel="stylesheet" href="' . $styleUrl . '">';
	}
	?>
</head>

<body page="<?php echo PAGE ?>">
	<nav>
		<ul class="social">
			<li>
				<a href="#"><i class="fab fa-facebook-f"></i></a>
			</li>
			<li>
				<a href="#"><i class="fab fa-twitter"></i></a>
			</li>
			<li>
				<a href="#"><i class="far fa-clipboard"></i></a>
			</li>

		</ul>
		<a href="<?php echo BASE_URL?>" class="logo">Blog.</a>
		<ul>
			<li>
				<a href="<?php echo BASE_URL ?>">Home</a>
			</li>
			<li>
				<a href="<?php echo BASE_URL ?>articles">Articles</a>
			</li>
			<li>
				<a href="<?php echo BASE_URL ?>">Contact</a>
			</li>

		</ul>
	</nav>