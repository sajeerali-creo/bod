<?php
/**
 * Template for displaying a single "project" post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */

get_header();
?>

<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();

        // Get ACF fields
        $image = get_field('project_image');
        $title = get_field('project_title');
        $category = strtolower(get_field('project_category'));

        // Optional additional fields you use in info section
        $location = get_field('location');
        $sqft = get_field('sqft');
        $status = get_field('status');
        $banner = get_field('banner');

        // Ensure $image_url works if image is an array or string
        $image_url = is_array($image) ? $image['url'] : $image;
        ?>

        <div id="content">

            <!-- banner -->
            <section class="mil-banner mil-banner-sm">
                <img src="<?php echo esc_url($banner); ?>" class="mil-bg-img mil-scale" data-value-1=".4" data-value-2="1.4" alt="image"
                    style="object-position: top">
                <div class="mil-overlay"></div>
                <div class="container">
                    <div class="mil-background-grid mil-top-space"></div>
                    <div class="mil-banner-content">
                        <div class="mil-mb-90">
                            <span class="mil-suptitle mil-upper mil-light mil-up mil-mb-30"><?php echo esc_html($category); ?></span>
                            <h1 class="mil-light mil-upper mil-up mil-mb-30"><?php the_title(); ?></h1>
                        </div>
                    </div>
                </div>
            </section>
            <!-- banner end -->

            <div class="container">
                <div class="mil-divider-lg"></div>
            </div>

            <!-- info -->
            <section>
                <div class="container mil-p-120-60">
                    <div class="mil-background-grid mil-softened"></div>
                    <div class="mil-mb-90">
                        <h2 class="mil-upper mil-up">Info Project</h2>
                    </div>
                    <div class="row mil-mb-30">
                        <div class="col-lg-3">
                            <h6 class="mil-upper mil-up mil-mb-30">Location</h6>
                            <ul class="mil-list mil-dark mil-up mil-mb-60">
                                <li><?php echo esc_html($location); ?></li>
                            </ul>
                        </div>
                        <div class="col-lg-3">
                            <h6 class="mil-upper mil-up mil-mb-30">Square Feet</h6>
                            <ul class="mil-list mil-dark mil-up mil-mb-60">
                                <li><?php echo esc_html($sqft); ?></li>
                            </ul>
                        </div>
                        <div class="col-lg-3">
                            <h6 class="mil-upper mil-up mil-mb-30">Status</h6>
                            <ul class="mil-list mil-dark mil-up mil-mb-60">
                                <li><?php echo esc_html($status); ?></li>
                            </ul>
                        </div>
                        <div class="col-lg-3">
                            <h6 class="mil-upper mil-up mil-mb-30">Project Category</h6>
                            <ul class="mil-list mil-dark mil-up mil-mb-30">
                                <li><?php echo esc_html($category); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- info end -->

            <!-- portfolio slider (manual 10 images max) -->
            <div class="mil-illustration-slider-frame mil-up">
                <div class="swiper-container mil-illustration-slider">
                    <div class="swiper-wrapper">
                        <?php 
                        for ($i = 1; $i <= 10; $i++) {
                            $img = get_field('project_image_' . $i);
                            if ($img) {
                                $img_url = is_array($img) ? $img['url'] : $img;
                                $img_alt = is_array($img) && isset($img['alt']) ? $img['alt'] : 'Project Image';
                                ?>
                                <div class="swiper-slide">
                                    <div class="mil-illustration mil-fw-item" data-swiper-parallax-x="50" data-swiper-parallax-scale="1.3">
                                        <div class="mil-image-frame">
                                            <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($img_alt); ?>" style="object-position: bottom">
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="container">
                    <div class="mil-illustration-slider-nav mil-up">
                        <div class="mil-nav-buttons">
                            <div class="mil-slider-button mil-illustration-prev">Prev</div>
                            <div class="mil-slider-button mil-illustration-next">Next</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- portfolio end -->

            <!-- about -->
            <section>
                <div class="container mil-p-120-90">
                    <div class="mil-background-grid mil-softened"></div>
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xl-4">
                            <div class="mil-mb-90">
                                <span class="mil-suptitle mil-upper mil-up mil-mb-30">The important thing</span>
                                <h2 class="mil-upper mil-up mil-mb-30">Project Fundamentals</h2>
                                <p class="mil-up">Core principles that ensure every design is thoughtful and effective.
They guide the process from initial concept through to final execution.</p>
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <a href="" class="mil-service-card mil-up mil-mb-30">
                                        <div class="align-items-center d-flex flex-column mil-center">
                                            <div class="mil-icon mil-icon-lg mil-mb-30 d-flex justify-content-center">
                                                <img src="/wp-content/uploads/2025/08/4.svg" alt="icon">
                                            </div>
                                            <h4 class="mil-upper mil-mb-20">Creativity</h4>
                                            <div class="mil-divider-sm mil-mb-20"></div>
                                            <p class="mil-service-text">Original ideas that shape unique and inspiring spaces.</p>
                                          
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <a href="" class="mil-service-card mil-up mil-mb-30">
                                        <div class="align-items-center d-flex flex-column mil-center">
                                            <div class="mil-icon mil-icon-lg mil-mb-30 d-flex justify-content-center">
                                                <img src="/wp-content/uploads/2025/08/9.svg" alt="icon">
                                            </div>
                                            <h4 class="mil-upper mil-mb-20">Technology</h4>
                                            <div class="mil-divider-sm mil-mb-20"></div>
                                            <p class="mil-service-text">Using advanced tools for precise and modern designs.</p>
                                          
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <a href="" class="mil-service-card mil-up mil-mb-30">
                                        <div class="align-items-center d-flex flex-column mil-center">
                                            <div class="mil-icon mil-icon-lg mil-mb-30 d-flex justify-content-center">
                                                <img src="/wp-content/uploads/2025/08/12.svg" alt="icon">
                                            </div>
                                            <h4 class="mil-upper mil-mb-20">Sustainability</h4>
                                            <div class="mil-divider-sm mil-mb-20"></div>
                                            <p class="mil-service-text">Designs that minimize environmental impact.</p>
                                          
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <a href="" class="mil-service-card mil-up mil-mb-30">
                                        <div class="align-items-center d-flex flex-column mil-center">
                                            <div class="mil-icon mil-icon-lg mil-mb-30 d-flex justify-content-center">
                                                <img src="/wp-content/uploads/2025/08/7.svg" alt="icon">
                                            </div>
                                            <h4 class="mil-upper mil-mb-20">Innovation</h4>
                                            <div class="mil-divider-sm mil-mb-20"></div>
                                            <p class="mil-service-text">Pushing boundaries with fresh, cutting-edge solutions.</p>
                                          
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about end -->

            <div class="container">
                <div class="mil-divider-lg"></div>
            </div>

            <div class="container">
                <div class="mil-divider-lg"></div>
            </div>

        </div>

<?php
    endwhile;
endif;
?>

<?php get_footer(); ?>
