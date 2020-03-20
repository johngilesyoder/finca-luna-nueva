<?php
  $home_summary_text = get_field( "home_summary_text" );
  $home_summary_image = get_field( "home_summary_image" );
?>

<section class="home-summary">
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <img class="img-watercolor img-responsive" src="<?php echo $home_summary_image['url']; ?>" alt="<?php echo $home_summary_image['alt']; ?>">
      </div>
      <div class="col-sm-9">
        <div class="statement">
          <?php echo $home_summary_text; ?>
        </div>
      </div>
    </div>
    <!-- Tripadvisor -->
    <div class="tripadvisor-badges">
      <h3>Finca on Tripadvisor</h3>
      <div class="tripadvisor-award">
        <a target="_blank" href="https://www.tripadvisor.com/Hotel_Review-g309226-d1014002-Reviews-Finca_Luna_Nueva_Lodge-La_Fortuna_de_San_Carlos_Arenal_Volcano_National_Park_Province_.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/tripadvisor-award.png" alt=""></a>
      </div>
    </div>
  </div>
</section>
