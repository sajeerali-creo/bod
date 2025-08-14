<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<!-- footer -->
<?php
$address_query = new WP_Query(array(
    'post_type' => 'contact_details',
    'posts_per_page' => -1
));

if ($address_query->have_posts()):
    while ($address_query->have_posts()):
        $address_query->the_post();

        $address = get_field('address');
        $facebook_url = get_field('facebook_url');
        $twitter_url = get_field('twitter_url');
        $instagram_url = get_field('instagram_url');
        $youtube_url = get_field('youtube_url');
        ?>

        <footer class="mil-relative">
            <img src="/wp-content/uploads/2025/08/footer-bg3-scaled.webp" class="mil-bg-img mil-parallax" alt="image"
                style="object-position: top;" data-value-1="-25%" data-value-2="23%">
            <div class="mil-overlay"></div>
            <div class="container mil-p-120-90">
                <div class="mil-background-grid"></div>
                <div class="row align-items-end justify-content-between">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-12">
                                <div class="mil-footer-navigation mil-up mil-mb-90">
                                    <nav>
                                        <ul>
                                            <li>
                                                <a href="/about">About</a>
                                            </li>
                                            <li class="mil-active">
                                                <a href="/services">Services</a>
                                            </li>
                                            <li>
                                                <a href="/portfolio">Projects</a>
                                            </li>
                                            <li>
                                                <a href="/contact-2">Contact</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>

                            </div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-md-6 col-lg-6 col-xl-6">
                                <span class="mil-suptitle mil-light mil-upper mil-up mil-mb-30">Manjeri,
                                    Malappuram</span>

                                <p class="mil-text-sm mil-up mil-light-soft mil-mb-30"><?php echo esc_html($address); ?>
                                </p>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <a href="home-1.html" class="mil-footer-logo mil-up mil-mb-30">
                            <img src="/wp-content/uploads/2025/08/logo-1.svg" alt="Logo" style="width: 80px">
                        </a>
                    </div>

                </div>
            </div>
            <div class="container-fluid">

                <div class="mil-footer-bottom">
                    <p class="mil-light-soft mil-mb-15">© 2025. All rights reserved.</p>
                    <ul class="mil-light-soft mil-mb-15">
                        <li><a href="<?php echo esc_html($facebook_url); ?>" target="_blank">Facebook</a></li>
                        <li><a href="<?php echo esc_html($twitter_url); ?>" target="_blank">Twitter</a></li>
                        <li><a href="<?php echo esc_html($instagram_url); ?>" target="_blank">Instagram</a></li>
                        <li><a href="<?php echo esc_html($youtube_url); ?>" target="_blank">Youtube</a></li>
                    </ul>
                    <ul class="mil-light-soft mil-mb-15">
                        <li><a href="www.creotopi.com" target="_blank">Design by Creotopi</a></li>
                    </ul>
                </div>

            </div>
        </footer>
    <?php endwhile;
    wp_reset_postdata();
endif;
?>
<!-- footer end -->

</div>
<!-- content -->
</div>
<!-- wrapper end -->
<?php wp_footer(); ?>
<!-- jQuery js -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
<!-- swiper js -->
<script src="<?php echo get_template_directory_uri(); ?>/js/swiper.min.js"></script>
<!-- gsap js -->
<script src="<?php echo get_template_directory_uri(); ?>/js/gsap.min.js"></script>
<!-- imagesloaded js -->
<script src="<?php echo get_template_directory_uri(); ?>/js/imagesloaded.pkgd.js"></script>
<!-- isotope js -->
<script src="<?php echo get_template_directory_uri(); ?>/js/isotope.min.js"></script>
<!-- scroll smoother -->
<script src="<?php echo get_template_directory_uri(); ?>/js/smooth-scroll.js"></script>
<!-- scroll trigger js -->
<script src="<?php echo get_template_directory_uri(); ?>/js/ScrollTrigger.min.js"></script>
<!-- magnific js -->
<script src="<?php echo get_template_directory_uri(); ?>/js/magnific-popup.js"></script>
<!-- ruizarch js -->
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

</body>

</html>