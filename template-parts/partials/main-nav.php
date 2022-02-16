<?php

/**
 * Header Navigation partial
 * 
 * @package Bankroll
 */

$menu_obj  = \BANKROLL\Inc\Menus::get_instance();
$header_menu_id = $menu_obj->get_menu_id('bankroll-primary-menu');
$header_menu = wp_get_nav_menu_items($header_menu_id);
?>

<?php if (!empty($header_menu) && is_array($header_menu)) : ?>
    <ul class="navbar">
        <?php foreach ($header_menu as $menu_item) : ?>
            <?php if (!$menu_item->menu_item_parent) : ?>
                <?php
                $child_menu_array = $menu_obj->get_child_menu_items($header_menu, $menu_item->ID);
                $has_children = !empty($child_menu_array) && is_array($child_menu_array);
                ?>
                <?php if (!$has_children) : ?>
                    <li class="nav-item"><a class="nav-link" href="<?php echo $menu_item->url; ?>"><?php echo wp_get_attachment_image(get_field('mc_menu_icon', $menu_item->ID), 'menu_item_icon', false, array("class" => "menu-item-icon")) ?><?php echo $menu_item->title; ?></a></li>
                <?php else : ?>
                    <li class="nav-item dropdown">
                        <a href="<?php echo $menu_item->url; ?>" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo wp_get_attachment_image(get_field('mc_menu_icon', $menu_item->ID), 'menu_item_icon', false, array("class" => "menu-item-icon")) ?>
                            <?php echo $menu_item->title; ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php foreach ($child_menu_array as $child_item) : ?>
                                <li class="menu-item"><a class="dropdown-item" href="<?php echo $child_item->url; ?>"><?php echo $child_item->title; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                <?php endif; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>