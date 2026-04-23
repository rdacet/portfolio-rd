<?php
/**
 * Template Name: CV
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
$skills      = prd_get_skills();
$formation   = prd_get_formation();
$experiences = prd_get_experiences();
?>

<section class="page-hero">
    <div class="container">
        <div class="breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Accueil</a>
            <span class="sep">/</span>
            <span>CV</span>
        </div>
        <span class="eyebrow">Curriculum vitæ</span>
        <h1>Romain Dacet — Technicien réseau</h1>
        <p>Étudiant en première année de BTS SIO au lycée Guy Mollet à Arras.</p>
        <div class="actions-row">
            <a href="<?php echo prd_pdf( 'cv.pdf' ); ?>" class="btn" download>Télécharger le PDF</a>
            <a href="<?php echo prd_pdf( 'cv.pdf' ); ?>" class="btn btn--outline" target="_blank" rel="noopener">Ouvrir dans un onglet</a>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="content-block">

            <h2>Formation &amp; diplômes</h2>
            <ul>
                <?php foreach ( $formation as $f ) : ?>
                    <li><strong><?php echo esc_html( $f['date'] ); ?> —</strong> <?php echo esc_html( $f['title'] ); ?>. <?php echo esc_html( $f['desc'] ); ?></li>
                <?php endforeach; ?>
            </ul>

            <h2>Expérience professionnelle</h2>
            <ul>
                <?php foreach ( $experiences as $e ) : ?>
                    <li><strong><?php echo esc_html( $e['date'] ); ?> —</strong> <?php echo esc_html( $e['title'] ); ?>. <?php echo esc_html( $e['tagline'] ); ?></li>
                <?php endforeach; ?>
            </ul>

            <h2>Compétences</h2>
            <ul>
                <?php foreach ( $skills as $s ) : ?>
                    <li><strong><?php echo esc_html( $s['name'] ); ?></strong> — <?php echo esc_html( $s['desc'] ); ?></li>
                <?php endforeach; ?>
            </ul>

            <h2>Centres d'intérêt</h2>
            <ul>
                <li>Voyage</li>
                <li>Cinéma</li>
                <li>Taekwondo</li>
            </ul>

            <h2>Coordonnées</h2>
            <ul>
                <li><strong>Téléphone :</strong> 07 69 17 68 93</li>
                <li><strong>Email :</strong> <a href="mailto:romaindacet11@gmail.com">romaindacet11@gmail.com</a></li>
                <li><strong>Adresse :</strong> 11 Hameau des Grives, 62223 Saint-Nicolas</li>
            </ul>

            <h2>CV en PDF</h2>
            <p>Version originale de mon CV, telle que déposée auprès des entreprises :</p>
            <iframe class="pdf-frame" src="<?php echo prd_pdf( 'cv.pdf' ); ?>" title="CV de Romain Dacet"></iframe>

        </div>
    </div>
</section>

<?php get_footer(); ?>
