<?php

/**
 * Enqueue theme assets
 * 
 * @package Bankroll
 */

namespace BANKROLL\Inc;

use BANKROLL\Inc\Traits\Singleton;

class Acf
{
    use Singleton;

    protected function __construct()
    {
        //Load Classes
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        add_action('acf/init', [$this, 'create_admin_menu']);
    }

    public function create_admin_menu()
    {
        if (function_exists('acf_add_options_page')) {

            acf_add_options_page(array(
                'page_title'     => 'Theme General Settings',
                'menu_title'    => 'Theme Settings',
                'menu_slug'     => 'theme-general-settings',
                'capability'    => 'edit_posts',
                'redirect'        => false
            ));
        }
    }
}
