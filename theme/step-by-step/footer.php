<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
</main>
<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <div>
                <a class="brand" href="<?php echo esc_url(home_url('/')); ?>">
                    <span class="brand-logo footer-brand-logo" aria-hidden="true">
                        <img src="<?php echo esc_url(step_by_step_image('logo_full')); ?>" alt="">
                    </span>
                </a>
                <p>Neurologopedia i fizjoterapia dziecięca w Babicach Nowych. Wsparcie najmłodszych dzieci i ich rodziców od pierwszych dni życia.</p>
            </div>
            <div class="footer-links" aria-label="Linki">
                <a href="<?php echo esc_url(home_url('/neurologopedia-dziecieca/')); ?>">Neurologopedia dziecięca</a>
                <a href="<?php echo esc_url(home_url('/fizjoterapia-dziecieca/')); ?>">Fizjoterapia dziecięca</a>
                <a href="<?php echo esc_url(home_url('/#kontakt')); ?>">Kontakt</a>
            </div>
            <div>
                <a class="button" href="<?php echo esc_url(step_by_step_booksy_url()); ?>" target="_blank" rel="noopener">Umów wizytę</a>
            </div>
        </div>
        <div class="footer-bottom">© <?php echo esc_html(date('Y')); ?> Step by Step. Wszystkie prawa zastrzeżone.</div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
