<!-- sidebar -->
<aside class="blog-sidebar" role="complementary">

  <div class="row">
  	<div class="sidebar-widget">
  		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('global-sidebar')) ?>
  	</div>
    <div class="col-sm-6 col-md-12">
      <div class="sidebar-archives">
        <h3>Journal Archives</h3>
        <select name="archive-dropdown" class="form-control" onchange="document.location.href=this.options[this.selectedIndex].value;">
          <option value=""><?php echo esc_attr( __( 'Select Month' ) ); ?></option>
          <?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option', 'show_post_count' => 1 ) ); ?>
        </select>
      </div>
    </div>
  </div>

  <!-- Tripadvisor -->
  <div class="sidebar-tripadvisor">
    <h3>Finca on Tripadvisor</h3>
    <div class="badges">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tripadvisor-1.svg" alt="">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tripadvisor-2.svg" alt="">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tripadvisor-3.svg" alt="">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tripadvisor-4.svg" alt="">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tripadvisor-5.svg" alt="">
    </div>
  </div>
  <!-- Detecta Hotel Rating -->
  <div id="hc-ratingRatingHotel">
    <div id="hc-ratingRatingHotel__inner">
      <img id="hc-ratingRatingHotel__ribbon" src="https://media.datahc.com/ratinghotel/stellar2/ribbon.png"/>
      <span id="hc-ratingRatingHotel__year" style="line-height:8px;">2017</span>
      <span id="hc-ratingRatingHotel__award" style="line-height:8px;">RECONOCIMIENTO A LA EXCELENCIA</span>
      <div id="hc-ratingRatingHotel__hotelink">
        <a id="hc-ratingRatingHotel__hotelname" target="_blank" href="javascript:void(0)">Finca Luna Nueva Lodge</a>
      </div>
      <a id="hc-ratingRatingHotel__hclink" target="_blank" href="https://www.detectahotel.com/">HotelsCombined</a>
    </div>
    <div id="hc-ratingRatingHotel__rating">
      <span id="hc-ratingRatingHotel__number">9.1</span>
      <span id="hc-ratingRatingHotel__pipe"></span>
      <span id="hc-ratingRatingHotel__ratedby">Valorado por los clientes</span>
    </div>
  </div>
  <div id="hc-data__hotellink" style="display: none;">
    Finca_Luna_Nueva_Lodge
  </div>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js"></script>
  <script>
  (function(){
    var rand = Math.floor((Math.random() * 99999999) + 1);
    function loadjscssfile(a,b){
      if("js"==b){
        var c=document.createElement("script");
        c.setAttribute("type","text/javascript"),
        c.setAttribute("src",a)
      }else if("css"==b){
        var c=document.createElement("link");
        c.setAttribute("rel","stylesheet"),
        c.setAttribute("type","text/css"),
        c.setAttribute("href",a)
      }
      "undefined"!=typeof c&&document.getElementsByTagName("head")[0].appendChild(c)
    }
    loadjscssfile('https://media.datahc.com/ratinghotel/stellar2/spa/styles.css?v' + rand, 'css');
    loadjscssfile('https://media.datahc.com/ratinghotel/stellar2/spa/script.js?v' + rand, 'js'); })();
  </script>

  <!-- Subscribe -->
  <div class="sidebar-subscribe">
    <h3>Get our latest posts <span>in your inbox</span></h3>
    <p>Subscribe by <strong>RSS</strong></p>
    <!-- Begin MailChimp Signup Form -->
    <div id="mc_embed_signup">
      <form action="//fincalunanuevalodge.us14.list-manage.com/subscribe/post?u=717aeb06c15bfaa330ff359b8&amp;id=c221daddf3" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <div id="mc_embed_signup_scroll">
          <div class="mc-field-group">
          	<!-- <label for="mce-EMAIL">Email Address </label> -->
          	<input type="email" value="" name="EMAIL" class="form-control required email" placeholder="Email address" id="mce-EMAIL">
          </div>
        	<div id="mce-responses" class="clear">
        		<div class="response" id="mce-error-response" style="display:none"></div>
        		<div class="response" id="mce-success-response" style="display:none"></div>
        	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
          <div style="position: absolute; left: -5000px;" aria-hidden="true">
            <input type="text" name="b_717aeb06c15bfaa330ff359b8_c221daddf3" tabindex="-1" value="">
          </div>
          <div class="clear">
            <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button btn btn-primary">
          </div>
        </div>
      </form>
    </div>
    <!--End mc_embed_signup-->
  </div>
</aside>
<!-- /sidebar -->
