<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */?>

<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


			<header class="page-header">
				
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
            <h2>Latest Adventures</h2>
            <section class="adventure-grid">
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="adventure-grid-item" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <div class="thumbnail-wrapper">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail( 'large' ); ?>
                                <?php endif; ?>
                                <div class="adventure-info">
                                    <?php the_title( sprintf( '<h3 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
                                    <a class="adventure-button" href="<?php echo get_the_permalink(); ?>">Read More</a>
                                </div>
                            </div>
                        </header><!-- .entry-header -->
                    </div>
                <?php endwhile; ?>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>


