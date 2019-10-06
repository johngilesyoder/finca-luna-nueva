<?php
  $home_hero_title = get_field( "home_hero_title", false, false );
  $home_hero_subtitle = get_field( "home_hero_subtitle", false, false );
?>

<section class="home-hero">
  <div class="hero-clouds"></div>
  <div class="hero-content-wrapper">
    <div class="hero-content">
      <h2><?php echo $home_hero_title; ?></h2>
      <p><?php echo $home_hero_subtitle; ?></p>
    </div>
  </div>
</section>
