<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset=" <?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alpha</title>

  <?php wp_head(); ?>
</head>

<body>

  <header class="header">
    <div class="container">
      <div class="header__inner">
        <div class="header__inner-top">
          <?php the_custom_logo(); ?>
          <div class="header__search">
            <input class="header__search-text " type="text" placeholder="Enter City / Postal Code">
             <button class="header__search-btn"><img src="<?php bloginfo('template_url');  ?>/assets/images/search.svg" alt="search"></button> 
          </div>
          <div class="header__number">
            <img class="header__number-img" src="<?php bloginfo('template_url');  ?>/assets/images/phone.svg" alt="phone">
            <a href="tel:+12263700170"><?php the_field('phone'); ?></a>
          </div>
        </div>
        <div class="header__inner-bottom">
          <div class="menu">
            <ul class="menu__list">
              <li class="menu__list-item">
                <a class="menu__list-link link-small" href="#">Appliance Service</a>
              </li>
              <li class="menu__list-item">
                <a class="menu__list-link link-small" href="#">Brands</a>
              </li>
              <li class="menu__list-item">
                <a class="menu__list-link link-big" href="#">Maintance Plans</a>
              </li>
              <li class="menu__list-item">
                <a class="menu__list-link link-big" href="#">Coupons</a>
              </li>
              <li class="menu__list-item">
                <a class="menu__list-link link-big" href="#">Reviews</a>
              </li>
              <li class="menu__list-item">
                <a class="menu__list-link link-big font-inter" href="#">About</a>
              </li>
              <li class="menu__list-item">
                <a class="menu__list-link link-big" href="#">Contact</a>
              </li>
            </ul>
          </div>
          <button class="menu__buttom">
            <img class="menu__buttom-img" src="<?php bloginfo('template_url');  ?>/assets/images/Settings icon.svg" alt="buttom">
            <p class="menu__buttom-text"> BOOK ONLINE</p>
          </button>
        </div>
      </div>
    </div>
  </header>