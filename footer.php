<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
</main><!-- #site-main -->

<footer class="site-footer">
    <div class="container">
        <div>
            <span class="footer-brand">Romain Dacet</span>
            <p>Étudiant BTS SIO &middot; Arras</p>
            <p><a href="mailto:romaindacet11@gmail.com">romaindacet11@gmail.com</a></p>
        </div>
        <div>
            <p><strong>Navigation</strong></p>
            <p><a href="<?php echo prd_page_url( 'cv' ); ?>">CV</a> &middot; <a href="<?php echo prd_page_url( 'projets' ); ?>">Projets</a> &middot; <a href="<?php echo prd_page_url( 'contact' ); ?>">Contact</a></p>
        </div>
        <p class="legal">
            &copy; <?php echo date( 'Y' ); ?> &middot; Tous droits réservés
        </p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
