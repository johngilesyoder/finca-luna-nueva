<?php /* Template Name: Rooms */ get_header(); ?>
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

					<?php endwhile; ?>

					<?php else: ?>

						<!-- article -->
						<article>

							<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

						</article>
						<!-- /article -->

					<?php endif; ?>

						<section class="rooms-list">
							<div class="row">
								<!-- Loop through rooms -->
								<?php
									$args = array( 'post_type' => 'room', 'posts_per_page' => 10 );
									$loop = new WP_Query( $args );
									while ( $loop->have_posts() ) : $loop->the_post();
								?>

								<div class="col-md-6">
									<figure class="room-block effect-sarah">
										<img src="<?php the_post_thumbnail_url( full ); ?>" alt="<?php the_title(); ?>"/>
										<figcaption>
											<h2><?php the_title(); ?></h2>
											<p>
												<span class="view-more">Find out more &rarr;</span>
											</p>
											<a href="<?php the_permalink(); ?>">View more</a>
										</figcaption>
									</figure>
								</div>

								<?php endwhile; ?>
								<?php wp_reset_query(); ?>
							</div>
						</section>

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
