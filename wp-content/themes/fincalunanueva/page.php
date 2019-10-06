<?php get_header(); ?>

	<!-- post thumbnail -->
	<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
		<div class="section-billboard page-billboard crop-orange" style="background-image: url('<?php the_post_thumbnail_url( full ); ?>');">
	    <span class="gradient"></span>
	    <div class="container">
	    	<h1><?php the_title(); ?></h1>
	    </div>
	  </div>
	<?php endif; ?>

	<main role="main">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
      		<?php if($post->post_parent): ?>

      		<div class="page-content page-child">
        		<!-- Page parent -->
						<span class="parent-page"><?php echo get_the_title($post->post_parent);?><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-parent-chevron.svg"></span>

					<?php else : ?>

					<div class="page-content">

					<?php endif; ?>

					<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>

					<?php else: ?>

						<h1 class="page-title"><?php the_title(); ?></h1>

					<?php endif; ?>

					<?php if (have_posts()): while (have_posts()) : the_post(); ?>

						<!-- article -->
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<?php the_content(); ?>

						</article>
						<!-- /article -->


						<?php if( have_rows('quote') ): ?>

							<section class="quotes">
								<h3>What others are saying</h3>
								<?php while( have_rows('quote') ): the_row();
									// vars
									$quote_text = get_sub_field( "quote_text" );
									$quote_author = get_sub_field( "quote_author" );
									$quote_author_title = get_sub_field( "quote_author_title", false, false );
								?>

								<blockquote class="quote-feature">
									<div class="quote-content">
										<div class="quote-statement">
											<?php echo $quote_text; ?>
										</div>
										<cite>—&nbsp; <span class="cite-person"><?php echo $quote_author; ?></span> <span class="cite-title"><?php echo $quote_author_title; ?></span></cite>
									</div>
								</blockquote>

							<?php endwhile; ?>

							</section>

						<?php endif; ?>




					<?php endwhile; ?>

					<?php else: ?>

						<!-- article -->
						<article>

							<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

						</article>
						<!-- /article -->

					<?php endif; ?>

					</div>
				</div>

				<?php
			  	if($post->post_parent) {
			  	$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
			  	$parent = get_the_title($post->post_parent);
			  	}

				  else {
				  $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
				  $parent = get_the_title($post->ID);
				  }

			  	if ($children) :
			  ?>

			  <div class="col-md-3">
			  	<aside class="page-sidebar">
					  <h3><?php echo $parent; ?></h3>
					  <ul>
					  	<?php echo $children; ?>
					  </ul>
					</aside>
				</div>

			<?php else: ?>

			<?php endif; ?>

			</div>
		</div>
	</main>

<?php get_footer(); ?>
