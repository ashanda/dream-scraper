<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dream-scapers
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/inc/css/responsive.css">
    <title><?php $blog_title = get_bloginfo(); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- Preloader -->
    <?php if (is_front_page()) { ?>


        <div id="preloader">
            <div class="preloader_cotent">
                <img class="pre_top_img" src="<?php echo get_template_directory_uri(); ?>/inc/img/key_light.png">
                <h2 class="pre_text">Loading</h2>
                <div class="lds-ellipsis">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
            <!-- <img class="pre_img1" src="<?php echo get_template_directory_uri(); ?>/inc/img/icons/default.png" alt="">
        <img class="pre_img2" src="<?php echo get_template_directory_uri(); ?>/inc/img/icons/text_icon.png" alt=""> -->
        </div>

    <?php } ?>


    <!-- Header -->
    <div class="top_section" style="background-image:url(<?php echo get_template_directory_uri(); ?>/inc/img/background_1.png);">
        <div class="header_top" style="background-image: url('<?php echo get_template_directory_uri(); ?>/inc/img/header.png');">
            <table width="100%">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_id' => 'main-menu',
                        'container' => 'tr',
                        'container_id' => 'main-menu',
                        'items_wrap'  => '<td id="%1$s" class="%2$s">%3$s</td>',

                    )
                );
                ?>

            </table>
        </div>
        <!-- Navigation -->
        <div class="row navigation">
            <div class="col-4">
                <a href="">
                    <img class="logo img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/logo.png" alt="">
                </a>
            </div>
            <div class="col-8">
                <table class="icons ms-auto">
                    <tr>
                        <td><a class="nav-link" href="/shop/"><img class="img-fluid" src="https://dreamscaperspublishing.com/wp-content/uploads/2022/09/shop-icon.png" alt="">
                                Shop</a></td>
                        <td><a class="nav-link" href="javascript:void(Tawk_API.toggle())"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/icons/chat_icon.png" alt="">
                                Live Chat</a></td>
                        <td><a class="nav-link" href="mailto:support@dreamscaperspublishing.com"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/icons/email-icon.png" alt="">
                                support@dreamscaperspublishing.com</a></td>

                    </tr>
                </table>
            </div>
        </div>