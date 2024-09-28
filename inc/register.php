<?php
/**
 * Theme register functional.
 */
if (!defined("ABSPATH")) {
    exit;
}

if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title' => 'Ціни на сайт',
        'menu_title' => 'Ціни на сайт',
        'menu_slug' => 'price_site',
        'capability' => 'manage_options',
        'redirect' => false
    ));

}

