<?php if (have_posts()): while (have_posts()) : the_post(); ?>

  <div class="col-sm-4">
    <article id="post-<?php the_ID(); ?>" <?php post_class( 'tile-post'); ?>>

      <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>

      <a href="<?php the_permalink(); ?>" class="post-thumbnail" title="<?php the_title(); ?>" style="background-image: url('<?php the_post_thumbnail_url( "blogroll" ); ?>');"></a>

      <?php else : ?>

      <a href="<?php the_permalink(); ?>" class="post-thumbnail" title="<?php the_title(); ?>" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/thumbnail-default.png');"></a>

      <?php endif; ?>

      <span class="post-date"><?php the_time('F j'); ?></span>
      <h2 class="post-title">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
          <?php the_title(); ?>
        </a>
      </h2>
    </article>
  </div>

<?php endwhile; ?>

<?php else: ?>

	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>

<?php endif; ?>
