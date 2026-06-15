<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>
<style>
    .custom-logo-link img{
        max-width:200px;
        height:auto;
    }
    .position-relative{
        position:relative;
    }
    .cart-count{
        position: absolute;
        min-width: 20px;
        height: 20px;
        background: #1f3049;
        border-radius: 999px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
        top: -9px;
        right: -9px;
        border: 2px solid #fff;
        font-size: 12px;
        padding: 0 6px;
    }
</style>
</head>

<body <?php body_class(); ?>>
    <!-- Announcement Bar -->
    <div class="announcement-bar">
      mastercard disabled – all other credit cards and payment options are
      available ***promocode "premier15" now active***
    </div>

    <!-- Header -->
    <header class="site-header">
      <div class="container header-wrapper">
        
          
          <?php
                if (has_custom_logo()) {
                    the_custom_logo();
                }
          ?>
        

        <nav class="desktop-nav">
          <?php

                    wp_nav_menu([
                        'theme_location' => 'primary-menu',
                        'container'      => false,
                        'menu_class'     => ''
                    ]);

                    ?>
        </nav>

        <div class="header-icons">
          <a href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')); ?>" aria-label="Account">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Account-Icon.svg" alt="Account Icon" />
          </a>

          <a href="#" aria-label="Search">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Search-Icon.svg" alt="Search Icon" />
          </a>

          <a href="<?php echo wc_get_cart_url(); ?>" aria-label="Cart" class="position-relative">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Bag-Icon.svg" alt="Cart Icon" />
            <span class="cart-count">
                    <?php echo WC()->cart->get_cart_contents_count(); ?>
            </span>
          </a>

          <button class="hamburger">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </div>
    </header>
    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div>

    <nav class="mobile-menu">
      <button class="mobile-menu-close" aria-label="Close Menu">×</button>

      <?php

            wp_nav_menu([
                'theme_location' => 'primary-menu',
                'container'      => false
            ]);

        ?>

    </nav>