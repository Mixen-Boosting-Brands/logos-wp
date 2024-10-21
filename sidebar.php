<!-- sidebar -->
<aside class="col-lg-3 sidebar" role="complementary">
    <h2><?php esc_html_e("Artículos relacionados", "html5blank"); ?></h2>

    <?php
    // Get the current post's categories
    $categories = get_the_category();
    if ($categories) {
        $category_ids = [];
        foreach ($categories as $category) {
            $category_ids[] = $category->term_id;
        }

        // Query arguments
        $args = [
            "category__in" => $category_ids,
            "post__not_in" => [get_the_ID()],
            "posts_per_page" => 3,
            "orderby" => "rand",
        ];

        // The Query
        $related_query = new WP_Query($args);

        // The Loop
        if ($related_query->have_posts()) {
            while ($related_query->have_posts()) {
                $related_query->the_post(); ?>
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail("small", [
                                    "class" => "rounded-start img-fluid",
                                ]); ?>
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <a href="<?php the_permalink(); ?>">
                                    <h5 class="card-title">
                                        <?php the_title(); ?>
                                    </h5>
                                </a>
                                <p class="card-text">
                                    <small class="text-body-secondary">
                                        <time datetime="<?php the_time(
                                            "Y-m-d"
                                        ); ?> <?php the_time("H:i"); ?>">
                                            <?php the_date(); ?> <?php the_time(); ?>
                                        </time>
                                    </small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        // Restore original Post Data
        wp_reset_postdata();
    }
    ?>
</aside>
<!-- /sidebar -->
