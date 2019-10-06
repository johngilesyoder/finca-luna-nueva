<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
  <article id="post-<?php the_ID(); ?>" <?php post_class('normal-post'); ?>>
  	<div class="row">
  		<div class="col-md-2">
  			<div class="post-date">
  				<span class="post-month"><?php the_time('F j'); ?></span>
  				<span class="post-year"><?php the_time('Y'); ?></span>
  			</div>
  		</div>
  		<div class="col-md-10">
  			<h2 class="post-title">
  				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
  					<?php the_title(); ?>
  				</a>
  			</h2>
        <span class="post-author"><em>Posted by </em><?php the_author_posts_link(); ?></span>
  			<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
  			
  			<a href="<?php the_permalink(); ?>" class="post-thumbnail" title="<?php the_title(); ?>" style="background-image: url('<?php the_post_thumbnail_url( "blogroll" ); ?>');"></a>
  			
  			<?php endif; ?>

  			<div class="post-excerpt">
  				<?php the_excerpt(); ?>
  			</div>

  			<a href="<?php the_permalink(); ?>" class="continue-reading">Continue reading &rarr;</a>
  		</div>
  	</div>
  </article>

<?php endwhile; ?>

<?php else: ?>

	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>

<?php endif; ?>