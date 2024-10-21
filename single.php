<?php get_header(); ?>

<section id="interna" class="light">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <?php the_post_thumbnail("full", [
                    "class" => "rounded img-fluid mb-4",
                ]); ?>
                <?php if (is_single()) {
                    $categories = get_the_category();
                    if (!empty($categories)) {
                        echo '<ul class="post-categories list-inline">';
                        foreach ($categories as $category) {
                            echo '<li class="list-inline-item"><a class="badge text-bg-primary" href="' .
                                esc_url(get_category_link($category->term_id)) .
                                '">' .
                                esc_html($category->name) .
                                "</a></li>";
                        }
                        echo "</ul>";
                    }
                } ?>
                <h1><?php the_title(); ?></h1>
                <?php if (have_posts()):
                    while (have_posts()):
                        the_post(); ?>
         			<!-- article -->
         			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            				<?php the_content(); ?>
            				<?php comments_template("", true);
                        // Remove if you don't want comments.
                        ?>
            				<br class="clear">
            				<?php edit_post_link(); ?>
         			</article>
         			<!-- /article -->
          		<?php
                    endwhile; ?>
          		<?php
                else:
                     ?>
         			<!-- article -->
         			<article>
            				<h2><?php esc_html_e(
                    "Lo sentimos, no hay nada que mostrar aquí.",
                    "html5blank"
                ); ?></h2>
         			</article>
         			<!-- /article -->
          		<?php
                endif; ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
