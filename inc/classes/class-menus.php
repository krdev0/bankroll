<?php

/**
 * Create theme menus
 * 
 * @package Bankroll
 */

namespace BANKROLL\Inc;

use BANKROLL\Inc\Traits\Singleton;

class Menus
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
        add_action('init', [$this, 'register_menus']);
    }

    public function register_menus()
    {
        register_nav_menus(array(
            'bankroll-primary-menu' => __('Primary Menu', 'bankroll'),
            'bankroll-footer-menu'  => __('Footer Menu', 'bankroll'),
        ));
    }

    public function get_menu_id($location)
    {
        $locations = get_nav_menu_locations();

        $menu_id = $locations[$location];

        return !empty($menu_id) ? $menu_id : '';
    }

    public function get_child_menu_items($menu_array, $parent_id)
    {
        $child_menu = [];

        if (!empty($menu_array) && is_array($menu_array)) {
            foreach ($menu_array as $item) {
                if (intval($item->menu_item_parent) == $parent_id) {
                    array_push($child_menu, $item);
                }
            }
        }

        return $child_menu;
    }
}
