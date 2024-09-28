<?php
/**
 * Header theme.
 */
if (!defined("ABSPATH")) {
    exit;
}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" type="image/png" href="<?= get_template_directory_uri() . '/images'; ?>/146289.png">
    <title>TRADESOFTCORN</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<div class="hero_area">
    <header class="header_section">
        <div class="header_top">
            <div class="container-fluid header_top_container">
                <div class="contact_nav">
                    <a href="tel:+380503371618">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <div class="contact_tel-wrapp">
                            <a class="contact_tel" href="tel:+380503371618">Номер офісу: +380512 70 97 38 </a>
                            <a class="contact_tel" href="tel:+380512709738">Номер елеватору: +380957170501 </a>
                        </div>
                    </a>
                    <a href="mailto:dametratrading@ukr.net">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <span>
                            dametratrading@ukr.net
                        </span>
                    </a>
                    <a href="#sect-contacts">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span>
                            Локація
                        </span>
                    </a>
                </div>
                <div class="social_box">
                    <a href="">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a href="">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                    <a href="">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="header_bottom">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav  ">
                            <li class="nav-item active">
                                <a class="nav-link" href="">Головна</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#sect-about">Про нас</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#sect-elevator">Послуги елеватору</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#sect-contacts">Контакти</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <body <?php body_class(); ?>>