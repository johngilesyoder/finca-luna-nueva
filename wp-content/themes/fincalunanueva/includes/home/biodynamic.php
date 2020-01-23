<?php
  $biodynamic_section_title_bg = get_field( "biodynamic_section_title_bg" );
  $biodynamic_text = get_field( "biodynamic_text" );
  $biodynamic_image = get_field( "biodynamic_image" );
  $costa_rica_text = get_field( "costa_rica_text" );
  $costa_rica_images = get_field( "costa_rica_images" );
?>

<section class="home-biodynamic">
  <div class="section-billboard crop-green" style="background-image: url('<?php echo $biodynamic_section_title_bg['url']; ?>');">
    <h2>Regenerative &amp; Diverse</h2>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <img class="img-watercolor img-responsive" src="<?php echo $biodynamic_image['url']; ?>" alt="">
        <!-- <img class="demeter-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-demeter-dark.png" alt=""> -->
      </div>
      <div class="col-sm-9">
        <div class="statement">
          <?php echo $biodynamic_text; ?>
        </div>
      </div>
    </div>
    <div class="home-locality">
      <h4>A Little About Costa Rica And Our Locality</h4>
      <div class="row">
        <div class="col-md-10">
          <?php echo $costa_rica_text; ?>
        </div>
      </div>
      <div class="locality-photos">
        <div class="row">
          <?php if( have_rows('costa_rica_images') ): while( have_rows('costa_rica_images') ): the_row();
            // vars
            $costa_rica_image = get_sub_field('costa_rica_image');
          ?>
          <div class="col-sm-4">
            <div class="locality-photo" style="background-image:url('<?php echo $costa_rica_image['url']; ?>');"></div>
          </div>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
