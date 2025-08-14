<?php
/* Template Name: contact */
?>
<?php get_header(); ?>

<!-- banner -->
<section class="mil-banner mil-banner-sm">
    <img src="/wp-content/uploads/2025/08/head-inner.webp" class="mil-bg-img mil-scale" data-value-1=".4"
        data-value-2="1.4" alt="image" style="object-position: center">
    <div class="mil-overlay"></div>
    <div class="container">
        <div class="mil-background-grid mil-top-space"></div>
        <div class="mil-banner-content mil-center">
            <div class="mil-mb-90">
                <h1 class="mil-light mil-upper mil-mb-30">We’d love to talk</h1>
                <ul class="mil-breadcrumbs mil-center">
                    <li><a href="home-2.html">Home</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- banner end -->

<!-- about -->
<section>
    <div class="container mil-p-120-60">
        <div class="mil-background-grid mil-softened"></div>
        <div class="row justify-content-between">
            <div class="col-lg-6">

                <div class="mil-mb-90">
                    <h2 class="mil-upper mil-up mil-mb-30">Info Contact</h2>
                    <p class="mil-up mil-mb-40">It is a long established fact that a reader will be
                        distracted by the readable content of a page when looking at its layout. The point
                        of using Lorem Ipsum is that it has a more or less normal distribution of letters.
                    </p>
                </div>

            </div>
            <div class="col-lg-4 mil-relative">

                <div class="mil-contact-sidebar">

                    <img src="/wp-content/uploads/2025/08/contact.webp" alt="img"
                        style="width: 100%; height: 200px; object-fit: cover; object-position: 0 -60px"
                        class="mil-mb-30">


                    <div class="mil-sidebar-info">
                        <?php
                        $address_query = new WP_Query(array(
                            'post_type' => 'contact_details',
                            'posts_per_page' => -1
                        ));

                        if ($address_query->have_posts()):
                            while ($address_query->have_posts()):
                                $address_query->the_post();

                                $address = get_field('address');
                                $phone_number_1 = get_field('phone_number_1');
                                $phone_number_2 = get_field('phone_number_2');
                                $email_address = get_field('email_address');
                                ?>
                                <h6 class="mil-upper mil-up mil-mb-30">Headquarters</h6>

                                <ul class="mil-list mil-dark mil-up mil-mb-30">
                                    <li><?php echo esc_html($address); ?></li>
                                </ul>


                                <h6 class="mil-upper mil-up mil-mb-30">Phone</h6>
                                <ul class="mil-list mil-dark mil-up mil-mb-30">
                                    <li><?php echo esc_html($phone_number_1); ?></li>
                                    <li><?php echo esc_html($phone_number_2); ?></li>
                                </ul>

                                <h6 class="mil-upper mil-up mil-mb-30">Email</h6>
                                <ul class="mil-list mil-dark mil-up">
                                    <li><?php echo esc_html($email_address); ?></li>
                                </ul>

                            <?php endwhile;
                            wp_reset_postdata();
                        endif;
                        ?>

                    </div>

                </div>

            </div>

        </div>
    </div>
</section>
<!-- about end -->

<!-- map -->
<div class="mil-map-frame mil-up">
    <div class="mil-map">
        <iframe class="map"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3914.97023270352!2d76.11641791480376!3d11.115594892091941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTHCsDA2JzU2LjEiTiA3NsKwMDcnMDcuMCJF!5e0!3m2!1sen!2sae!4v1600814275639!5m2!1sen!2sae"
            frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" width="100%"></iframe>
    </div>
</div>
<!-- map end -->

<!-- contact -->
<section class="mil-relative">
    <div class="container mil-p-120-120">
        <div class="mil-background-grid mil-softened"></div>
        <div class="row justify-content-between">
            <div class="col-lg-4">

                <div class="mil-mb-90">
                    <h2 class="mil-upper mil-up mil-mb-30">We’d love to talk</h2>
                    <p class="mil-up mil-mb-30">Have a question? We’d love to hear from you. Send us a note
                        to get the conversation started - or click on an office above and talk to us.
                        Especially about designing something, or something we’ve designed.</p>
                    <div class="mil-divider-lg mil-up mil-mb-30"></div>
                    <p class="mil-up mil-mb-30">Interested in joining the team? Browse our current openings.
                    </p>
                    <div class="mil-up">
                        <a href="contact.html" class="mil-link mil-upper">Join Us <span class="mil-arrow"><img
                                    src="/wp-content/uploads/2025/08/1.svg" alt="arrow"></span></a>
                    </div>
                </div>

            </div>
            <div class="col-lg-7">

                <?php
                echo do_shortcode('[contact-form-7 id="2cc107b" title="Untitled"]');
                ?>

            </div>
        </div>
    </div>
</section>
<!-- contact end -->

<?php get_footer(); ?>