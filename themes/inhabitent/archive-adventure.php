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
<section class="adventure-grid">
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="adventure-grid-item" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <div class="thumbnail-wrapper">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail( 'medium' ); ?>
                        </a>
                    <?php endif; ?>
                    <div class="adventure-info">
                        <?php the_title( sprintf( '<h2 class="entry-title">', esc_url( get_permalink() ) ), '</h2>' ); ?>
                    </div>
                </div>
            </header><!-- .entry-header -->
        </div>
    <?php endwhile; ?>
</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>


