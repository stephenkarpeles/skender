<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package skender
 */

?>

    </div><!-- #content -->

    <footer>
      
      <div class="container padded">

        <div class="row">

          <div class="col col-padded col-1-3">
            <div class="row">
              <div class="col col-padded col-1-2 col-location">
                <div class="footer__city">Chicago</div>
                <div class="footer__phone">312 781 0265</div>
              </div>
              <div class="col col-padded col-1-2 col-location">
                <div class="footer__city">San Francisco</div>
                <div class="footer__phone">415 862 8500</div>
              </div>
            </div>
          </div>

          <div class="col col-padded col-1-3">
            <div class="subscribe">
              Subscribe for updates
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/right-arrow.svg" alt="">
            </div>
          </div>

          <div class="col col-padded col-1-3">
            <ul class="social-list no-list-style">
              <li><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-twitter.svg" alt=""></a></li>
              <li><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-facebook.svg" alt=""></a></li>
              <li><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-youtube.svg" alt=""></a></li>
              <li><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-instagram.svg" alt=""></a></li>
              <li><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-linkedin.svg" alt=""></a></li>          
            </ul>
            <div class="copyright">
              &copy; Skender Construction. All rights reserved.
            </div>
          </div>
        </div><!-- .row -->

      </div><!-- .container -->
      
      <section class="footer-base">
        <div class="col col-1-2 col-chicago">
          <h3>Chicago</h3>
        </div>
        <div class="col col-1-2 col-sf">
          <h3>San Francisco</h3>
        </div>
      </section>

    </footer>
    </div><!-- #page -->

    <?php wp_footer(); ?>

    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/slick/slick.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/matchheight.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/lettering.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/countUp.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
        window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
        ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async defer></script>
  </body>
</html>
