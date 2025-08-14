<?php
/* Template Name: portfolio */
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
                <h1 class="mil-light mil-upper mil-mb-30">Projects</h1>
                <ul class="mil-breadcrumbs mil-center">
                    <li><a href="home-1.html">Home</a></li>
                    <li><a href="about.html">Projects</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- banner end -->

<!-- portfolio -->
<section>
    <div class="container mil-p-120-120">
        <div class="mil-background-grid mil-softened"></div>
        <div class="mil-center">
            <p class="mil-text-lg mil-up mil-mb-90">Our Projects harness design and technology to create
                places where <br> people live, work, and heal.</p>
        </div>


        <!-- filter -->
        <div class="mil-filter mil-up mil-mb-90">
            <div class="mil-filter-links">
                <a href="#" data-filter="*" class="mil-current">All</a>
                <a href="#" data-filter=".commercial">Commercial</a>
                <a href="#" data-filter=".residential">Residential</a>
            </div>
        </div>
        <!-- filter end -->

        <div class="row">
            <div class="col-lg-12">
                <div class="mil-portfolio-grid mil-up">
                    <div class="grid-sizer"></div>

                    <?php
                    $args = array(
                        'post_type' => 'project',
                        'posts_per_page' => -1
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()):
                        while ($query->have_posts()):
                            $query->the_post();

                            $image = get_field('project_image');
                            $title = get_field('project_title');
                            $category = strtolower(get_field('project_category')); // lowercase for class
                            $layout = get_field('project_layout'); // 'square' or 'long'
                    

                            // fallback image or permalink
                            $image_url = is_array($image) ? $image['url'] : $image;
                            $link_url = $link ? $link : get_permalink();
                            ?>
                            <div class="mil-grid-item <?php echo esc_attr($category); ?>">
                                <a href="<?php the_permalink(); ?>"
                                    class="mil-portfolio-item-2 mil-<?php echo esc_attr($layout); ?>-item mil-mb-30">
                                    <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($title); ?>">
                                    <div class="mil-project-descr">
                                        <h3 class="mil-upper mil-mb-30"><?php the_title(); ?></h3>
                                        <div class="mil-link mil-upper">
                                            Start A Project
                                            <div class="mil-arrow mil-light">
                                                <img src="/wp-content/uploads/2025/08/1.svg" alt="arrow">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mil-category"><?php echo esc_html($category); ?></div>
                                </a>
                            </div>
                            <?php
                        endwhile;
                        wp_reset_postdata();
                    else:
                        echo '<p class="d-flex justify-content-center">No projects found.</p>';
                    endif;
                    ?>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Portfolio end -->

<?php get_footer(); ?>