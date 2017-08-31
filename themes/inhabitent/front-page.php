<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */ ?>

<?php get_header(); ?>
<section class="home-hero">
    <img src="<?php echo get_template_directory_uri(); ?>/images/inhabitent-logo-full.svg" alt="Inhabitent Logo">
</section>


<?php
$terms = get_terms ('product-type');
if ( ! empty( $terms ) && ! is_wp_error( $terms ) ): ?>
    <section class="front-page-shop-container">  
        <h2>Shop Stuff</h2>      
        <ul class="front-page-terms">

            <?php foreach ( $terms as $term ) : ?>
                <li class="front-page-term">
                    <img src="<?php echo get_template_directory_uri( ) . '/images/' . $term->slug . '.svg'; ?>" alt="<?php echo $term->slug ?>">
                    <p class="front-page-term-description"><?php echo $term->description; ?></p>
                    <h3 class="shop-button"><a class="front-page-term-link" href="<?php echo get_term_link( $term );?>"><?= $term->name; ?>  Stuff</a></h3>
                </li>
            <?php endforeach; ?>

        </ul>
    </section>    
<?php endif; ?>

<section class="journal-container">
    <h2>Inhabitent Journal</h2>
    <div class="most-recent-journals">
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
            <div class="journal-info-wrapper">
                <div class="entry-meta">
                    <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
                </div>
                <h3><a class="post-permalink" href="<? echo get_post_permalink() ?>"><?php the_title(); ?></a></h3>
            </div>
            <a class="journal-button" href="<? echo get_post_permalink() ?>">Read Entry</a>          
        </div>
        <?php endforeach; wp_reset_postdata(); ?>
    </div>
</section>

<section class="adventure-container">
    <h2>Latest Adventures</h2>
    <div class="adventure-inner-container">
        <div class="adventure-one">
            <h3 class="large-text"><a href="adventure/getting-back-to-nature-in-a-canoe">Getting Back To Nature in a Canoe</a></h3>
            <div class="read-more">
                <a class="adventure-button-hover" href="adventure/getting-back-to-nature-in-a-canoe">Read More</a>
            </div>
        </div>
        <div class="adventure-group">
            <div class="adventure-two">
                <h3 class="large-text"><a href="adventure/a-night-with-friends-at-the-beach">A Night with Friends at the Beach</a></h3>
                <div class="read-more">
                    <a class="adventure-button-hover" href="adventure/a-night-with-friends-at-the-beach">Read More</a>
                </div>
            </div>

            <div class="adventure-three">
                <h3 class="small-text"><a href="adventure/taking-in-the-view-at-big-mountain">Taking in the View at Big Mountain</a></h3>
                <div class="read-more read-more-square">
                    <a class="adventure-button-hover" href="adventure/taking-in-the-view-at-big-mountain">Read More</a>
                </div>
            </div>
            <div class="adventure-four">
                <h3 class="small-text"><a href="adventure/star-gazing-at-the-night-sky">Star-Gazing at the Night Sky</a></h3>
                <div class="read-more read-more-square">
                    <a class="adventure-button-hover" href="adventure/star-gazing-at-the-night-sky">Read More</a>
                </div>
            </div>
        </div>
    </div>

    <p><a class="adventure-button-solid" href="adventures">More Adventures</a></p>
</section>

<?php get_footer(); ?>