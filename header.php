
<!DOCTYPE html>
<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package resto
 */

?>
<html lang="pl">
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Alegreya|Gentium+Basic|Nobile" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/static/screen.css">
<!-- ładuje pliki z pluginów i inne -->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<nav class="navbar navbar-default">

		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<div class="row">
				<div class="col-md-12">
					<h1 class="site-title"><a href="#">Allenia</a></h1>
					<h2 class="subheader">you always want to screw it</h2>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div id="navbar" class="navbar-collapse collapse">
					

						<?php wp_nav_menu(array( 'theme_location' => 'primary', 'menu_id' => 'primary_menu') ); ?>
<!-- 							<li><a href="#">Home</a></li>
							<li><a href="../navbar-fixed-top/">About</a></li>
							<li><a href="portfolio.html">Portfolio</a></li>
							<li><a href="../navbar-fixed-top/">Events</a></li>
							<li><a href="contact.html">Contact</a></li>
							<li><a href="../navbar-fixed-top/">Search</a></li>
							<li><a href="about-single.html">About Single</a></li> -->
					</div>
				</div>
			</div>
		</div>

	</nav><!-- #site-navigation -->





