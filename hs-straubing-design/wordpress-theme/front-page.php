<?php
/**
 * Homepage Template
 *
 * @package HS_Straubing
 * @since 1.0.0
 */

get_header();
?>

<?php
/**
 * Hero Section
 */
if ( get_field( 'hero_image' ) ) : ?>
    <section class="hero-section <?php echo get_field( 'hero_overlay' ) ? 'overlay-dark' : ''; ?>">
        <img src="<?php echo esc_url( get_field( 'hero_image' )['url'] ); ?>" 
             alt="<?php echo esc_attr( get_field( 'hero_image' )['alt'] ); ?>" 
             class="hero-image">
        
        <?php if ( get_field( 'hero_content' ) ) : ?>
            <div class="hero-content">
                <?php echo wp_kses_post( get_field( 'hero_content' ) ); ?>
            </div>
        <?php endif; ?>
    </section>
<?php endif; ?>

<?php
/**
 * Services/Leistungen Section
 */
?>
<section class="services-section section">
    <div class="container">
        <div class="section-header text-center">
            <h2><?php esc_html_e( 'Unsere Leistungen', 'hs-straubing' ); ?></h2>
            <p><?php esc_html_e( 'Energie-, Klima- & Haustechnik aus einer Hand', 'hs-straubing' ); ?></p>
        </div>

        <div class="services-grid">
            <?php
            $services = new WP_Query( array(
                'post_type'      => 'service',
                'posts_per_page' => 6,
                'orderby'        => 'menu_order',
                'order'          => 'ASC',
            ) );

            if ( $services->have_posts() ) :
                while ( $services->have_posts() ) : $services->the_post();
                    ?>
                    <div class="service-card card">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail( 'hs-card', array( 'class' => 'card-image' ) ); ?>
                            </a>
                        <?php endif; ?>
                        
                        <div class="card-content">
                            <h3 class="card-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            
                            <?php if ( has_excerpt() ) : ?>
                                <p class="card-excerpt"><?php the_excerpt(); ?></p>
                            <?php endif; ?>
                            
                            <a href="<?php the_permalink(); ?>" class="cta-transparent">
                                <?php esc_html_e( 'Mehr erfahren', 'hs-straubing' ); ?>
                            </a>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</section>

<?php
/**
 * Image-Text Section (Über uns)
 */
?>
<section class="about-section image-text-section with-bg">
    <div class="image-text-holder">
        <div class="image-text-content">
            <h2><?php esc_html_e( 'Wer wir sind', 'hs-straubing' ); ?></h2>
            <p>
                <?php esc_html_e( 'Mit Karl Geiger und Florian Cizek haben Sie es mit zwei erfahrenen Meistern im Bereich Heizung/Lüftung/Sanitär zu tun, unterstützt von einem qualifizierten und motivierten jungen Team.', 'hs-straubing' ); ?>
            </p>
            <p>
                <?php esc_html_e( 'Wir bieten Ihnen überzeugende Arbeit, ein breites Leistungsspektrum und vor allem eine kompetente Beratung in Landshut, München, Passau und Straubing.', 'hs-straubing' ); ?>
            </p>
            <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'ueber-uns' ) ) ); ?>" class="cta-full">
                <?php esc_html_e( 'Mehr über uns', 'hs-straubing' ); ?>
            </a>
        </div>
        
        <div class="image-text-image-holder">
            <?php if ( get_field( 'about_image' ) ) : ?>
                <img src="<?php echo esc_url( get_field( 'about_image' )['url'] ); ?>" 
                     alt="<?php echo esc_attr( get_field( 'about_image' )['alt'] ); ?>" 
                     class="image-text-image">
            <?php endif; ?>
        </div>
    </div>
    
    <!-- Background colored shape -->
    <div class="bg-colored" style="background-color: var(--color-gray-light);"></div>
</section>

<?php
/**
 * Team Section
 */
$team = new WP_Query( array(
    'post_type'      => 'team',
    'posts_per_page' => 4,
) );

if ( $team->have_posts() ) : ?>
    <section class="team-section section">
        <div class="container">
            <div class="section-header text-center">
                <h2><?php esc_html_e( 'Unser Team', 'hs-straubing' ); ?></h2>
            </div>

            <div class="team-swiper swiper">
                <div class="swiper-wrapper">
                    <?php while ( $team->have_posts() ) : $team->the_post(); ?>
                        <div class="swiper-slide team-member">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail( 'hs-team', array( 'class' => 'team-image' ) ); ?>
                            <?php endif; ?>
                            
                            <div class="team-content">
                                <h3><?php the_title(); ?></h3>
                                <?php if ( get_field( 'position' ) ) : ?>
                                    <p class="team-position"><?php echo esc_html( get_field( 'position' ) ); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                
                <!-- Swiper Navigation -->
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>
    <?php
    wp_reset_postdata();
endif;
?>

<?php
/**
 * Testimonials Section
 */
$testimonials = new WP_Query( array(
    'post_type'      => 'testimonial',
    'posts_per_page' => 6,
) );

if ( $testimonials->have_posts() ) : ?>
    <section class="testimonials-section section" style="background-color: var(--color-background);">
        <div class="container">
            <div class="section-header text-center">
                <h2><?php esc_html_e( 'Das sagen unsere Kunden', 'hs-straubing' ); ?></h2>
            </div>

            <div class="testimonials-swiper swiper">
                <div class="swiper-wrapper">
                    <?php while ( $testimonials->have_posts() ) : $testimonials->the_post(); ?>
                        <div class="swiper-slide testimonial-card card">
                            <div class="card-content">
                                <div class="testimonial-quote">
                                    <?php the_content(); ?>
                                </div>
                                
                                <div class="testimonial-author">
                                    <strong><?php the_title(); ?></strong>
                                    <?php if ( get_field( 'company' ) ) : ?>
                                        <span>, <?php echo esc_html( get_field( 'company' ) ); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                
                <!-- Swiper Navigation -->
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>
    <?php
    wp_reset_postdata();
endif;
?>

<?php
/**
 * CTA Banner Section
 */
?>
<section class="cta-banner-section section text-center" style="background-color: var(--color-primary); color: var(--color-white);">
    <div class="container">
        <h2><?php esc_html_e( 'Haben Sie Fragen?', 'hs-straubing' ); ?></h2>
        <p style="font-size: var(--text-xl);">
            <?php esc_html_e( 'Egal ob Heizungsbau, Kaminöfen oder eine komplette Badsanierung. Wir finden stets die beste Lösung für Ihre Immobilie.', 'hs-straubing' ); ?>
        </p>
        <p style="font-size: var(--text-4xl); font-weight: var(--font-weight-bold); margin: 30px 0;">
            <a href="tel:+4994218610588" style="color: var(--color-white);">09421 / 861 05 88</a>
        </p>
        <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'kontakt' ) ) ); ?>" class="cta-dark-arrow">
            <?php esc_html_e( 'Jetzt Kontakt aufnehmen', 'hs-straubing' ); ?>
        </a>
    </div>
</section>

<?php
/**
 * ACF Flexible Content (optional - if you use ACF Flexible Content)
 */
if ( have_rows( 'page_sections' ) ) :
    while ( have_rows( 'page_sections' ) ) : the_row();
        
        // Image-Text Section
        if ( get_row_layout() == 'image_text_section' ) :
            get_template_part( 'template-parts/sections/image-text' );
        
        // Service Cards
        elseif ( get_row_layout() == 'service_cards' ) :
            get_template_part( 'template-parts/sections/service-cards' );
        
        // FAQ Accordion
        elseif ( get_row_layout() == 'faq_section' ) :
            get_template_part( 'template-parts/sections/faq' );
        
        // Contact Form
        elseif ( get_row_layout() == 'contact_form' ) :
            get_template_part( 'template-parts/sections/contact-form' );
        
        endif;
        
    endwhile;
endif;
?>

<?php get_footer(); ?>
