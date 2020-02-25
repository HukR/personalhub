<?php defined( 'ABSPATH' ) || exit; ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header class="top-header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">

                <a class="navbar-brand" href="#"><img class="img-fluid w-100" src="<?php echo PERSONALHUB_URL; ?>/assets/img/default-logo.svg" alt=""></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav mr-auto top-menu">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Arbeitgeber
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Bewerber
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Wissen
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                    </ul>

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item my-3 my-lg-0">
                            <a class="btn top-menu-blue-btn up-hover-animation" href="#"><img src="<?php echo PERSONALHUB_URL; ?>/assets/img/phone.png" alt=""> 030 120 643 64</a>
                        </li>
                        <li class="nav-item mb-3 mb-lg-0 ml-0 ml-lg-3">
                            <a class="btn top-menu-green-btn up-hover-animation" href="#">Zur Beratung</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
	</header>

    <section class="container heading-section">
        <div class="row">
            <div class="col-12 col-md-6 order-md-2 px-4">
                <img class="img-fluid w-100 mb-5 mb-md-0" src="<?php echo PERSONALHUB_URL; ?>/assets/img/header.png" alt="Header">
            </div>
            <div class="col-12 col-md-6 order-md-1 pr-4 d-flex flex-column justify-content-center align-items-start">
                <h1 class="text-center text-md-left">Full-Service-Recruiting einfach und <span class="highlight">smart</span></h1>
                <p>PersonalHub findet mit flexiblen Recruiting-Lösungen schnell und günstig passende Bewerber.</p>
                <a href="#" class="up-hover-animation heading-btn btn btn-primary ml-auto mr-auto ml-md-0">Lösungen ansehen</a>
            </div>
        </div>
    </section>

    <section class="container mt-5 mt-md-0">
        <div class="row">
            <div class="col-12 col-md-4 about-item">
                <img class="icon mb-3" src="<?php echo PERSONALHUB_URL; ?>/assets/img/icon-1.png" alt="Für KMUs">
                <h3>
                    Für KMUs
                </h3>
                <p>
                    PersonalHub ist spezialisiert kleinen und mittleren Unternehmen, ohne Personalabteilung, zu helfen
                </p>
            </div>
            <div class="col-12 col-md-4 about-item">
                <img class="icon mb-3" src="<?php echo PERSONALHUB_URL; ?>/assets/img/icon-2.png" alt="Schnell & preiswert">
                <h3>
                    Schnell & preiswert
                </h3>
                <p>
                    Mit den neuesten Technologien gewinnen wir Kandidaten performancebasiert.
                </p>
            </div>
            <div class="col-12 col-md-4 about-item">
                <img class="icon mb-3" src="<?php echo PERSONALHUB_URL; ?>/assets/img/icon-3.png" alt="Begeisterung durch Service">
                <h3>
                    Begeisterung durch Service
                </h3>
                <p>
                    Durch persönliche Ansprechpartner sind Sie 100% informiert und können jederzeit eingreifen.
                </p>
            </div>
        </div>
    </section>
