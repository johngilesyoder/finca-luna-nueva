			<!-- Callout -->
      <!-- =================================== -->
      <?php if ( ! is_page_template( 'template-contact.php' ) ) : ?>
      <?php get_template_part( 'includes/callout-footer' ); ?>
      <?php endif; ?>

      <footer class="site-footer" role="contentinfo">
        <div class="footer-certifications">
          <div class="container">
            <div class="certifications">
			  <a href="#"><img src="https://fincalunanuevalodge.com/wp-content/uploads/2019/09/regenerative-resorts.png" alt="Regenerative Resorts" /></a>
              <a href="http://www.demeter-usa.org" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/certification-demeter.png" alt="Demeter Certified Biodynamic"></a>
              <a href="http://www.turismo-sostenible.co.cr" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/certification-turismo.png" alt="Turismo Sostenible"></a>
              <a href="http://www.ict.go.cr/es/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/certification-ict.png" alt="ICT"></a>
              <a href="http://www.slowfood.com" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/certification-slow-food.png" alt="Slow Food Costa Rica"></a>
              <a href="https://costarica.org/travel-agency/tourism/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/certification-code-of-conduct.png" alt="Code of Conduct"></a>
              <a href="https://thecarbonunderground.org/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/certification-carbonunderground.png" alt="Carbon Underground"></a>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="footer-links">
            <div class="row">
              <div class="col-lg-9">
                <div class="columns-wrapper">
                  <nav class="links-column">
                    <?php footer_menu_1(); ?>
                  </nav>
                  <nav class="links-column">
                    <?php footer_menu_2(); ?>
                  </nav>
                  <nav class="links-column">
                    <?php footer_menu_3(); ?>
                  </nav>
                  <nav class="links-column">
                    <?php footer_menu_4(); ?>
                  </nav>
                </div>
              </div>
              <div class="col-lg-3 footer-mailchimp">
                <?php get_template_part( 'includes/mailchimp' ); ?>
              </div>
            </div>
          </div>
          <div class="footer-company">
            <div class="row">
              <div class="col-sm-7">
                <p class="copyright">
                  &copy; Finca Luna Nueva Lodge <?php echo date('Y'); ?>. All rights reserved.
                </p>
              </div>
              <div class="col-sm-5">
                <div class="footer-connect">
                  CONNECT
                  <a href="http://www.facebook.com/pages/Finca-Luna-Nueva-Lodge/127335486929" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-facebook.svg" alt="Finca on Facebook"></a>
                  <a href="http://twitter.com/lunanuevacr" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-twitter.svg" alt="Finca on Twitter"></a>
                  <a href="https://www.youtube.com/playlist?list=PL6ahixyjhM_p923BWhfvJZ4vXrjfI-1pq&feature=plcp" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-youtube.svg" alt="Finca on Youtube"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="footer-language">
            <?php echo do_shortcode('[prisna-google-website-translator]'); ?>
          </div>
        </div>
			</footer>

		<?php wp_footer(); ?>

	</body>
</html>
