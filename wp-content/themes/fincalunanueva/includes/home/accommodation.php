<?php
  $accommodations_section_title_bg = get_field( "accommodations_section_title_bg" );
  $accommodations_text = get_field( "accommodations_text" );
?>

<section class="home-accommodation">
  <div class="section-billboard crop-brown" style="background-image: url('<?php echo $accommodations_section_title_bg['url']; ?>');">
    <h2>Accommodations</h2>
  </div>
  <div class="container">
    <h3>Down to earth comfort</h3>
    <div class="row">
      <div class="col-md-10">
          <?php echo $accommodations_text; ?>
      </div>
    </div>
    <div class="home-suites">
      <div class="row">

        <!-- Loop through rooms -->
        <?php
          $args = array( 'post_type' => 'room', 'posts_per_page' => 4 );
          $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : $loop->the_post();
        ?>

        <div class="col-xs-6 col-md-3">
          <a href="<?php the_permalink(); ?>" class="suite">
            <div class="suite-photo" style="background-image:url('<?php the_post_thumbnail_url( full ); ?>');"></div>
            <h4><?php the_title(); ?></h4>
            <p>
              <?php the_excerpt(); ?>
            </p>
            <span class="btn btn-primary">Learn more</span>
          </a>
        </div>

        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
      </div>
    </div>
  </div>
</section>
