<?php
/**
 * Template Name: Contact
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
?>

<section class="page-hero">
    <div class="container">
        <div class="breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Accueil</a>
            <span class="sep">/</span>
            <span>Contact</span>
        </div>
        <span class="eyebrow">Prenons contact</span>
        <h1>Me contacter</h1>
        <p class="lead">Pour toute proposition de stage, question ou échange professionnel.</p>
    </div>
</section>

<section>
    <div class="container">
        <div class="contact-grid contact">
            <div class="contact-info">
                <p><strong>Téléphone</strong>
                07 69 17 68 93</p>

                <p><strong>Email</strong>
                <a href="mailto:romaindacet11@gmail.com">romaindacet11@gmail.com</a></p>
            </div>

            <div class="contact-form">
                <?php
                if ( shortcode_exists( 'wpforms' ) ) {
                    echo do_shortcode( '[wpforms id="22"]' );
                } else {
                    ?>
                    <form action="mailto:romaindacet11@gmail.com" method="post" enctype="text/plain">
                        <input type="text"  name="name"    placeholder="Votre nom" required>
                        <input type="email" name="email"   placeholder="Votre email" required>
                        <textarea name="message" placeholder="Votre message" required></textarea>
                        <button type="submit" class="btn">Envoyer <span class="arrow-i">&rarr;</span></button>
                    </form>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
