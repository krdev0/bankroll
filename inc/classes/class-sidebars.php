<?php

/**
 * Crreate Sidebars
 * 
 * @package Bankroll
 */

namespace BANKROLL\Inc;

use BANKROLL\Inc\Traits\Singleton;

class Sidebars
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
        add_action('widgets_init', [$this, 'register_sidebars']);
    }

    public function register_sidebars()
    {
        register_sidebar(array(
            'name'          => __('Main Sidebar', 'bankroll'),
            'id'            => 'main-sidebar',
            'description'   => __('Widgets in this area will be shown on all posts and pages.', 'bankroll'),
            'before_widget' => '<aside>',
            'after_widget'  => '</aside>',
            'before_title'  => '<h2 class="widgettitle">',
            'after_title'   => '</h2>',
        ));

        register_sidebar(array(
            'name'          => __('Secondary Sidebar', 'bankroll'),
            'id'            => 'secondary-sidebar',
            'description'   => __('Widgets in this area will be shown on all posts and pages.', 'bankroll'),
            'before_widget' => '<aside>',
            'after_widget'  => '</aside>',
            'before_title'  => '<h2 class="widgettitle">',
            'after_title'   => '</h2>',
        ));
    }
}
