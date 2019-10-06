<?php
  $adventures_activities_section_title_bg = get_field( "adventures_&_activities_section_title_bg" );
  $adventures_activities_text = get_field( "adventures_&_activities_text" );
  $adventures_activities_image = get_field( "adventures_&_activities_image" );
?>

<section class="home-recreation">
  <div class="section-billboard crop-orange" style="background-image: url('<?php echo $adventures_activities_section_title_bg['url']; ?>');">
    <h2>Adventures &amp; Activities</h2>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <img class="img-watercolor img-responsive" src="<?php echo $adventures_activities_image['url']; ?>" alt="<?php echo $adventures_activities_image['alt']; ?>">
      </div>
      <div class="col-sm-9">
        <div class="statement">
          <?php echo $adventures_activities_text; ?>
        </div>
      </div>
    </div>
    <div class="home-tours">
      <div class="row">
        <!-- Loop through tours -->
        <?php
          $args = array( 'post_type' => 'tour', 'posts_per_page' => 4, 'cat' => -8 );
          $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : $loop->the_post();
        ?>

        <div class="col-xs-6 col-md-3">
          <div class="tour">
            <a href="<?php the_permalink(); ?>" class="tour-photo" style="background-image:url('<?php the_post_thumbnail_url( full ); ?>');"></a>
            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <p>
              <?php the_excerpt(); ?>
            </p>
          </div>
        </div>

        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
      </div>
      <div class="row">
        <!-- Loop through tours -->
        <?php
          $args = array( 'post_type' => 'tour', 'posts_per_page' => 4, 'cat' => 8 );
          $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : $loop->the_post();
        ?>

        <div class="col-xs-6 col-md-3">
          <div class="tour">
            <a href="<?php the_permalink(); ?>" class="tour-photo" style="background-image:url('<?php the_post_thumbnail_url( full ); ?>');"></a>
            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <p>
              <?php the_excerpt(); ?>
            </p>
          </div>
        </div>

        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
      </div>
    </div>
  </div>
</section>
