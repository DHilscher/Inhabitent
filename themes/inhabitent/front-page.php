<?php get_header(); ?>
<div class="most-recent-journals"
    <?php
    $args = array( 'post_type' => 'post', 'order' => 'DESC', 'posts_per_page' => 3, 'orderby' => 'date' );
    $journal_posts = get_posts( $args ); // returns an array of posts
    ?>
    <?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
    <div class="journal-recent-block-item">
        <div class="journal-thumbnail-wrapper">
            <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'medium' ); ?>
            <?php endif; ?>
        </div>
        <div class="entry-meta">
            <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
        </div>
    <a href="<? echo get_post_permalink() ?>"><?php the_title(); ?></a>
    </div>
    <?php endforeach; wp_reset_postdata(); ?>
</div>

<?php get_footer(); ?>
