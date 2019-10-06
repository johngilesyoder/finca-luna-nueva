<?php get_header(); ?>

<?php 
  $img = wp_get_attachment_image_src(get_post_thumbnail_id(get_option('page_for_posts')),'full'); 
  $featured_image = $img[0];
?>

  <!-- post thumbnail -->
  <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
    <div class="section-billboard page-billboard crop-green billboard-blog" style="background-image: url('<?php echo $featured_image ?>');">
      <span class="gradient"></span>
      <div class="container">
        <h1><?php echo apply_filters('the_title',get_page( get_option('page_for_posts') )->post_title); ?></h1>
      </div>
    </div>
  <?php endif; ?>

	<main role="main" class="page-journal">
    <div class="container">
      <div class="tile-posts">
  			<div class="row">
          <div class="col-md-9">
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
