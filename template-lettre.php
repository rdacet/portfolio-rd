<?php
/**
 * Template Name: Lettre de motivation
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
?>

<section class="page-hero">
    <div class="container">
        <div class="breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Accueil</a>
            <span class="sep">/</span>
            <span>Lettre de motivation</span>
        </div>
        <span class="eyebrow">Candidature stage BTS SIO</span>
        <h1>Lettre de motivation</h1>
        <p>Candidature pour un stage dans le domaine du réseau informatique, du 25 mai 2026 au 4 juillet 2026.</p>
        <div class="actions-row">
            <a href="<?php echo prd_pdf( 'lettre-de-motivation.pdf' ); ?>" class="btn" download>Télécharger le PDF</a>
            <a href="<?php echo prd_pdf( 'lettre-de-motivation.pdf' ); ?>" class="btn btn--outline" target="_blank" rel="noopener">Ouvrir dans un onglet</a>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="content-block">

            <p><strong>Romain Dacet</strong><br>
            11 Hameau des Grives<br>
            62223 Saint-Nicolas<br>
            07 69 17 68 93 &middot; <a href="mailto:romaindacet11@gmail.com">romaindacet11@gmail.com</a></p>

            <p><em>Saint-Nicolas, le 2 décembre 2025</em></p>

            <p><strong>À l'attention de M. / Mme.</strong></p>

            <p>Madame, Monsieur,</p>

            <p>Je suis actuellement en formation au sein du BTS SIO (Services Informatiques aux Organisations) au lycée Guy Mollet à Arras et je vous présente ma candidature pour un <strong>stage dans le domaine du réseau informatique</strong> qui se déroulera du <strong>25 mai 2026 au 4 juillet 2026</strong>. Fortement motivé par les enjeux techniques liés à l'infrastructure informatique, je suis convaincu que votre entreprise me permettra de développer mes compétences et de contribuer à vos projets.</p>

            <p>Au cours de ma formation, j'ai acquis des connaissances solides dans les domaines suivants :</p>
            <ul>
                <li>Installation et configuration d'OS (Windows, Linux)</li>
                <li>Mise en place et configuration de routeurs</li>
                <li>Gestion d'infrastructure réseau</li>
                <li>Notions de sécurité informatique et réseau</li>
            </ul>

            <p>Ces compétences techniques, associées à ma <strong>capacité d'apprentissage rapide</strong> et à ma <strong>rigueur</strong>, me permettront de m'adapter rapidement à votre environnement professionnel et de contribuer efficacement aux missions qui me seront confiées.</p>

            <p>Je suis particulièrement attiré par votre structure car elle me permettra de mettre en pratique les connaissances théoriques acquises lors de ma formation et de progresser dans un environnement professionnel structuré. L'expertise de votre équipe en matière d'infrastructure réseau est une opportunité exceptionnelle pour renforcer mes compétences techniques et développer une première expérience concrète du métier.</p>

            <p>Dans l'attente de votre retour, je reste à votre disposition pour échanger davantage. Je vous prie d'agréer, Madame, Monsieur, l'expression de mes salutations distinguées.</p>

            <p><strong>Romain Dacet</strong></p>

            <h2>Lettre en PDF</h2>
            <iframe class="pdf-frame" src="<?php echo prd_pdf( 'lettre-de-motivation.pdf' ); ?>" title="Lettre de motivation"></iframe>

        </div>
    </div>
</section>

<?php get_footer(); ?>
