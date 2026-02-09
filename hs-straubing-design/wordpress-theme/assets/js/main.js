/**
 * Main JavaScript for HS-Straubing Theme
 * 
 * @package HS_Straubing
 * @since 1.0.0
 */

(function($) {
    'use strict';

    /**
     * Document Ready
     */
    $(document).ready(function() {
        
        // Initialize all functions
        initMobileMenu();
        initStickyHeader();
        initSmoothScroll();
        initScrollToTop();
        initSwiper();
        
    });

    /**
     * Mobile Menu Toggle
     */
    function initMobileMenu() {
        const $toggle = $('.mobile-menu-toggle');
        const $mobileNav = $('.mobile-nav');
        const $header = $('.site-header');

        $toggle.on('click', function() {
            $(this).toggleClass('active');
            $mobileNav.toggleClass('active');
            $header.toggleClass('show');
            
            // Update aria-expanded
            const isExpanded = $(this).hasClass('active');
            $(this).attr('aria-expanded', isExpanded);
            
            // Prevent body scroll when menu is open
            if (isExpanded) {
                $('body').css('overflow', 'hidden');
            } else {
                $('body').css('overflow', '');
            }
        });

        // Close menu on window resize
        $(window).on('resize', function() {
            if ($(window).width() > 1600) {
                $toggle.removeClass('active');
                $mobileNav.removeClass('active');
                $header.removeClass('show');
                $('body').css('overflow', '');
            }
        });

        // Close menu when clicking outside
        $(document).on('click', function(e) {
            if (!$(e.target).closest('.site-header').length && $mobileNav.hasClass('active')) {
                $toggle.removeClass('active');
                $mobileNav.removeClass('active');
                $header.removeClass('show');
                $('body').css('overflow', '');
            }
        });
    }

    /**
     * Sticky Header on Scroll
     */
    function initStickyHeader() {
        const $header = $('.site-header');
        let lastScroll = 0;

        $(window).on('scroll', function() {
            const currentScroll = $(this).scrollTop();

            if (currentScroll > 100) {
                $header.addClass('sticky');
            } else {
                $header.removeClass('sticky');
            }

            lastScroll = currentScroll;
        });
    }

    /**
     * Smooth Scroll for Anchor Links
     */
    function initSmoothScroll() {
        $('a[href^="#"]:not([href="#"])').on('click', function(e) {
            const target = $(this.hash);
            
            if (target.length) {
                e.preventDefault();
                
                $('html, body').animate({
                    scrollTop: target.offset().top - 100 // Offset for sticky header
                }, 800);

                // Update URL without jumping
                if (history.pushState) {
                    history.pushState(null, null, this.hash);
                }
            }
        });
    }

    /**
     * Scroll to Top Button
     */
    function initScrollToTop() {
        const $scrollBtn = $('.scroll-to-top');

        // Show/hide button on scroll
        $(window).on('scroll', function() {
            if ($(this).scrollTop() > 500) {
                $scrollBtn.addClass('visible');
            } else {
                $scrollBtn.removeClass('visible');
            }
        });

        // Scroll to top on click
        $scrollBtn.on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, 800);
        });
    }

    /**
     * Initialize Swiper Sliders
     */
    function initSwiper() {
        
        // Check if Swiper is loaded
        if (typeof Swiper === 'undefined') {
            console.warn('Swiper not loaded');
            return;
        }

        // Testimonials Slider
        if ($('.testimonials-swiper').length) {
            new Swiper('.testimonials-swiper', {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                    },
                    1024: {
                        slidesPerView: 3,
                    },
                }
            });
        }

        // Team Slider
        if ($('.team-swiper').length) {
            new Swiper('.team-swiper', {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: false,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                    },
                    1024: {
                        slidesPerView: 3,
                    },
                    1400: {
                        slidesPerView: 4,
                    },
                }
            });
        }

        // Image Gallery Slider
        if ($('.gallery-swiper').length) {
            new Swiper('.gallery-swiper', {
                slidesPerView: 1,
                spaceBetween: 20,
                loop: true,
                autoplay: {
                    delay: 4000,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                scrollbar: {
                    el: '.swiper-scrollbar',
                    draggable: true,
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                    },
                    1024: {
                        slidesPerView: 3,
                    },
                }
            });
        }

        // Services Slider (Circular)
        if ($('.services-swiper').length) {
            new Swiper('.services-swiper', {
                slidesPerView: 1,
                spaceBetween: 30,
                centeredSlides: true,
                loop: true,
                autoplay: {
                    delay: 5000,
                },
                scrollbar: {
                    el: '.swiper-scrollbar',
                    draggable: true,
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                    },
                    1024: {
                        slidesPerView: 3,
                    },
                }
            });
        }

    }

    /**
     * FAQ Accordion
     */
    function initFAQ() {
        $('.faq-question').on('click', function() {
            const $this = $(this);
            const $answer = $this.next('.faq-answer');
            
            // Toggle active class
            $this.toggleClass('active');
            
            // Slide toggle answer
            $answer.slideToggle(300);
            
            // Close other FAQs (optional - remove if you want multiple open)
            $('.faq-question').not($this).removeClass('active');
            $('.faq-answer').not($answer).slideUp(300);
        });
    }

    /**
     * Form Validation (optional - basic example)
     */
    function initFormValidation() {
        $('form.validate').on('submit', function(e) {
            let isValid = true;
            
            // Check required fields
            $(this).find('[required]').each(function() {
                if ($(this).val() === '') {
                    isValid = false;
                    $(this).addClass('error');
                } else {
                    $(this).removeClass('error');
                }
            });
            
            // Email validation
            const $emailField = $(this).find('input[type="email"]');
            if ($emailField.length) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test($emailField.val())) {
                    isValid = false;
                    $emailField.addClass('error');
                }
            }
            
            if (!isValid) {
                e.preventDefault();
                alert('Bitte füllen Sie alle erforderlichen Felder aus.');
            }
        });
    }

    /**
     * Lazy Loading Images (Intersection Observer)
     */
    function initLazyLoad() {
        const images = document.querySelectorAll('img[data-src]');
        
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.removeAttribute('data-src');
                        imageObserver.unobserve(img);
                    }
                });
            });
            
            images.forEach(img => imageObserver.observe(img));
        } else {
            // Fallback for older browsers
            images.forEach(img => {
                img.src = img.dataset.src;
            });
        }
    }

    /**
     * Animated Counter (for stats/numbers sections)
     */
    function initCounters() {
        $('.counter').each(function() {
            const $this = $(this);
            const countTo = $this.attr('data-count');
            
            $({countNum: 0}).animate({
                countNum: countTo
            }, {
                duration: 2000,
                easing: 'swing',
                step: function() {
                    $this.text(Math.floor(this.countNum));
                },
                complete: function() {
                    $this.text(this.countNum);
                }
            });
        });
    }

    /**
     * Window Load
     */
    $(window).on('load', function() {
        // Hide preloader if you add one
        $('.preloader').fadeOut('slow');
    });

})(jQuery);
