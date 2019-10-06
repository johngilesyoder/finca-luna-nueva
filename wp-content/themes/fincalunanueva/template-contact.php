<?php /* Template Name: Contact */ get_header(); ?>

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
    	<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>

    	<?php else: ?>

    		<h1 class="page-title"><?php the_title(); ?></h1>

    	<?php endif; ?>

      <div class="row">
      	<div class="col-md-4">
      		<div class="contact-methods">
	      		<strong>Reception:</strong> (506) 2468-4006 <em>or</em> 2468-0864<br>
	      		<strong>USA / Canada:</strong> 1-800-903-3470<br>
	      		<strong>Skype:</strong> finca.luna.nueva<br>
	      		<strong>Fax:</strong> 011.506.2468.0864<br><br>
	      		<strong>Email:</strong> <a href="mailto:info@fincalunanuevalodge.com">info@fincalunanuevalodge.com</a><br>
						<strong>Address:</strong>
						<address>
							Luna Nueva Extractos de Costa Rica<br>
							S.A apartado 158-4400<br>
							Ciudad Quesada (San Carlos), Alajuela<br>
							Costa Rica
						</address>
	      		<a href="/discover/directions"><img class="icon-directions" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-directions.svg">View directions</a> to our physical location
	      	</div>
      	</div>
        <div class="col-md-8">
					<div class="page-content">

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

					</div>
				</div>
			</div>
		</div>
	</main>

<?php get_footer(); ?>
