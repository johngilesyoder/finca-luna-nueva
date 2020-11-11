<?php
  $home_hero_title = get_field( "home_hero_title", false, false );
  $home_hero_subtitle = get_field( "home_hero_subtitle", false, false );
?>

<section class="home-hero">
  <?php if( have_rows('hero_backgrounds') ): ?>
    <div class="hero-backgrounds">
      <?php while( have_rows('hero_backgrounds') ): the_row(); 
          $image = get_sub_field('hero_background_image');
          ?>
          <div class="hero-background" style="background-image: url('<?php echo esc_url($image['url']); ?>');"></div>
      <?php endwhile; ?>
    </div>
  <?php endif; ?>
  <div class="hero-content-wrapper">
    <div class="hero-content">
      <h2><?php echo $home_hero_title; ?></h2>
      <p><?php echo $home_hero_subtitle; ?></p>
    </div>
  </div>
</section>
