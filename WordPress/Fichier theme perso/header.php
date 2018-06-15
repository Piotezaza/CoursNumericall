<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <!--[if lt IE 9]>
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
        <![endif]-->
        <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<header class="main-header">
		<div class="wrapper">
			<h1 class="logo">Marble</h1>
			<nav>
				<!-- <ul>
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Journal</a></li>
					<li><a href="#">Service</a></li>
					<li><a href="#">Features</a></li>
					<li><a href="#">Contact</a></li>
				</ul> -->
				<?php
					wp_nav_menu( array(
						'theme_location' => 'main_menu'
					) );
				?>
			</nav>
			<!-- ./main navigation -->
		</div>
		<!-- ./wrapper -->
	</header>
	<!-- ./main-header -->
	
	<main>