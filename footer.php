    <footer class="site-footer">
        <div class="container">
            <div class="copyright">
                <p><?= get_theme_mod('set_copyright', __('Copyright X - All Rights Reserved', 'curso-wordpress-tema-customizado')); ?></p>
            </div>
            <nav class="footer-menu">
                <?php 
                    wp_nav_menu(array(
                        'theme_location' => 'theme_footer_menu',
                        'depth' => 1
                    )) ;
                ?>
            </nav>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>