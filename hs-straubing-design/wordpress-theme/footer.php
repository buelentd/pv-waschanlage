<?php
/**
 * The footer for HS-Straubing theme
 *
 * @package HS_Straubing
 * @since 1.0.0
 */
?>

</main><!-- #main-content -->

<footer id="site-footer" class="site-footer">
    <div class="container">
        <div class="footer-inner">
            
            <!-- Footer Column 1 -->
            <div class="footer-column footer-col-1">
                <?php if ( get_field( 'footer_logo', 'option' ) ) : ?>
                    <img src="<?php echo esc_url( get_field( 'footer_logo', 'option' ) ); ?>" 
                         alt="<?php bloginfo( 'name' ); ?>" 
                         class="footer-logo">
                <?php elseif ( has_custom_logo() ) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <h3><?php bloginfo( 'name' ); ?></h3>
                <?php endif; ?>
                
                <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-1' ); ?>
                <?php endif; ?>
            </div>

            <!-- Footer Column 2 -->
            <div class="footer-column footer-col-2">
                <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-2' ); ?>
                <?php else : ?>
                    <h4><?php esc_html_e( 'Navigation', 'hs-straubing' ); ?></h4>
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'footer',
                        'menu_class'     => 'footer-menu',
                        'container'      => false,
                        'fallback_cb'    => false,
                    ) );
                    ?>
                <?php endif; ?>
            </div>

            <!-- Footer Column 3 -->
            <div class="footer-column footer-col-3">
                <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-3' ); ?>
                <?php else : ?>
                    <h4><?php esc_html_e( 'Kontakt', 'hs-straubing' ); ?></h4>
                    <p>
                        <strong>Geiger & Cizek</strong><br>
                        Energie-, Klima- & Haustechnik<br>
                        Straubing
                    </p>
                    <p>
                        Tel: <a href="tel:+4994218610588">09421 / 861 05 88</a>
                    </p>
                <?php endif; ?>
            </div>

        </div><!-- .footer-inner -->

        <!-- Footer Bottom / Social Media -->
        <div class="footer-bottom">
            
            <?php if ( have_rows( 'social_media_links', 'option' ) ) : ?>
                <div class="footer-social">
                    <?php while ( have_rows( 'social_media_links', 'option' ) ) : the_row(); ?>
                        <?php 
                        $social_icon = get_sub_field( 'icon' );
                        $social_url  = get_sub_field( 'url' );
                        $social_name = get_sub_field( 'name' );
                        ?>
                        <a href="<?php echo esc_url( $social_url ); ?>" 
                           class="footer-social-link" 
                           target="_blank" 
                           rel="noopener noreferrer"
                           aria-label="<?php echo esc_attr( $social_name ); ?>">
                            <?php if ( $social_icon ) : ?>
                                <img src="<?php echo esc_url( $social_icon ); ?>" 
                                     alt="<?php echo esc_attr( $social_name ); ?>">
                            <?php endif; ?>
                        </a>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>

            <!-- Copyright & Legal Links -->
            <div class="footer-copyright">
                <?php if ( get_field( 'copyright_text', 'option' ) ) : ?>
                    <p><?php echo wp_kses_post( get_field( 'copyright_text', 'option' ) ); ?></p>
                <?php else : ?>
                    <p>&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'Alle Rechte vorbehalten.', 'hs-straubing' ); ?></p>
                <?php endif; ?>
                
                <?php
                // Footer Navigation (Impressum, Datenschutz, etc.)
                wp_nav_menu( array(
                    'theme_location' => 'footer',
                    'menu_class'     => 'footer-legal-menu',
                    'container'      => false,
                    'fallback_cb'    => false,
                    'depth'          => 1,
                ) );
                ?>
            </div>

        </div><!-- .footer-bottom -->

    </div><!-- .container -->

    <!-- Scroll to Top Button (optional) -->
    <button class="scroll-to-top" aria-label="<?php esc_attr_e( 'Scroll to top', 'hs-straubing' ); ?>">
        ↑
    </button>

</footer><!-- #site-footer -->

<?php wp_footer(); ?>

</body>
</html>
