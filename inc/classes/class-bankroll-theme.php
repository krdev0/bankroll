<?php

/**
 * Bootstraps the theme
 * 
 * @package Bankroll
 */

namespace BANKROLL\Inc;

use BANKROLL\Inc\Traits\Singleton;

class BANKROLL_THEME
{
    use Singleton;

    protected function __construct()
    {
        //Load Classes
        Assets::get_instance();
        Menus::get_instance();
        Sidebars::get_instance();
        Acf::get_instance();
        Casino::get_instance();

        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        add_action('after_setup_theme', [$this, 'setup_theme']);

        add_action('init', [$this, 'remove_editor']);

        // Disable Gutenberg for theme
        add_filter('use_block_editor_for_post', '__return_false', 10);
    }

    public function remove_editor()
    {
        remove_post_type_support('page', 'editor');
    }

    public function setup_theme()
    {

        add_theme_support('title-tag');
        add_theme_support('custom-logo', array(
            'height'               => 60,
            'width'                => 200,
            'flex-height'          => true,
            'flex-width'           => true,
            'header-text'          => array('site-title', 'site-description'),
            'unlink-homepage-logo' => false,
        ));
        add_theme_support('post-thumbnails', array('post'));
        add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));

        add_image_size('menu_item_icon', 26, 26, true);
        add_image_size('hero_block_bg', 1200, 400, true);
        add_image_size('payment_methods', 40, 20, true);
        add_image_size('operator_logo_small', 60, 30, false);
        add_image_size('operator_logo_medium', 150, 50, false);
        add_image_size('operator_logo_large', 300, 150, false);

        global $content_width;
        if (!isset($content_width)) {
            $content_width = 1180;
        }
    }
}
