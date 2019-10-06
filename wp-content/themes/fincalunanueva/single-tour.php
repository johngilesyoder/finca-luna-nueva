<?php get_header(); ?>
<main role="main">
  <div class="container">
		<div class="row">
      <div class="col-md-9">
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        	
          <article id="post-<?php the_ID(); ?>" <?php post_class('tour-post'); ?>>
      			<h1 class="post-title"><?php the_title(); ?></h1>

      			<div class="post-content">
      				<?php the_content(); ?>
      			</div>

          </article>

        <?php endwhile; ?>

        <?php else: ?>

        	<article>
        		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
        	</article>

        <?php endif; ?>
      </div>
      <div class="col-md-3">
        <?php get_sidebar('page'); ?>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>