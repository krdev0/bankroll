<?php

/**
 * Theme Functions
 * 
 * @package Bankroll
 */

if (!defined('BANKROLL_DIR_PATH')) {
    define('BANKROLL_DIR_PATH', untrailingslashit(get_template_directory()));
}

if (!defined('BANKROLL_DIR_URI')) {
    define('BANKROLL_DIR_URI', untrailingslashit(get_template_directory_uri()));
}

if (!defined('BANKROLL_VER')) {
    define('BANKROLL_VER', wp_get_theme()->get('Version'));
}

require_once BANKROLL_DIR_PATH . '/inc/helpers/autoloader.php';

function bankroll_get_theme_instance()
{
    \BANKROLL\Inc\BANKROLL_THEME::get_instance();
}

bankroll_get_theme_instance();
