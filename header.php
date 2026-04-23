<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Portfolio de Romain Dacet — BTS SIO, technicien réseau. CV, lettre de motivation, projets et veille technologique.">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo">
            <span class="site-title">
                Romain Dacet
                <small>Portfolio</small>
            </span>
        </a>

        <button class="nav-toggle" aria-label="Ouvrir le menu" aria-expanded="false">&#9776;</button>

        <nav class="main-nav" aria-label="Navigation principale">
            <?php
            if ( has_nav_menu( 'primary' ) ) {
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => '',
                    'depth'          => 1,
                ) );
            } else {
                prd_fallback_menu();
            }
            ?>
        </nav>
    </div>
</header>

<main id="site-main">
