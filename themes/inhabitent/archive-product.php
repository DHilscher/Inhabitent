<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */?>

<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				

$terms = get_terms ('product-type');

if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
    echo '<ul>';
    foreach ( $terms as $term ) {
        echo '<li><a href="' . get_term_link( $term ) . '">' . $term->name . '</a></li>';
    }
    echo '</ul>';
}
?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
<section class="product-grid">
<?php while ( have_posts() ) : the_post(); ?>
		<div class="product-grid-item" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<div class="thumbnail-wrapper">
				<?php if ( has_post_thumbnail() ) : ?>
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail( 'medium' ); ?>
					</a>
				<?php endif; ?>
				</div>
				<div class="product-info">
					<?php the_title( sprintf( '<h2 class="entry-title">', esc_url( get_permalink() ) ), '.....', CFS()->get( 'price' ), '</h2>' ); ?>
					<?php echo CFS()->get( 'price' ); ?>
				</div>
			</header><!-- .entry-header -->
		</div>
<?php endwhile; ?>
</section>
	<?php else : ?>
		<?php get_template_part( 'template-parts/content', 'none' ); ?>
	<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>


