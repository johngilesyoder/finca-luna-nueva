<?php
  $journal_text = get_field( "journal_text" );
?>

<div class="container">
  <section class="home-journal">
    <div class="journal-title">
      <h2>Journal</h2>
      <?php echo $journal_text; ?>
    </div>
    <div class="tile-posts">
      <div class="row">
        <?php query_posts( 'posts_per_page=3' ); ?>

          <?php get_template_part('loop-home'); ?>

        <?php wp_reset_query(); ?>

      </div>
    </div>
  </section>
</div>
