<?php get_header(); ?>

<section id="jumbotron" class="light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1
                    class="mb-1"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="0"
                >
                    Medicina celular
                </h1>
                <h2
                    class="headline mb-4"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                >
                    Innovación que redefine tratamientos.
                </h2>
                <p
                    class="mb-4"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="200"
                >
                    Explora en Logos Regenerative Medical Center cómo
                    nuestras terapias modernas brindan nuevas soluciones
                    frente a los métodos tradicionales.
                </p>
                <a
                    href="#formulario"
                    class="btn btn-secondary btn-lg"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="300"
                >
                    Agenda tu consulta
                    <i class="fa-solid fa-circle-chevron-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="nosotros" class="dark">
    <div class="container-fluid">
        <div class="row g-0">
            <div class="col-lg-5">
                <div class="decor"></div>
            </div>
            <div class="col-lg-7">
                <div class="texto">
                    <div>
                        <div
                            class="titulo-pill"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="0"
                        >
                            <h2>
                                <span class="badge rounded-pill">
                                    <i class="fa-solid fa-plus"></i>
                                    Sobre
                                </span>
                                Nosotros
                            </h2>
                        </div>
                        <p
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="100"
                        >
                            En Logos Regenerative Medical Center, somos
                            pioneros en terapias avanzadas que
                            aprovechan el poder regenerativo de tus
                            propias células madre para reparar y
                            restaurar tejidos dañados por enfermedades
                            degenerativas, lesiones o el envejecimiento.
                            Estas terapias no solo reemplazan las áreas
                            afectadas con nuevos tejidos y células
                            funcionales, sino que también promueven la
                            regeneración natural del cuerpo, ayudando a
                            recuperar su función normal.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="servicios" class="light py-60">
    <div class="container">
        <div class="row mb-5">
            <div class="col text-center">
                <h1
                    class="mb-0"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="0"
                >
                    Nuestros Servicios
                </h1>
                <h2
                    class="headline"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                >
                    Innovación que redefine tratamientos.
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <!-- Slider main container -->
                <div class="swiper swiper-servicios" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <?php
                        $args = [
                            "post_type" => "servicios",
                            "posts_per_page" => -1,
                        ];

                        $servicios_query = new WP_Query($args);

                        if ($servicios_query->have_posts()):
                            while ($servicios_query->have_posts()):

                                $servicios_query->the_post();
                                $icono = get_field("icono");

                                // Get service page URL
                                $pagina_servicio = get_field(
                                    "pagina_de_servicio"
                                );
                                $pagina_servicio_url = "";

                                if (
                                    $pagina_servicio &&
                                    is_array($pagina_servicio)
                                ) {
                                    $page_id = $pagina_servicio[0];
                                    $pagina_servicio_url = get_permalink(
                                        $page_id
                                    );
                                }
                                ?>

                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img src="<?php echo esc_url(
                                            $icono
                                        ); ?>" class="icon" alt="<?php echo esc_attr(
    get_the_title()
); ?>" />
                                        <div class="card-body">
                                            <h5 class="card-title"><?php the_title(); ?></h5>
                                            <hr />
                                            <p class="card-text"><?php the_excerpt(); ?></p>
                                            <a href="<?php echo esc_url(
                                                $pagina_servicio_url
                                            ); ?>" class="btn btn-secondary">
                                                Ver más <i class="fa-solid fa-circle-chevron-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            endwhile;
                            wp_reset_postdata();
                        endif;
                        ?>
                    </div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="formulario" class="py-60">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1
                    class="mb-0"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="0"
                >
                    Agenda tu cita
                </h1>
                <h2
                    class="headline"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                >
                    Reserva hoy tu cita con nosotros pagando la mitad del importe total de la consulta.
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="200"
                >
                    <script src="https://js.hsforms.net/forms/embed/48724822.js" defer></script>
                    <div class="hs-form-frame" data-region="na1" data-form-id="2a30f9c9-355d-46f5-933d-cd49991234d3" data-portal-id="48724822"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="testimonios" class="dark">
    <!-- Slider main container -->
    <div class="swiper swiper-testimonios">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <?php
            $testimonios_query = new WP_Query([
                "post_type" => "testimonios",
                "posts_per_page" => -1, // No limit
                "orderby" => "date",
                "order" => "DESC",
            ]);

            if ($testimonios_query->have_posts()):
                while ($testimonios_query->have_posts()):

                    $testimonios_query->the_post();
                    $video_id = get_field("video_id");

                    // Assuming you're using ACF, if not, use get_post_meta()
                    ?>
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="container-fluid">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="texto">
                                    <div>
                                        <h1
                                            class="mb-4"
                                            data-aos="fade-up"
                                            data-aos-duration="1000"
                                            data-aos-delay="0"
                                        >
                                            Testimonial
                                            <span><?php echo get_the_title(); ?></span>
                                        </h1>
                                        <p
                                            class="mb-4"
                                            data-aos="fade-up"
                                            data-aos-duration="1000"
                                            data-aos-delay="200"
                                        >
                                            Haz clic en el botón de play para ver el testimonial de <?php echo get_the_title(); ?>.
                                        </p>
                                        <img
                                            src="<?php echo esc_url(
                                                get_template_directory_uri()
                                            ); ?>/assets/images/logo-footer@2x.png"
                                            alt=""
                                            class="logo img-fluid"
                                            data-aos="fade-up"
                                            data-aos-duration="1000"
                                            data-aos-delay="300"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="image-container">
                                    <a
                                        href="javascript:void(0)"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modal-testimonios"
                                        data-bs-nombre="<?php echo esc_attr(
                                            get_the_title()
                                        ); ?>"
                                        data-bs-youtube-video="<?php echo esc_attr(
                                            $video_id
                                        ); ?>"
                                    >
                                        <?php the_post_thumbnail("full", [
                                            "class" => "full-size-image",
                                        ]); ?>
                                    </a>
                                </div>
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
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>

<section id="descanso" class="dark">
    <div class="container-fluid">
        <div class="row g-0">
            <div class="col-lg-5">
                <div class="decor"></div>
            </div>
            <div class="col-lg-7">
                <div class="texto text-lg-end">
                    <div>
                        <h1
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="0"
                        >
                            Resultados
                            <span class="headline fs-3"
                                >que cambiarán tu vida</span
                            >
                        </h1>
                        <hr
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="100"
                        />
                        <p
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="200"
                        >
                            Nuestros tratamientos en medicina celular
                            están diseñados para ofrecer mejoras
                            significativas y duraderas en la calidad de
                            tu vida a través de terapia celular.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- section id="equipo" class="light py-60">
    <div class="container">
        <div class="row mb-5">
            <div class="col text-center">
                <h1
                    class="mb-0"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="0"
                >
                    Conoce a nuestro equipo
                </h1>
                <h2
                    class="headline"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                >
                    Conoce a los pioneros en el campo de la medicina
                    regenerativa.
                </h2>
            </div>
        </div>
        <div class="row">
            <?php
            $args = [
                "post_type" => "equipo",
                "posts_per_page" => -1,
                "orderby" => "date",
                "order" => "DESC",
            ];

            $query = new WP_Query($args);
            $delay = 200; // Valor inicial del delay

            if ($query->have_posts()):
                while ($query->have_posts()):

                    $query->the_post();
                    // Obtener el grupo de redes sociales
                    $redes_sociales = get_field("redes_sociales");
                    ?>
                <div class="col-sm-6 col-lg-4 text-center">
                    <div class="card mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="<?php echo $delay; ?>">
                        <?php the_post_thumbnail("thumb-equipo", [
                            "class" => "img-top img-fluid",
                        ]); ?>
                        <div class="card-body text-start">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                            <p class="card-text">
                                <?php echo get_field("resumen_descriptivo"); ?>
                            </p>
                            <ul class="social list-inline">
                                <?php if ($redes_sociales["facebook"]): ?>
                                <li class="list-inline-item">
                                    <a href="<?php echo esc_url(
                                        $redes_sociales["facebook"]
                                    ); ?>" target="_blank">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                </li>
                                <?php endif; ?>

                                <?php if ($redes_sociales["x"]): ?>
                                <li class="list-inline-item">
                                    <a href="<?php echo esc_url(
                                        $redes_sociales["x"]
                                    ); ?>" target="_blank">
                                        <i class="fa-brands fa-x-twitter"></i>
                                    </a>
                                </li>
                                <?php endif; ?>

                                <?php if ($redes_sociales["linkedin"]): ?>
                                <li class="list-inline-item">
                                    <a href="<?php echo esc_url(
                                        $redes_sociales["linkedin"]
                                    ); ?>" target="_blank">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <?php endif; ?>

                                <?php if ($redes_sociales["whatsapp"]): ?>
                                <li class="list-inline-item">
                                    <a href="<?php echo esc_url(
                                        $redes_sociales["whatsapp"]
                                    ); ?>" target="_blank">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </a>
                                </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php $delay += 100; // Incrementar el delay en 100 para el siguiente elemento
                endwhile;
                wp_reset_postdata();
            else:
                echo "No se encontraron miembros del equipo.";
            endif;
            ?>
        </div>
    </div>
</section -->

<!-- section id="blog" class="dark py-60">
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
                        <span class="badge rounded-pill">
                            Conoce lo
                            <i class="fa-solid fa-plus"></i>
                        </span>
                        Actual
                    </h2>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <?php
            // Set up the custom query
            $args = [
                "post_type" => "post",
                "posts_per_page" => 3,
                "orderby" => "date",
                "order" => "DESC",
            ];

            $latest_posts = new WP_Query($args);

            // The Loop
            if ($latest_posts->have_posts()):
                $i = 1;
                while ($latest_posts->have_posts()):
                    $latest_posts->the_post(); ?>
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
                    <a href="<?php the_permalink(); ?>">
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
                <a
                    href="#"
                    class="btn btn-secondary"
                    data-aos="fade-in"
                    data-aos-duration="1000"
                    data-aos-delay="400"
                >
                    Ver más
                    <i class="fa-solid fa-circle-chevron-right"></i>
                </a>
            </div>
        </div>
    </div>
</section -->

<section class="video light py-60">
    <div class="container">
        <div class="row">
            <div class="col">
                <div
                    class="ratio ratio-16x9"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="0"
                >
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/i6XMHAXZB2Y?si=LBhrVV_CcwIOtG9v" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
