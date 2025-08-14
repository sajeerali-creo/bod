<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>

    <!-- bootstrap grid css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-grid.css">
    <!-- font awesome css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
    <!-- swiper css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/swiper.min.css">
    <!-- ruizarch css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <!-- page name -->
    <title>BOD</title>

    <!-- pre-loading -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.13.0/lottie.min.js"></script>
    <!-- iocns -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css" />


</head>

<body>
    <!-- pre loading -->
    <div class="video-loading">
        <div class="loader" id="animation container">
            <script>
                var animation = bodymovin.loadAnimation({
                    container: document.getElementById('animation container'),
                    path: '<?php echo get_template_directory_uri(); ?>/animation/scene.json',
                    render: 'svg',
                    loop: true,
                    autoplay: true,
                    name: 'animation'
                })
            </script>
        </div>
    </div>

    <div class="mil-wrapper">

        <div class="mil-progress-track">
            <div class="mil-progress"></div>
        </div>

        <!-- top bar -->
        <div class="mil-top-panel">
            <div class="container-fluid">
                <div class="mil-top-panel-content">
                    <a href="index.html" class="mil-logo">
                        <img src="/wp-content/uploads/2025/08/logo-1.svg" alt="Logo" style="width: 60px;">
                    </a>
                    <div class="d-flex">
                        <div class="mil-navigation">
                            <nav>
                                <ul>
                                    <li><a href="/about">About</a></li>
                                    <li><a href="/services">Services</a></li>
                                    <li><a href="/portfolio">Projects</a></li>
                                    <li><a href="/contact-2">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>

                        <!-- right buttons -->
                        <div class="mil-top-panel-buttons">
                            <a href="/contact-2" class="mil-button mil-sm">Start A Project</a>
                            <div class="mil-menu-btn">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <!-- right buttons end -->

                </div>

            </div>
        </div>
        <!-- top bar end -->

        <!-- content -->
        <div id="content">