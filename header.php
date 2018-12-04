<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<?php wp_head(); ?>
<style>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto:400');
</style>
</head>

<body <?php body_class(); ?>>
	<div class="header">
		<div class="container">

				<div class="col-sm-2 col-xs-12"><div class="navbar-header">
                  <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri()?>/img/logo.png"></a>
                  </div></div>
				<div class="col-sm-4 col-xs-12">
					КАБАРДИНО-БАЛКАРСКАЯ<br>
					ПРОТИВОПОЖАРНО-СПАСАТЕЛЬНАЯ<br>
					СЛУЖБА<br>
				</div>
				<div class="col-sm-3 col-xs-12">
					Телефон/факс:<br> (8662) 42-55-90,<br> (8662) 42-26-73<br>
					E-mail: gpskbr@mail.ru<br>

				</div>
				<div class="col-sm-3 col-xs-12">
					<span style="float:right;width:100%;"><?php get_search_form(); ?></span>

				</div>


			</div>
		</div>
		<div class="menu">
			<div class="container">

					<?php
					wp_nav_menu(array(
              'menu' => 'Main Menu',
              'container_id' => 'cssmenu',
              'walker' => new CSS_Menu_Walker()
          )); ?>



				
				</div>
			</div>
