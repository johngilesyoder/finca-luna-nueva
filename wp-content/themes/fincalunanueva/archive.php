<?php get_header(); ?>

<main role="main" class="page-journal">
  	<div class="container">
  		<div class="tile-posts">
  			<div class="row">
  				<div class="col-md-9">
            <h1 class="page-title"><?php the_archive_title( '', '' ); the_archive_description( '<span class="taxonomy-description">', '</span>' );?></h1>
            <?php get_template_part('loop'); ?>
            <?php get_template_part('pagination'); ?>
  				</div>
  				<div class="col-md-3">
  					<?php get_sidebar(); ?>
  				</div>
  			</div>
  		</div>
  	</div>
  </main>


<?php get_footer(); ?>
