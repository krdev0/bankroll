<?php

/**
 * Casino Class
 * 
 * @package Bankroll
 */

namespace BANKROLL\Inc;

use BANKROLL\Inc\Traits\Singleton;

class Casino
{
    use Singleton;

    protected function __construct()
    {
        //Load Classes
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        add_action('init', [$this, 'register_casino_cpt']);
    }

    public function register_casino_cpt()
    {
        $labels = array(
            'name'                  =>  'Casinos',
            'singular_name'         =>  'Casino',
            'menu_name'             =>  'Casinos',
            'name_admin_bar'        =>  'Casino'
        );

        $args = array(
            'labels'             => $labels,
            'description'        => 'Casino custom post type.',
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array('slug' => 'casino'),
            'capability_type'    => 'post',
            'menu_icon'          => 'dashicons-star-filled',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => 20,
            'supports'           => array('title', 'thumbnail'),
            'taxonomies'         => array(),
            'show_in_rest'       => false
        );

        register_post_type('casino', $args);
    }
}
