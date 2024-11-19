<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo("charset"); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo("description"); ?>">
		<title><?php
  wp_title("");
  if (wp_title("", false)) {
      echo " : ";
  }
  bloginfo("name");
  ?></title>

		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo(
      "name"
  ); ?>" href="<?php bloginfo("rss2_url"); ?>" />

		<link
            rel="icon"
            type="image/png"
            href="<?php echo esc_url(
                get_template_directory_uri()
            ); ?>/favicon-48x48.png"
            sizes="48x48"
        />
        <link rel="icon" type="image/svg+xml" href="<?php echo esc_url(
            get_template_directory_uri()
        ); ?>/favicon.svg" />
        <link rel="shortcut icon" href="<?php echo esc_url(
            get_template_directory_uri()
        ); ?>/favicon.ico" />
        <link
            rel="apple-touch-icon"
            sizes="180x180"
            href="<?php echo esc_url(
                get_template_directory_uri()
            ); ?>/apple-touch-icon.png"
        />
        <meta name="apple-mobile-web-app-title" content="Logos" />
        <link rel="manifest" href="<?php echo esc_url(
            get_template_directory_uri()
        ); ?>/site.webmanifest" />

        <link rel="stylesheet" href="<?php echo esc_url(
            get_template_directory_uri()
        ); ?>/assets/css/styles.css" />

		<?php wp_head(); ?>

		<!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NW86JFJW');</script>
        <!-- End Google Tag Manager -->
	</head>
	<body>
    	<!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NW86JFJW"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <div id="backdrop"></div>
        <div class="menu">
            <a id="cerrar-menu" href="javascript:void(0)">
                <i class="fas fa-times"></i>
            </a>
            <div class="menu-contenido">
                <a class="anchor" id="btn-logo" href="<?php echo esc_url(
                    home_url()
                ); ?>">
                    <img
                        class="logo img-fluid"
                        src="<?php echo esc_url(
                            get_template_directory_uri()
                        ); ?>/assets/images/logo@2x.png"
                        alt=""
                    />
                </a>
                <nav>
                    <ul id="navmenu" class="list-unstyled mb-0">
                        <li>
                            <a <?php if (
                                is_home()
                            ): ?>class="anchor"<?php endif; ?> id="btn-nav-1" href="<?php if (
     !is_home()
 ):
     echo esc_url(home_url());
 endif; ?>#nosotros"
                                >Nosotros</a
                            >
                        </li>
                        <li>
                            <a <?php if (
                                is_home()
                            ): ?>class="anchor"<?php endif; ?> id="btn-nav-2" href="<?php if (
     !is_home()
 ):
     echo esc_url(home_url());
 endif; ?>#servicios"
                                >Servicios</a
                            >
                        </li>
                        <li>
                            <a <?php if (
                                is_home()
                            ): ?>class="anchor"<?php endif; ?> id="btn-nav-3" href="<?php if (
     !is_home()
 ):
     echo esc_url(home_url());
 endif; ?>#testimonios"
                                >Testimonios</a
                            >
                        </li>
                        <li>
                            <a <?php if (
                                is_home()
                            ): ?>class="anchor"<?php endif; ?> id="btn-nav-4" href="<?php if (
     !is_home()
 ):
     echo esc_url(home_url());
 endif; ?>#equipo"
                                >Equipo</a
                            >
                        </li>
                        <li>
                            <a <?php if (
                                is_home()
                            ): ?>class="anchor"<?php endif; ?> id="btn-nav-5" href="<?php if (
     !is_home()
 ):
     echo esc_url(home_url());
 endif; ?>#blog"
                                >Blog</a
                            >
                        </li>
                    </ul>
                </nav>
                <a
                    href="javascript:void(0)"
                    class="btn btn-secondary"
                    id="btn-contacto"
                    data-bs-toggle="modal"
                    data-bs-target="#modal-contacto"
                    >Contáctanos</a
                >
                <!-- div id="social">
                    <ul class="social list-inline">
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/" target="_blank">
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
                    </ul>
                </div -->
                <div id="contacto-menu">
                    <ul class="list-unstyled">
                        <li>
                            <i class="far fa-envelope"></i>
                            <a href="mailto:contacto@logosmedicalcenter.mx">contacto@logosmedicalcenter.mx</a>
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <a href="tel:+526143739566">(614) 373 9566</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <header id="navbar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-4 my-auto">
                        <a href="<?php echo esc_url(home_url()); ?>">
                            <img
                                src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/logo@2x.png"
                                alt=""
                                class="logo img-fluid"
                                id="logo-navbar"
                            />
                        </a>
                    </div>
                    <div class="col-8 my-auto text-end">
                        <a id="mburger" href="javascript:void(0)">
                            <i class="fas fa-bars"></i>
                        </a>
                    </div>
                </div>
            </div>
        </header>
