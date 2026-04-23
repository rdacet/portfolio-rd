<?php
/**
 * Page d'accueil — dispatch vers les sections du portfolio.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
$photo_file = get_template_directory() . '/assets/img/photo.jpg';
$has_photo  = file_exists( $photo_file );

$sections = array(
    array(
        'num'   => '01',
        'url'   => prd_page_url( 'cv' ),
        'title' => 'CV',
        'desc'  => 'Parcours, formations, compétences techniques et expériences professionnelles.',
    ),
    array(
        'num'   => '02',
        'url'   => prd_page_url( 'lettre-motivation' ),
        'title' => 'Lettre de motivation',
        'desc'  => 'Candidature pour un stage réseau du 25 mai au 4 juillet 2026.',
    ),
    array(
        'num'   => '03',
        'url'   => prd_page_url( 'projets' ),
        'title' => 'Projets',
        'desc'  => 'Projets réalisés pendant ma formation — WordPress, réseau, systèmes.',
    ),
    array(
        'num'   => '04',
        'url'   => prd_page_url( 'veille' ),
        'title' => 'Veille technologique',
        'desc'  => 'Thème suivi, sources et synthèses périodiques.',
    ),
    array(
        'num'   => '05',
        'url'   => prd_page_url( 'contact' ),
        'title' => 'Contact',
        'desc'  => 'Pour toute proposition de stage ou échange professionnel.',
    ),
);
?>

<!-- Hero -->
<section class="hero">
    <div class="container">
        <div class="hero-grid">
            <div class="hero-text">
                <span class="eyebrow">Portfolio &middot; BTS SIO</span>
                <h1>Romain Dacet,<br><span class="accent">technicien réseau</span><br>en formation.</h1>
                <p class="lead">
                    Étudiant en BTS SIO au lycée Guy Mollet à Arras, passionné par les infrastructures informatiques. À la recherche d'un stage réseau du 25 mai au 4 juillet 2026.
                </p>
                <div class="hero-actions">
                    <a href="<?php echo prd_page_url( 'cv' ); ?>" class="btn">Consulter mon CV <span class="arrow-i">&rarr;</span></a>
                    <a href="<?php echo prd_page_url( 'projets' ); ?>" class="btn btn--outline">Voir les projets</a>
                </div>
            </div>
            <div class="hero-photo">
                <?php if ( $has_photo ) : ?>
                    <img src="<?php echo prd_img( 'photo.jpg' ); ?>" alt="Photo de Romain Dacet">
                <?php else : ?>
                    <div class="hero-photo-placeholder">
                        photo.jpg
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Liste éditoriale -->
<section>
    <div class="container">
        <div class="section-head">
            <div class="section-head-left">
                <span class="eyebrow">Sommaire</span>
                <h2>Explorer le portfolio</h2>
                <p>Chaque section possède sa page dédiée. Les documents officiels (CV, lettre) sont téléchargeables au format PDF.</p>
            </div>
        </div>

        <ul class="nav-list">
            <?php foreach ( $sections as $s ) : ?>
                <li>
                    <a href="<?php echo esc_url( $s['url'] ); ?>">
                        <span class="np-num"><?php echo esc_html( $s['num'] ); ?></span>
                        <span class="np-main">
                            <span class="np-title"><?php echo esc_html( $s['title'] ); ?></span>
                            <span class="np-desc"><?php echo esc_html( $s['desc'] ); ?></span>
                        </span>
                        <span class="np-arrow">&rarr;</span>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>

<?php get_footer(); ?>
