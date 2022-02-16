<?php

/**
 * Header file
 * 
 * @package Bankroll
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body>
    <?php if (function_exists('wp_body_open')) {
        wp_body_open();
    }
    ?>

    <?php get_template_part('template-parts/header/nav'); ?>

    <main class="page-content">