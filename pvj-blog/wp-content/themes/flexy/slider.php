<?php
// Custom Slider For Flexy 
?>

<!-- slideshow -->

    <div id="myCarousel" class="carousel <?php echo get_theme_mod( 'flexy_slider_transition' ); ?>">
        <div class="carousel-inner">
		
        <?php $firstClass = 'active'; ?> 
        <?php if (have_posts()) : ?>
          
		<?php $flexy_query = new WP_Query(array(
		'category_name'  => get_theme_mod( 'flexy_slide_cat' ),
		'posts_per_page' => get_theme_mod( 'flexy_slide_number' )
		)); ?>
	
    	<?php while ($flexy_query->have_posts()) : $flexy_query->the_post(); ?>
        
        <div class="item <?php echo $firstClass; ?>">
            <?php $firstClass = ""; ?>
			
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('page-feature'); ?></a>
            <div class="carousel-caption">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p class="lead"><?php echo flexy_slider_excerpt(); ?></p>
            </div>
			
        </div>
			
      	<?php endwhile; endif; ?>
        <?php wp_reset_query(); ?>       
        </div>    
        
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    
    </div><!-- #myCarousel -->