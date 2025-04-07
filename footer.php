        <section id="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.1446201905796!2d-106.1182649!3d28.6254274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86ea5d909c61141d%3A0x3bc7588ef5d2e79b!2sLogos%20Regenerative%20Medical%20Center!5e0!3m2!1ses-419!2smx!4v1744047800960!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>

        <footer class="dark py-60">
            <div class="container">
                <!-- div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-6">
                                <h1
                                    data-aos="fade-up"
                                    data-aos-duration="1000"
                                    data-aos-delay="0"
                                >
                                    Servicios
                                </h1>
                                <ul
                                    class="list-unstyled mb-5"
                                    data-aos="fade-up"
                                    data-aos-duration="1000"
                                    data-aos-delay="100"
                                >
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

                                            // Asumiendo que usas ACF para el campo personalizado
                                            ?>
                                    <li>
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </li>
                                    <?php
                                        endwhile;
                                        wp_reset_postdata();
                                    endif;
                                    ?>
                                </ul>
                                <h1
                                    data-aos="fade-up"
                                    data-aos-duration="1000"
                                    data-aos-delay="200"
                                >
                                    Sobre Nosotros
                                </h1>
                                <ul
                                    class="list-unstyled mb-5"
                                    data-aos="fade-up"
                                    data-aos-duration="1000"
                                    data-aos-delay="300"
                                >
                                    <li>
                                        <a <?php if (
                                            is_home()
                                        ): ?>class="anchor"<?php endif; ?> href="<?php if (
     !is_home()
 ):
     echo esc_url(home_url());
 endif; ?>#nosotros"
                                            >Historia</a
                                        >
                                    </li>
                                    <li>
                                        <a <?php if (
                                            is_home()
                                        ): ?>class="anchor"<?php endif; ?> href="<?php if (
     !is_home()
 ):
     echo esc_url(home_url());
 endif; ?>#testimonios"
                                            >Testimoniales</a
                                        >
                                    </li>
                                    <li>
                                        <a <?php if (
                                            is_home()
                                        ): ?>class="anchor"<?php endif; ?> href="<?php if (
     !is_home()
 ):
     echo esc_url(home_url());
 endif; ?>#equipo"
                                            >Equipo</a
                                        >
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <h1
                                    data-aos="fade-up"
                                    data-aos-duration="1000"
                                    data-aos-delay="400"
                                >
                                    Contacto
                                </h1>
                                <ul
                                    class="list-unstyled mb-5"
                                    data-aos="fade-up"
                                    data-aos-duration="1000"
                                    data-aos-delay="500"
                                >
                                    <li>
                                        <a
                                            href="javascript:void(0)"
                                            data-bs-toggle="modal"
                                            data-bs-target="#modal-contacto"
                                        >
                                            Envíanos un mensaje
                                        </a>
                                    </li>
                                    <li>
                                        <a href="mailto:contacto@logosmedicalcenter.mx">Email</a>
                                    </li>
                                    <li>
                                        <a href="#">Chat en vivo</a>
                                    </li>
                                </ul>
                                <h1
                                    data-aos="fade-up"
                                    data-aos-duration="1000"
                                    data-aos-delay="600"
                                >
                                    Blog
                                </h1>
                                <ul
                                    class="list-unstyled"
                                    data-aos="fade-up"
                                    data-aos-duration="1000"
                                    data-aos-delay="700"
                                >
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
                                    <li>
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </li>
                                    <?php
                                        endwhile;
                                    else:
                                        echo "<p>No se encontraron posts.</p>";
                                    endif;

                                    // Restore original Post Data
                                    wp_reset_postdata();
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div -->
                <div class="row mb-4 mb-lg-0">
                    <div class="col text-center">
                        <!-- ul
                            class="social list-inline"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="800"
                        >
                            <li class="list-inline-item">
                                <a
                                    href="https://www.facebook.com/"
                                    target="_blank"
                                >
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a
                                    href="https://www.instagram.com/"
                                    target="_blank"
                                >
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://linkedin.com/" target="_blank">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul -->
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col text-center text-lg-start">
                        <a
                            href="<?php echo esc_url(home_url()); ?>"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="800"
                        >
                            <img
                                src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/logo-footer@2x.png"
                                alt=""
                                id="logo-footer"
                                class="img-fluid mb-1 mb-lg-4"
                            />
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-4 my-lg-auto text-center text-lg-start">
                        <p data-aos="fade-in"
                        data-aos-duration="1000"
                        data-aos-delay="1000">
                            <a
                                href="<?php echo get_permalink(3); ?>"
                            >
                                <?php echo get_the_title(3); ?>
                            </a>
                        </p>
                        <p
                            data-aos="fade-in"
                            data-aos-duration="1000"
                            data-aos-delay="1100"
                        >
                            &copy; <?php echo date("Y"); ?> <?php bloginfo(
     "name"
 ); ?>. Todos
                            los derechos reservados.
                        </p>
                        <p
                            class="mb-0"
                            data-aos="fade-in"
                            data-aos-duration="1000"
                            data-aos-delay="1200"
                            data-aos-offset="0"
                        >
                            Hecho por
                            <a href="https://mixen.mx/" target="_blank">Mixen</a
                            >.
                        </p>
                    </div>
                    <div class="col-lg-6 my-auto text-center text-lg-end">
                        <a href="https://www.tiktok.com/@logos.regenerativ" class="btn btn-primary btn-lg" target="_blank">
                            <i class="fa-brands fa-tiktok"></i>
                            Síguenos en TikTok
                        </a>
                    </div>
                </div>
            </div>
        </footer>

        <a
            href="https://wa.me/526141608641?text=Qué tal%20Logos Regenerative Medical Center,%20necesito%20información."
            class="whatsapp"
            target="_blank"
        >
            <i class="fab fa-whatsapp whatsapp-icon"></i>
        </a>

        <!-- Modal Contacto -->
        <div
            class="modal fade"
            id="modal-contacto"
            tabindex="-1"
            aria-labelledby="modal-contactoLabel"
            aria-hidden="true"
        >
            <div
                class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg"
            >
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modal-contactoLabel">
                            Contacto
                        </h1>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-body">
                        <!-- Aquí se inyecta feedback a usuario vía Ajax -->
                        <div id="form-messages"></div>
                        <!-- /Aquí se inyecta feedback a usuario vía Ajax -->
                        <form
                            action="<?php echo esc_url(
                                get_template_directory_uri()
                            ); ?>/mailer.php"
                            method="POST"
                            class="row g-3 needs-validation contact-form mb-4 mb-lg-0"
                            id="ajax-contact"
                            novalidate
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="300"
                        >
                            <div class="col-md-12 form-floating">
                                <input
                                    type="text"
                                    class="form-control shadow-none"
                                    id="nombre"
                                    name="nombre"
                                    placeholder="Nombre*"
                                    pattern=".{5,50}"
                                    required
                                />
                                <label for="nombre" class="form-label"
                                    >Nombre*</label
                                >
                                <div class="valid-feedback">¡Se ve bien!</div>
                                <div class="invalid-feedback">
                                    Por favor introduce tu nombre completo.
                                </div>
                            </div>
                            <div class="col-md-12 form-floating">
                                <input
                                    type="email"
                                    class="form-control shadow-none"
                                    id="correo"
                                    name="correo"
                                    placeholder="Correo*"
                                    required
                                />
                                <label for="correo" class="form-label"
                                    >Correo*</label
                                >
                                <div class="valid-feedback">¡Se ve bien!</div>
                                <div class="invalid-feedback">
                                    Por favor introduce un correo electrónico
                                    válido.
                                </div>
                            </div>
                            <div class="col-md-12 form-floating">
                                <input
                                    type="tel"
                                    class="form-control shadow-none"
                                    id="telefono"
                                    name="telefono"
                                    placeholder="Teléfono*"
                                    required
                                />
                                <label for="telefono" class="form-label"
                                    >Teléfono*</label
                                >
                                <div class="valid-feedback">¡Se ve bien!</div>
                                <div class="invalid-feedback">
                                    Por favor introduce un número de teléfono
                                    válido.
                                </div>
                            </div>
                            <div class="col-md-12 form-floating mb-4">
                                <textarea
                                    class="form-control shadow-none"
                                    id="mensaje"
                                    name="mensaje"
                                    placeholder="Mensaje*"
                                    style="height: 100px"
                                    required
                                ></textarea>
                                <label for="mensaje">Mensaje*</label>
                                <div class="valid-feedback">¡Se ve bien!</div>
                                <div class="invalid-feedback">
                                    Por favor introduce tu mensaje.
                                </div>
                            </div>
                            <div class="col-md-6 my-auto">
                                <button
                                    type="submit"
                                    class="btn btn-secondary btn-lg btn-block"
                                >
                                    <i class="fa-solid fa-paper-plane"></i>
                                    Enviar
                                </button>
                                <div id="hold-on-a-sec">
                                    <i
                                        id="contact-spinner"
                                        class="fas fa-spinner fa-spin"
                                    ></i>
                                    Espera un momento por favor...
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Testimonios -->
        <div
            class="modal fade"
            id="modal-testimonios"
            tabindex="-1"
            aria-labelledby="modal-testimoniosLabel"
            aria-hidden="true"
        >
            <div
                class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl"
            >
                <div class="modal-content">
                    <div class="modal-header">
                        <h1
                            class="modal-title fs-5"
                            id="modal-testimoniosLabel"
                        >
                            Testimonio
                        </h1>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-body">
                        <div class="ratio ratio-16x9">
                            <iframe
                                width="100%"
                                height="315"
                                src="https://www.youtube.com/embed/LIPPmZaU_IE"
                                title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin"
                                allowfullscreen
                            ></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php wp_footer(); ?>

        <script src="https://www.youtube.com/iframe_api"></script>
        <script src="<?php echo esc_url(
            get_template_directory_uri()
        ); ?>/assets/js/app.bundle.js"></script>

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-KZSCEELM85"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-KZSCEELM85');
        </script>

        <!-- Clarity -->
        <script type="text/javascript">
            (function(c,l,a,r,i,t,y){
                c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
                t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
                y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
            })(window, document, "clarity", "script", "prxmowes1e");
        </script>
    </body>
</html>
