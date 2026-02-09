<?php
/**
 * The header for HS-Straubing theme
 *
 * @package HS_Straubing
 * @since 1.0.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#main-content">
    <?php esc_html_e( 'Skip to content', 'hs-straubing' ); ?>
</a>

<header id="site-header" class="site-header">
    <div class="header-inner">
        
        <!-- Logo -->
        <div class="header-logo">
            <?php if ( has_custom_logo() ) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <span class="site-title"><?php bloginfo( 'name' ); ?></span>
                </a>
            <?php endif; ?>
        </div>

        <!-- Desktop Navigation -->
        <nav class="header-nav desktop-nav" role="navigation" aria-label="<?php esc_attr_e( 'Primary Navigation', 'hs-straubing' ); ?>">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'menu_class'     => 'primary-menu',
                'container'      => false,
                'fallback_cb'    => false,
            ) );
            ?>
        </nav>

        <!-- CTA Button (optional) -->
        <?php if ( get_field( 'header_cta_text', 'option' ) && get_field( 'header_cta_link', 'option' ) ) : ?>
            <a href="<?php echo esc_url( get_field( 'header_cta_link', 'option' ) ); ?>" class="header-cta cta-full">
                <?php echo esc_html( get_field( 'header_cta_text', 'option' ) ); ?>
            </a>
        <?php endif; ?>

        <!-- Mobile Menu Toggle -->
        <button class="mobile-menu-toggle" aria-label="<?php esc_attr_e( 'Toggle menu', 'hs-straubing' ); ?>" aria-expanded="false">
            <span class="menu-bar"></span>
            <span class="menu-bar"></span>
            <span class="menu-bar"></span>
        </button>

    </div>

    <!-- Mobile Navigation -->
    <nav class="mobile-nav" role="navigation" aria-label="<?php esc_attr_e( 'Mobile Navigation', 'hs-straubing' ); ?>">
        <?php
        wp_nav_menu( array(
            'theme_location' => 'primary',
            'menu_class'     => 'mobile-menu',
            'container'      => false,
            'fallback_cb'    => false,
        ) );
        ?>
    </nav>
    
    <!-- Header Background (blur effect) -->
    <div class="header-bg"></div>
    
</header>

<main id="main-content" class="site-main">
