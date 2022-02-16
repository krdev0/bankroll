<?php

/**
 * Enqueue theme assets
 * 
 * @package Bankroll
 */

namespace BANKROLL\Inc;

use BANKROLL\Inc\Traits\Singleton;

class Assets
{
    use Singleton;

    protected function __construct()
    {
        //Load Classes
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        //Actions and filters
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
    }

    public function register_styles()
    {
        //Register styles
        wp_register_style('style-css', BANKROLL_DIR_URI . '/dist/style.css', [], BANKROLL_VER, 'all');

        //Enqueue Styles
        wp_enqueue_style('style-css');
    }

    public function register_scripts()
    {
        //Enqueue Scripts
        wp_enqueue_script('main-js', BANKROLL_DIR_URI . '/dist/index.js', array('jquery'), BANKROLL_VER, true);
    }
}
