<?php
/**
 * Template Name: Projet — Brasserie Terroir & Savoirs
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();

$products = array(
    array(
        'img'  => 'brasserie/produits-01.png',
        'name' => 'Bière Blonde',
        'desc' => 'Légère et rafraîchissante, équilibre parfait entre douceur et amertume. Malts sélectionnés et houblons aromatiques pour des notes subtiles de céréales et une touche florale.',
    ),
    array(
        'img'  => 'brasserie/produits-02.png',
        'name' => 'Bière Brune',
        'desc' => 'Riche et intense, malts torréfiés révélant des arômes de chocolat noir, de caramel et une pointe de café. Texture ronde pour les amateurs de saveurs puissantes.',
    ),
    array(
        'img'  => 'brasserie/produits-03.png',
        'name' => 'Bière IPA',
        'desc' => 'Audacieuse et aromatique, houblons expressifs et amertume affirmée. Arômes d\'agrumes, de fruits tropicaux et de résine de pin ; finale sèche.',
    ),
    array(
        'img'  => 'brasserie/produits-04.png',
        'name' => 'Whisky',
        'desc' => 'Distillé avec soin et vieilli en fûts de chêne : notes de vanille, d\'épices douces, de fruits secs et une pointe de tourbe. Ronde et élégante.',
    ),
    array(
        'img'  => 'brasserie/produits-05.png',
        'name' => 'Gin',
        'desc' => 'Plantes aromatiques locales et épices sélectionnées : genièvre, zestes d\'agrumes et touches herbacées. Un spiritueux raffiné pour cocktails ou dégustation pure.',
    ),
);
?>

<section class="page-hero">
    <div class="container">
        <div class="breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Accueil</a>
            <span class="sep">/</span>
            <a href="<?php echo prd_page_url( 'projets' ); ?>">Projets</a>
            <span class="sep">/</span>
            <span>Brasserie T&amp;S</span>
        </div>
        <span class="eyebrow">Projet BTS SIO &middot; 2026</span>
        <h1>Brasserie <em>Terroir &amp; Savoirs</em></h1>
        <p class="lead">Site vitrine WordPress pour une brasserie artisanale des Hauts-de-France.</p>
        <div class="actions-row">
            <a href="https://rdacetbrasserie.free.nf" class="btn" target="_blank" rel="noopener">Voir le site en ligne <span class="arrow-i">&rarr;</span></a>
            <a href="https://github.com/rdacet/brasserie-ts" class="btn btn--outline" target="_blank" rel="noopener">GitHub</a>
            <a href="<?php echo prd_page_url( 'projets' ); ?>" class="btn btn--outline">Retour aux projets</a>
        </div>
    </div>
</section>

<section>
    <div class="container-sm">
        <div class="content-block">

            <dl class="project-meta">
                <div class="meta-item"><dt>Type</dt><dd>Site vitrine WordPress</dd></div>
                <div class="meta-item"><dt>Année</dt><dd>2026 — 1ʳᵉ année BTS SIO</dd></div>
                <div class="meta-item"><dt>Hébergement</dt><dd>InfinityFree</dd></div>
                <div class="meta-item"><dt>Statut</dt><dd>En ligne</dd></div>
            </dl>

            <h2>Contexte</h2>
            <p>La <strong>Brasserie Terroir &amp; Savoirs</strong>, artisan brasseur situé dans les Hauts-de-France, souhaitait moderniser son image et ses outils de communication grâce au numérique. Le projet consistait à concevoir un <strong>site vitrine WordPress</strong> présentant la brasserie, ses valeurs et sa gamme (bières artisanales et spiritueux).</p>
            <p>Ce projet s'inscrit dans le cadre de ma première année de <strong>BTS SIO</strong> au lycée Guy Mollet à Arras.</p>

            <h2>Cahier des charges</h2>
            <ul>
                <li>Faire apparaître le <strong>logo</strong> de la brasserie et des photos de la production</li>
                <li>Respecter un <strong>code couleur cuivré</strong> (beige, ocre, marron, orange)</li>
                <li>Intégrer une <strong>barre de menu</strong> en haut de page permettant d'accéder aux différentes rubriques</li>
                <li>Présenter les <strong>produits</strong> (bières &amp; spiritueux) avec la possibilité de consulter leurs informations</li>
            </ul>

            <h2>Aperçu des produits</h2>
            <p>Les cinq références présentées sur le site : trois bières artisanales (Blonde, Brune, IPA) et deux spiritueux (Whisky, Gin).</p>

            <div class="projects-grid" style="margin:2rem 0 1rem;">
                <?php foreach ( $products as $p ) : ?>
                    <div class="project-item" style="cursor:default;">
                        <img src="<?php echo prd_img( $p['img'] ); ?>"
                             alt="<?php echo esc_attr( $p['name'] ); ?>"
                             style="max-height:180px;width:auto;margin:0 auto 1rem;object-fit:contain;">
                        <h3 style="text-align:center;"><?php echo esc_html( $p['name'] ); ?></h3>
                        <p style="text-align:center;"><?php echo esc_html( $p['desc'] ); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>

            <h2>Déploiement &amp; mise en ligne</h2>
            <ul>
                <li>Création d'un compte <strong>InfinityFree</strong> avec un sous-domaine gratuit (<code>rdacetbrasserie.free.nf</code>)</li>
                <li>Installation de WordPress via <strong>Softaculous</strong></li>
                <li>Paramétrage du thème, du menu et du formulaire de contact depuis l'admin WordPress</li>
                <li>Mise en ligne des images via le <strong>File Manager cPanel</strong></li>
            </ul>

            <h2>Compétences BTS SIO mobilisées</h2>
            <ul>
                <li><strong>Bloc 1 — Support et mise à disposition de services informatiques :</strong> installation et configuration d'un CMS, déploiement sur hébergement mutualisé, gestion d'un espace d'hébergement distant</li>
                <li><strong>Transverses :</strong> lecture et respect d'un cahier des charges client, prise en compte des contraintes légales (bandeau d'avertissement sur l'alcool)</li>
            </ul>

            <h2>Bilan</h2>
            <p>Ce projet m'a permis de comprendre concrètement comment <strong>WordPress</strong> fonctionne côté administration et configuration. La mise en ligne sur InfinityFree a été l'occasion de pratiquer la gestion d'un hébergement mutualisé réel (FTP, cPanel, File Manager), ce qui rejoint directement les compétences visées par ma recherche de stage en réseau / infrastructure.</p>

            <div class="actions-row">
                <a href="https://rdacetbrasserie.free.nf" class="btn" target="_blank" rel="noopener">Voir le site en ligne <span class="arrow-i">&rarr;</span></a>
                <a href="https://github.com/rdacet/brasserie-ts" class="btn btn--outline" target="_blank" rel="noopener">GitHub</a>
                <a href="<?php echo prd_page_url( 'projets' ); ?>" class="btn btn--outline">Retour aux projets</a>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>
