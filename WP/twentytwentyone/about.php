<?php
/* Template Name: about */
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
                <h1 class="mil-light mil-upper mil-mb-30">About us</h1>
                <ul class="mil-breadcrumbs mil-center">
                    <li><a href="home-1.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- banner end -->

<?php
// Define the query
$args = array(
    'post_type' => 'about_bod', // Change to your custom post type or 'post' for default posts
    'posts_per_page' => 1,         // Fetch all posts
);

$services_query = new WP_Query($args);

if ($services_query->have_posts()):
    ?>

    <?php
    while ($services_query->have_posts()):
        $services_query->the_post();
        $mission_title = get_field('mission_title');
        $mission_desc = get_field('mission_desc');
        $vission_title = get_field('vission_title');
        $vission_desc = get_field('vission_desc');
        $who_we_are = get_field('who_we_are');
        ?>

<!-- services -->
<section>
    <div class="container mil-p-120-60">
        <div class="mil-background-grid mil-softened"></div>
        <div class="row">
            <div class="col-12">
                <div class="mil-mb-60">
                    <h2 class="mil-upper mil-up mil-mb-30">WHO WE ARE</h2>
                    <p class="mil-up">

                        <?php echo esc_html($who_we_are); ?>
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <ul class="mil-icon-list mil-mb-60">
                            <li class="mil-hover mil-up"><a href="#."><img src="/wp-content/uploads/2025/08/11.svg"
                                        alt="icon">Profit-Oriented Design</a></li>
                            <li class="mil-hover mil-up"><a href="#."><img src="/wp-content/uploads/2025/08/11.svg"
                                        alt="icon">Cost-effective Solutions</a></li>
                            <li class="mil-hover mil-up"><a href="#."><img src="/wp-content/uploads/2025/08/11.svg"
                                        alt="icon">Strategic
                                    Stock Management</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <ul class="mil-icon-list mil-mb-60">
                            <li class="mil-hover mil-up"><a href="#."><img src="/wp-content/uploads/2025/08/11.svg"
                                        alt="icon">Market-Driven Positioning</a></li>
                            <li class="mil-hover mil-up"><a href="#."><img src="/wp-content/uploads/2025/08/11.svg"
                                        alt="icon">Creative
                                    Retail Spaces</a></li>
                            <li class="mil-hover mil-up"><a href="#."><img src="/wp-content/uploads/2025/08/11.svg"
                                        alt="icon">Excellence
                                    in Project Management</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <ul class="mil-icon-list mil-mb-60">
                            <li class="mil-hover mil-up"><a href="#."><img src="/wp-content/uploads/2025/08/11.svg"
                                        alt="icon">Client-Centric Approach</a></li>
                            <li class="mil-hover mil-up"><a href="#."><img src="/wp-content/uploads/2025/08/11.svg"
                                        alt="icon">Proven
                                    Expertise & Success</a></li>
                            <li class="mil-hover mil-up"><a href="#."><img src="/wp-content/uploads/2025/08/11.svg"
                                        alt="icon">Transparent
                                    Process</a></li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
<!-- services end -->

<!-- contact info -->

        <section>
            <div class="container mil-mb-60">
                <div class="row">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="box-mission">
                            <h3 class="text-white mil-upper mil-up mb-4"><?php echo esc_html($mission_title); ?></h3>
                            <p>
                               <?php echo esc_html($mission_desc); ?>
                               
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="box-vission">
                            <h3 class="text-white mil-upper mil-up mb-4"><?php echo esc_html($vission_title); ?></h3>
                            <p>
                              <?php echo esc_html($vission_desc); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
    endwhile;
    ?>

    <?php
else:
    echo '<p class="w-100 d-flex justify-content-center">No services found.</p>';
endif;

// Reset the post data
wp_reset_postdata();
?>
<!-- team -->
<section class="team-saj">
    <div class="container mil-mb-60">
        <div class="col-lg-6">

            <div class="mil-mb-90">
                <h2 class="mil-upper mil-up">Our Team</h2>
            </div>

        </div>


        <div class="row">

            <?php
            $args = array(
                'post_type' => 'team_member', // Change this to your actual CPT slug
                'posts_per_page' => -1
            );

            $team_query = new WP_Query($args);

            if ($team_query->have_posts()):
                while ($team_query->have_posts()):
                    $team_query->the_post();
                    $image = get_field('team_image'); // returns URL or array depending on field setting
                    $role = get_field('team_role');
                    ?>
                    <div class="col-lg-3 mb-4">
                        <div class="mil-grid-item architecture">
                            <div class="team-box">
                                <img src="<?php echo esc_url($image); ?>" alt="cover">
                                <div class="mil-project-descr">
                                    <h3 class="mil-upper mil-mb-10"><?php the_title(); ?></h3>
                                    <div class="mil-upper"><?php echo esc_html($role); ?></div>
                                </div>
                            </div>
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
<!-- team end -->

<!-- contact info -->
<?php
// Define the query
$args = array(
    'post_type' => 'contact_details', // Change to your custom post type or 'post' for default posts
    'posts_per_page' => 1,         // Fetch all posts
);

$services_query = new WP_Query($args);

if ($services_query->have_posts()):
    ?>

    <?php
    while ($services_query->have_posts()):
        $services_query->the_post();
        $phone_number_1 = get_field('phone_number_1');
        $phone_number_2 = get_field('phone_number_2');
        $email_address = get_field('email_address');
        ?>
        <section class="pb-5">
            <div class="container mil-p-60-120">
                <div class="mil-background-grid mil-softened"></div>
                <div class="mil-contact-frame mil-up">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-4 mil-mb-30">
                            <p class="mil-dark mil-up mil-mb-10">Email address</p>
                            <h4 class="mil-thin mil-up"><?php echo esc_attr($email_address); ?></h4>
                        </div>
                        <div class="col-lg-4 mil-mb-30">

                            <p class="mil-dark mil-up mil-mb-10">Free Consultation</p>
                            <h4 class="mil-thin mil-up"><?php echo esc_attr($phone_number_2); ?>
                            </h4>

                        </div>
                        <div class="col-lg-3 mil-mb-30">
                            <a href="/contact-2/" class="mil-button mil-up mil-fw">Find a Space</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
    endwhile;
    ?>

    <?php
else:
    echo '<p class="w-100 d-flex justify-content-center">No services found.</p>';
endif;

// Reset the post data
wp_reset_postdata();
?>
<!-- contact info end -->

<!-- partners -->
<div class="mil-soft-bg mil-relative">
    <img src="/wp-content/uploads/2025/08/bg.svg" class="mil-bg-img" alt="image">
    <div class="container mil-p-120-120">
        <div class="mil-background-grid mil-softened"></div>
        <div class="swiper-container mil-infinite-show mil-up">
            <div class="swiper-wrapper">

                <?php
                $args = array('post_type' => 'clients', 'posts_per_page' => -1);
                $the_query = new WP_Query($args);
                ?>
                <?php if ($the_query->have_posts()): ?>
                    <?php while ($the_query->have_posts()):
                        $the_query->the_post(); ?>

                        <div class="swiper-slide">
                            <a href="#." class="mil-partner-frame">

                                <?php $image = get_field('client_image'); ?>
                                <img src="<?php echo $image; ?>">

                            </a>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else: ?>
                    <p>
                        <?php _e('Sorry, no posts matched your criteria.'); ?>
                    </p>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>
<!-- partners end -->

<!-- reviews -->
<section class="mil-soft-bg mil-relative">
    <img src="/wp-content/uploads/2025/08/bg.svg" class="mil-bg-img" alt="image">
    <div class="container mil-p-120-120">
        <div class="mil-background-grid mil-softened"></div>

        <div class="row justify-content-between">
            <div class="col-lg-4">

                <div class="mil-mb-60">
                    <span class="mil-suptitle mil-upper mil-up mil-mb-30">Testimonials</span>
                    <h2 class="mil-upper mil-up">What they think of us</h2>
                </div>

            </div>
           <div class="col-lg-7 mil-mt-suptitle-offset">

                <div class="swiper-container mil-reviews-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">

                            <div class="mil-review-frame mil-mb-30" data-swiper-parallax-x="-200"
                                data-swiper-parallax-opacity="0">
                                <div class="mil-reviev-head mil-up">
                                    <div class="mil-left">
                                        <div class="mil-quote">
                                            <img src="/wp-content/uploads/2025/08/12.svg" alt="icon">
                                        </div>
                                        <div class="mil-review-avatar">
                                            <img src="/wp-content/uploads/2025/08/t-3.webp" alt="face">
                                        </div>
                                    </div>
                                    <div class="mil-name">
                                        <h6 class="mil-upper">Trevor Virtue</h6>
                                        <p class="mil-text-sm mil-dark-soft">Designer</p>
                                    </div>
                                </div>
                                <div class="mil-up">
                                    <p class="mil-review-text" data-swiper-parallax="-60">In my opinion, it
                                        was an unforgettable experience working on my ideas. They understood
                                        everything I wanted in my project and idea that was great. I would
                                        work with ruizarch again for future projects, even to ask them for
                                        advice to start projects or ideas.</p>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-slide">

                            <div class="mil-review-frame mil-mb-30" data-swiper-parallax-x="-200"
                                data-swiper-parallax-opacity="0">
                                <div class="mil-reviev-head mil-up">
                                    <div class="mil-left">
                                        <div class="mil-quote">
                                            <img src="/wp-content/uploads/2025/08/12.svg" alt="icon">
                                        </div>
                                        <div class="mil-review-avatar">
                                            <img src="/wp-content/uploads/2025/08/t-2.webp" alt="face">
                                        </div>
                                    </div>
                                    <div class="mil-name">
                                        <h6 class="mil-upper">Emma Miller</h6>
                                        <p class="mil-text-sm mil-dark-soft">SMM Manager</p>
                                    </div>
                                </div>
                                <div class="mil-up">
                                    <p class="mil-review-text" data-swiper-parallax="-60">In my opinion, it
                                        was an unforgettable experience working on my ideas. They understood
                                        everything I wanted in my project and idea that was great. I would
                                        work with ruizarch again for future projects, even to ask them for
                                        advice to start projects or ideas.</p>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-slide">

                            <div class="mil-review-frame mil-mb-30" data-swiper-parallax-x="-200"
                                data-swiper-parallax-opacity="0">
                                <div class="mil-reviev-head mil-up">
                                    <div class="mil-left">
                                        <div class="mil-quote">
                                            <img src="/wp-content/uploads/2025/08/12.svg" alt="icon">
                                        </div>
                                        <div class="mil-review-avatar">
                                            <img src="/wp-content/uploads/2025/08/t-3.webp" alt="face">
                                        </div>
                                    </div>
                                    <div class="mil-name">
                                        <h6 class="mil-upper">Paul Trueman</h6>
                                        <p class="mil-text-sm mil-dark-soft">Designer</p>
                                    </div>
                                </div>
                                <div class="mil-up">
                                    <p class="mil-review-text" data-swiper-parallax="-60">In my opinion, it
                                        was an unforgettable experience working on my ideas. They understood
                                        everything I wanted in my project and idea that was great. I would
                                        work with ruizarch again for future projects, even to ask them for
                                        advice to start projects or ideas.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="mil-nav-buttons mil-reviews-nav mil-up">
                    <div class="mil-slider-button mil-process-prev">Prev</div>
                    <div class="mil-slider-button mil-process-next">Next</div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- reviews end -->

<?php get_footer(); ?>