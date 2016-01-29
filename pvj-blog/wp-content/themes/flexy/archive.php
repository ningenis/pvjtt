<?php
/**
 * The template for displaying Archive pages
 * @package Flexy
 * @since Flexy 1.0
 */

get_header(); ?>

	<section id="primary" class="site-content">
		<div id="content" role="main">

		<?php if ( have_posts() ) : ?>
			<header class="archive-header">
				<h2 class="archive-title"><?php
					if ( is_day() ) :
						printf( __( 'Daily Archives: %s', 'flexy' ), '<span>' . get_the_date() . '</span>' );
					elseif ( is_month() ) :
						printf( __( 'Monthly Archives: %s', 'flexy' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'flexy' ) ) . '</span>' );
					elseif ( is_year() ) :
						printf( __( 'Yearly Archives: %s', 'flexy' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'flexy' ) ) . '</span>' );
					else :
						_e( 'Archives', 'flexy' );
					endif;
				?></h2>
			</header><!-- .archive-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/* Include the post format-specific template for the content. If you want to
				 * this in a child theme then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );

			endwhile;

			flexy_content_nav( 'nav-below' );
			?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>