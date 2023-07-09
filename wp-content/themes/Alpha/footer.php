<footer class="footer">
    <div class="container">
      <div class="footer__top">
        <div class="footer__column-first">
          <div class="footer__logo"> <?php the_custom_logo(); ?></div>
          <div class="header__number footer__number">
            <img class="header__number-img" src="<?php bloginfo('template_url');  ?>/assets/images/phone.svg" alt="phone">
            <a href="tel:+12263700170"> <?php the_field('phone'); ?></a>
          </div>
          <p class="footer__link footer__address"><?php the_field('address');?></p>
          <a class="footer__link" href="mailto:info@appliancerepairexpert.ca"><?php the_field('email');?></a>
        </div>
        <div class="footer__column">
          <h3 class="footer__title">ABOUT COMPANY</h3>
          <ul class="footer__list">
            <li class="footer__item"><a class="footer__link" href="#!">Maintance Plans</a></li>
            <li class="footer__item"><a class="footer__link" href="#!">Coupons </a></li>
            <li class="footer__item"><a class="footer__link" href="#!">Review</a></li>
            <li class="footer__item"><a class="footer__link" href="#!">FAQ</a></li>
            <li class="footer__item"><a class="footer__link" href="#!">Blog</a></li>
            <li class="footer__item"><a class="footer__link" href="#!">Contact</a></li>
          </ul>
        </div>
        <div class="footer__column">
          <h3 class="footer__title">CUSTOMER SERVICES</h3>
          <ul class="footer__list">
            <li class="footer__item"><a class="footer__link" href="#!">Residential</a></li>
            <li class="footer__item"><a class="footer__link" href="#!">Commercial</a></li>
            <li class="footer__item"><a class="footer__link" href="#!">Repair</a></li>
            <li class="footer__item"><a class="footer__link" href="#!">Installation</a></li>
          </ul>
        </div>
        <div class="footer__column">
          <h3 class="footer__title">HELP AND SUPPORT</h3>
          <ul class="footer__list">
            <li class="footer__item"><a class="footer__link" href="#!">Appliance Repair Warranty</a></li>
            <li class="footer__item"><a class="footer__link" href="#!">Cancellation Policy</a></li>
            <li class="footer__item"><a class="footer__link" href="#!">Privacy Policy</a></li>
            <li class="footer__item"><a class="footer__link" href="#!">Careers</a></li>
          </ul>
        </div>
      </div>
      <div class="footer__midle">
        <button class="menu__buttom">
          <img class="menu__buttom-img" src="<?php bloginfo('template_url');  ?>/assets/images/Settings icon.svg" alt="buttom">
          <p class="menu__buttom-text"> BOOK ONLINE</p>
        </button>
        <ul class="social">
          <li class="social-item"><a class="social-link social__link-y" href="<?php the_field('youtube-link');?>" target="_blank"
              aria-label="link to youtube"></a></li>
          <li class="social-item"><a class="social-link social__link-fb" href="<?php the_field('facebook-link');?>" target="_blank"
              aria-label="link to facebook"></a></li>
          <li class="social-item"><a class="social-link social__link-p" href="<?php the_field('pinterest-link');?>" target="_blank"
              aria-label="link to pinterest"></a></li>
          <li class="social-item"><a class="social-link social__link-in" href="<?php the_field('instagram-link');?>" target="_blank"
              aria-label="link to instagram"></a></li>
        </ul>
      </div>
      <div class="footer-botton">
        <small class="footer__item"> © 2020@webovio. All Rights Reserved.</small>
      </div>
    </div>
  </footer>

  <?php wp_footer();?>
</body>

</html>