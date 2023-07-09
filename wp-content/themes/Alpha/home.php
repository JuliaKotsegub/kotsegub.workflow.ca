<?php
/*
Template Name: home
*/
?>
<?php get_header();?>

 
  <main class="main">
    <section class="service">
      <div class="container">
      <div class="service__left"> 
          <h2 class="title"><?php the_field('title');?></h2>
          <p class="subtitle"><?php the_field('subtitle');?></p>
          <ul class="service__list">
            <li class="service__item"> <img class="service__item-img" src="<?php bloginfo('template_url');  ?>/assets/images/Frame.png" alt="">
              <p> <?php the_field('advantage-one');?> </p>
            </li>
            <li class="service__item"> <img class="service__item-img" src="<?php bloginfo('template_url');  ?>/assets/images/Frame.png" alt="">
              <p><?php the_field('advantage-two');?></p>
            </li>
            <li class="service__item"><img class="service__item-img" src="<?php bloginfo('template_url');  ?>/assets/images/Frame.png" alt="">
              <p> <?php the_field('advantage-three');?> </p>
            </li>
            <li class="service__item"><img class="service__item-img" src="<?php bloginfo('template_url');  ?>/assets/images/Frame.png" alt="">
              <p><?php the_field('advantage-four');?></p>
            </li>
          </ul>
          <button class="service__buttom">
            <img class="service__buttom-img" src="<?php bloginfo('template_url');  ?>/assets/images/phone.svg" alt="buttom">
            <p class="service__buttom-text"> Request a call</p>
          </button>
        </div>
      </div>
   </section>
  </main>

<?php get_footer();?>

