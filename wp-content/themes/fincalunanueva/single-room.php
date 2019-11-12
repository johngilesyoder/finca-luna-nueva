<?php get_header(); ?>
<main role="main">
  <div class="container">
		<div class="row">
      <div class="col-md-9">
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>
      			<h1 class="post-title"><?php the_title(); ?></h1>

      			<div class="post-content">
      				<?php the_content(); ?>
      			</div>

            <div class="room-rates">
              <h4><?php the_title(); ?> Rates <!--<small>(2019/2020)</small>--></h4>
              <?php if( have_rows('room_rates') ): ?>

                <div class="table-responsive">
                  <table class="table table-rates">
                    <tbody>
                      <thead>
                        <tr>
                          <th></th>
                          <th>High Season</th>
                          <th>Holiday Season</th>
                          <th>Green Season</th>
                        </tr>
                      </thead>

                      <?php while( have_rows('room_rates') ): the_row();

                        // vars
                        $rate_type = get_sub_field('rate_type');
                        $high_season = get_sub_field('high_season');
                        $holiday_season = get_sub_field('holiday_season');
                        $green_season = get_sub_field('green_season');

                      ?>

                        <tr>
                          <td><?php echo $rate_type; ?></td>
                          <td>$<?php echo $high_season; ?>.00<small> / night</small></td>
                          <td>$<?php echo $holiday_season; ?>.00<small> / night</small></td>
                          <td>$<?php echo $green_season; ?>.00<small> / night</small></td>
                        </tr>

                      <?php endwhile; ?>

                    </tbody>
                  </table>
                </div>

                <a href="/accommodations/reservations" class="btn btn-primary">Reserve this room now</a>

              <?php endif; ?>
            </div>

            <div class="room-meta">
              <h2>Helpful Information</h2>
              <div class="row">
                <div class="col-md-5">
                  <div class="season-dates">
                    <h4>Season dates</h4>
                    <?php the_field('season_dates', 'option'); ?>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="rates-include">
                    <h4>Rates include</h4>
                    <?php the_field('rates_include', 'option'); ?>
                  </div>
                </div>
              </div>
              <div class="important-notes">
                <h4>Important notes</h4>
                <?php the_field('important_notes', 'option'); ?>
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
        <?php get_sidebar('page'); ?>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
