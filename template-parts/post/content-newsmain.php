<?php
/**
 * Template part for displaying page content in news.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package 
 */
?>



<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">		
    <div id="post-<?php the_ID(); ?>">
    <?php
                //$image = "/wp-content/assets/header-mini.png";
                if (get_the_post_thumbnail_url($post->ID, 'large')) {
                    $image = get_the_post_thumbnail_url($post->ID, 'large');
                } ?>
				

	   
	<?php if ($image){ ?>
      
		
			<div class="block_new_main">
			<p class=""><?php the_time('j F Y'); ?></p>
            <div class="post-image">
              <div class="post-thumbnail_back" style="background-image: url(<?php echo $image; ?>)"></div></div>
            <?php the_title( sprintf( '<h3><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
		    </div>
		   
      
	<?php } else { ?>
      
	   
			<div class="block_new_main">
			<p class=""><?php the_time('j F Y'); ?></p>
            <?php the_title( sprintf( '<h3><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
		    </div>
		 
      
	<?php } ?>

	<br>


    </div>	
	
</div>