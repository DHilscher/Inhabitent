<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="thumbnail-container">
				<header class="entry-header">
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'large' ); ?>
					<?php endif; ?>
				</header><!-- .entry-header -->
			</div>

			<div class="entry-content">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<?php the_content(); ?>
				<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
					'after'  => '</div>',
				) );?>
					<p class="product-price"><?php echo CFS()->get( 'price' ); ?></p>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content()?>
				<?php endwhile; // End of the loop. ?>
				<div class="buttons-container">
					<button type="button">
            			<p class="social-button"><i class="fa fa-facebook"></i>  Like</p>
        			</button>
					<button type="button">
            			<p class="social-button"><i class="fa fa-twitter"></i>  Tweet</a>          
        			</button>
					<button type="button">
            			<p class="social-button"><i class="fa fa-pinterest"></i>  Pin</a>          
        			</button>
				</div>
			</div><!-- .entry-content -->
		</article><!-- #post-## -->

		
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>