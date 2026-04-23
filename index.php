<?php
/**
 * Fallback — liste des articles (requis par WordPress).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header(); ?>

<section>
    <div class="container">
        <?php if ( have_posts() ) : ?>
            <div class="section-title">
                <h2>Articles</h2>
            </div>
            <?php while ( have_posts() ) : the_post(); ?>
                <article style="margin-bottom:2.5rem;">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <div><?php the_excerpt(); ?></div>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p>Aucun contenu pour le moment.</p>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
