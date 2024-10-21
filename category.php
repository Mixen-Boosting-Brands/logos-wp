<?php get_header(); ?>

<section id="blog" class="dark py-60">
    <div class="container">
        <div class="row mb-5">
            <div class="col text-center">
                <div
                    class="titulo-pill"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="0"
                >
                    <h2>
                        <?php echo single_cat_title(); ?>
                        Actual
                    </h2>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <?php
            // The Loop
            if (have_posts()):
                $i = 1;
                while (have_posts()):
                    the_post(); ?>
                <div
                    class="col-md-6 col-lg-4 mb-3"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="<?php echo $i; ?>00"
                >
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail("thumb-blog", [
                            "class" => "rounded img-fluid",
                        ]); ?>
                    </a>
                    <a href="#">
                        <h3 class="mt-3">
                            <?php the_title(); ?>
                            <span class="badge bg-secondary rounded-pill">
                                <time datetime="<?php the_time(
                                    "Y-m-d"
                                ); ?> <?php the_time("H:i"); ?>">
                                    <?php echo get_the_date("M j, Y"); ?>
                                </time>
                            </span
                            >
                        </h3>
                    </a>
                    <p>
                        <?php the_excerpt(); ?>
                    </p>
                </div>
                <?php $i++;
                endwhile;
            else:
                echo "<p>No posts found.</p>";
            endif;

            // Restore original Post Data
            wp_reset_postdata();
            ?>
        </div>
        <div class="row">
            <div class="col text-center">
                <?php echo bootstrap_pagination(); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
