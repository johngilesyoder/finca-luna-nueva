<?php get_header(); ?>

<main role="main">
  <div class="container">
  	<div class="back-to-blog">
  		<a href="/journal">&larr; Return to the journal</a>
  	</div>
		<div class="row">
      <div class="col-md-9">
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
          			<h1 class="post-title"><?php the_title(); ?></h1>
          			<span class="post-author"><em>Posted by </em><?php the_author_posts_link(); ?></span>

                <div class="share">
                  <div class="share-facebook">
                    <div class="fb-like" data-width="80" data-layout="button" data-action="like" data-show-faces="false" data-share="true"></div>
                  </div>
                  <div class="share-twitter">
                    <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                  </div>
                  <div class="share-pinterest">
                    <a href="https://www.pinterest.com/pin/create/button/">
                      <img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" />
                    </a>
                  </div>
                </div>

          			<?php if( !get_field('hide_feature_image_at_top') ): ?>
	
                  <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
          			
                  <a href="<?php the_permalink(); ?>" class="post-thumbnail" title="<?php the_title(); ?>" style="background-image: url('<?php the_post_thumbnail_url( "blogroll" ); ?>');"></a>
                  
                  <?php endif; ?>
                  
                <?php endif; ?>
                

          			<div class="post-content">
          				<?php the_content(); ?>
          			</div>


          		</div>
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
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>