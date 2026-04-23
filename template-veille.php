<?php
/**
 * Template Name: Veille technologique
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
?>

<section class="page-hero">
    <div class="container">
        <div class="breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Accueil</a>
            <span class="sep">/</span>
            <span>Veille technologique</span>
        </div>
        <span class="eyebrow">BTS SIO — Épreuve E5</span>
        <h1>Veille technologique</h1>
        <p>Suivi régulier d'un thème technologique lié à l'informatique : sources, synthèses et évolutions observées.</p>
    </div>
</section>

<section>
    <div class="container">
        <div class="content-block">

            <dl class="project-meta">
                <div class="meta-item"><dt>Thème</dt><dd><em>À compléter</em></dd></div>
                <div class="meta-item"><dt>Période</dt><dd>2025 – 2026</dd></div>
                <div class="meta-item"><dt>Fréquence</dt><dd>Hebdomadaire</dd></div>
            </dl>

            <h2>Sujet retenu</h2>
            <p><em>Préciser ici le sujet de veille choisi (ex : sécurité des réseaux Wi-Fi, évolution de Linux, conteneurisation, IA générative, IPv6, etc.) et expliquer pourquoi il a été choisi.</em></p>

            <h2>Pourquoi ce sujet ?</h2>
            <p><em>Justifier en 3-4 lignes : pertinence pour le BTS SIO, centre d'intérêt personnel, enjeux professionnels anticipés.</em></p>

            <h2>Sources suivies</h2>
            <ul>
                <li><em>Source 1 — nom + URL (ex : Le Monde Informatique)</em></li>
                <li><em>Source 2 — nom + URL (ex : ZDNet, Next INpact, Clubic Pro…)</em></li>
                <li><em>Flux RSS / newsletter / podcast</em></li>
                <li><em>Comptes X / Mastodon / LinkedIn</em></li>
            </ul>

            <h2>Outils utilisés</h2>
            <div class="tags">
                <span class="tag">Feedly</span>
                <span class="tag">Flux RSS</span>
                <span class="tag">Newsletter</span>
                <span class="tag">Bookmarks</span>
            </div>

            <h2>Synthèses</h2>

            <h3>Article 1 — <em>Titre</em> (date)</h3>
            <p><em>Résumé en 4-5 lignes : ce que dit l'article, ce qu'on en retient, lien avec le BTS SIO.</em></p>

            <h3>Article 2 — <em>Titre</em> (date)</h3>
            <p><em>Résumé.</em></p>

            <h3>Article 3 — <em>Titre</em> (date)</h3>
            <p><em>Résumé.</em></p>

            <h2>Bilan</h2>
            <p><em>Ce que cette veille m'a appris, les évolutions notables observées, comment cela influence mes choix de stage / de parcours.</em></p>

            <div class="actions-row">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn--outline">Retour à l'accueil</a>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>
