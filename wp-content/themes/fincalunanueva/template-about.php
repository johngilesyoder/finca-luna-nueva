<?php /* Template Name: About */ get_header();
  $who_we_are_paragraph_content = get_field( "who_we_are_paragraph_content" );
  $who_we_are_bubble_photo_top = get_field( "who_we_are_bubble_photo_top" );
  $who_we_are_bubble_photo_bottom = get_field( "who_we_are_bubble_photo_bottom" );
  $quote_label = get_field( "about_quote_label", false, false );
  $quote = get_field( "about_quote", false, false );
  $quote_author = get_field( "about_quote_author", false, false );
  $quote_author_title = get_field( "about_quote_author_title", false, false );
  $regenerative_agriculture_section_title_bg = get_field( "regenerative_agriculture_section_title_bg" );
  $regenerative_agriculture_paragraph_content = get_field( "regenerative_agriculture_paragraph_content" );
  $regenerative_agriculture_terms = get_field( "regenerative_agriculture_terms" );
  $conservation_content = get_field( "conservation_content" );
  $conservation_logos = get_field('conservation_logos');
  $unique_experience_section_title_bg = get_field( "unique_experience_section_title_bg" );
  $unique_experience_paragraph_content = get_field( "unique_experience_paragraph_content" );
  $unique_experience_bubble_photo_top = get_field( "unique_experience_bubble_photo_top" );
  $unique_experience_bubble_photo_bottom = get_field( "unique_experience_bubble_photo_bottom" );
?>

  <div class="section-billboard page-billboard crop-orange" style="background-image: url('<?php the_post_thumbnail_url( full ); ?>');">
    <span class="gradient"></span>
    <div class="container">
      <h1><?php the_title(); ?></h1>
    </div>
  </div>

  <main role="main">

    <section class="section-founders">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <?php echo $who_we_are_paragraph_content; ?>
          </div>
          <div class="col-md-3">
            <div class="bubbles">
              <div class="bubble bubble-1" style="background-image: url('<?php echo $who_we_are_bubble_photo_top['url']; ?>');"></div>
              <div class="bubble bubble-2" style="background-image: url('<?php echo $who_we_are_bubble_photo_bottom['url']; ?>');"></div>
            </div>
          </div>
        </div>
        <blockquote class="quote-feature">
          <div class="row">
            <div class="col-sm-3">
              <div class="quote-title">
                <h3><?php echo $quote_label; ?></h3>
              </div>
            </div>
            <div class="col-sm-9">
              <div class="quote-content">
                <div class="quote-statement">
                  <p>
                    <?php echo $quote; ?>
                  </p>
                </div>
                <cite>—&nbsp; <span class="cite-person"><?php echo $quote_author; ?></span> <span class="cite-title"><?php echo $quote_author_title; ?></span></cite>
              </div>
            </div>
          </div>
        </blockquote>
      </div>
    </section>

    <section class="section-regenerative">
      <div class="section-billboard crop-brown" style="background-image: url('<?php echo $regenerative_agriculture_section_title_bg['url']; ?>');">
        <h2>Regenerative Agriculture</h2>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="regenerative-content">
              <?php echo $regenerative_agriculture_paragraph_content; ?>
            </div>
          </div>
          <div class="col-md-5">
            <div class="definitions">
              <?php echo $regenerative_agriculture_terms; ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-experience">
      <div class="section-billboard crop-green" style="background-image: url('<?php echo $unique_experience_section_title_bg['url']; ?>');">
        <h2>A Unique Experience</h2>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <?php echo $unique_experience_paragraph_content; ?>
          </div>
          <div class="col-md-3">
            <div class="bubbles">
              <div class="bubble bubble-1" style="background-image: url('<?php echo $unique_experience_bubble_photo_top['url']; ?>');"></div>
              <div class="bubble bubble-2" style="background-image: url('<?php echo $unique_experience_bubble_photo_bottom['url']; ?>');"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="legacy">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <?php echo $conservation_content; ?>
          <div class="legacy-logos">
            <?php if( have_rows('conservation_logos') ): while( have_rows('conservation_logos') ): the_row();
              // vars
              $conservation_logo = get_sub_field('conservation_logo');
            ?>
            <a href="http://www.acmcr.org"><img src="<?php echo $conservation_logo['url']; ?>" alt="<?php echo $conservation_image['alt'] ?>" /></a>
            <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>

  </main>

  <!-- Modal -->
  <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Soilidarity Newsletter</h4>
        </div>
        <div class="modal-body">
          <p>Subscribe to our newsletter <strong><em>Soilidarity</em></strong>, a once-monthly publication to unite us in the regeneration of our planet!</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">No, thank you</button>
          <a href="http://eepurl.com/gLMFHP" target="_blank" class="btn btn-primary">Sign me up</a>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
