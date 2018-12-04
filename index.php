<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<div class="slider"
		<div class="row">
			<?php
			echo do_shortcode('[smartslider3 slider=2]');
			?>
		</div>
</div>

<div class="container">

	<div class="starter-template margin36">
		<h1><a href="http://kbfrs.ru/category/news/">Все новости</a></h1>
		 <?php
							$args = array( 'cat'=>'-4', 'posts_per_page' => '6', 'orderby' => 'post_date', 'post_status' => 'publish');
							$the_query = new WP_Query( $args );
							 if ($the_query->have_posts()) {
                                    while ($the_query-> have_posts() ) : $the_query->the_post(); ?>
                                        <?php get_template_part( 'template-parts/post/content', 'newsmain' ); ?>
                                    <?endwhile;?>
       
                            <?php
                  } else {
                  }
                ?>
		
		
		
		
		
	</div>

</div><!-- /.container -->

<div class="polezn">
<ul class="ovt">
	<li><a href="http://parlament.kbr.ru/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri()?>/img/parlament.jpg"></a></li>
	<li><a href="http://pravitelstvo.kbr.ru/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri()?>/img/pravit.jpg"></a></li>
	<li><a href="http://glava.kbr.ru/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri()?>/img/kokov.jpg"></a></li>
	<li><img src="<?php echo get_stylesheet_directory_uri()?>/img/Anti.gif"></li>
</ul>

</div>








<?php get_footer();
