<?php
/**
 * Template Name: Projets
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
$projects = prd_get_projects();
?>

<section class="page-hero">
    <div class="container">
        <div class="breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Accueil</a>
            <span class="sep">/</span>
            <span>Projets</span>
        </div>
        <span class="eyebrow">Portfolio</span>
        <h1>Projets</h1>
        <p class="lead">Projets réalisés dans le cadre de ma formation ou sur mon temps libre. Cliquez sur une carte pour ouvrir la fiche détaillée.</p>
    </div>
</section>

<section>
    <div class="container">
        <div class="projects-grid">
            <?php $i = 1; foreach ( $projects as $p ) : ?>
                <a href="<?php echo prd_page_url( $p['url'] ); ?>" class="project-item">
                    <span class="pi-num"><?php echo str_pad( $i, 2, '0', STR_PAD_LEFT ); ?> &middot; <?php echo esc_html( $p['year'] ); ?></span>
                    <h3><?php echo esc_html( $p['title'] ); ?></h3>
                    <p><?php echo esc_html( $p['tagline'] ); ?></p>
                    <span class="pi-cta">Voir le projet <span>&rarr;</span></span>
                </a>
            <?php $i++; endforeach; ?>

            <div class="project-item project-item--empty">
                <span class="pi-num">&mdash;</span>
                <h3>Bientôt</h3>
                <p>D'autres projets seront ajoutés au fil du BTS SIO.</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
