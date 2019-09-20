<?php 
/* Template Name: Homepage */ 
get_header(); ?>
    
  <section class="hero">
    <div class="hero__foreground">
      <div class="container">
        <h1>Transforming the construction experience</h1>
        <div class="subtitle">Lorem ipsum ac commodo nibh accumsan rhoncus augue tortor Cras adipiscing sollicitudin Nam vitae felis Morbi litora ac placerat sapien.</div>
        <a class="link">
          Watch Video
        </a>
      </div><!-- .container -->
    </div>
  </section><!-- .hero -->

  <section class="industry-slider">      
    <div class="container">
      <div class="industry-slider__nav">  
        <ul>
          <?php 
            $tax = 'project-category';
            $terms = get_terms( $tax, [
              'hide_empty' => true, // hide empty terms
            ]);
            foreach( $terms as $term ) {
              if( 0 == $term->count )
                echo '';
              elseif( $term->count > 0 )
                echo '<li><a href="'. get_term_link( $term ) .'">'. $term->name .'</a></li>';
            }
          ?>   
        </ul>   
      </div>
    </div><!-- .container -->
    <div class="industry-slider__slider">
      
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slider-strip.jpg" alt="Alt Tag">
    </div>      
  </section><!-- .industry-slider -->

  <section class="client-slider padded">
    <div class="container">
      <h2>We Work With</h2>
      <div class="subheading">Lorem ipsum ac commodo nibh accumsan rhoncus augue tortor Cras adipiscing sollicitudin</div>

      <div class="client-slider__logos">
        <ul class="no-list-style">
          <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/capital-one-logo.png" alt=""></li>
          <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/google-logo.png" alt=""></li>
          <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ucsf-logo.png" alt=""></li>
          <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/1871-logo.png" alt=""></li>
          <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/wilson-logo.png" alt=""></li>
          <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/motorola-logo.png" alt=""></li>
          <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/devry-logo.png" alt=""></li>
        </ul>
      </div>
    </div>
  </section><!-- .client-slider -->
  
  <section class="featured">
    <div class="featured__content-wrap">

      <div class="container-wrap">
        <div class="container">
          <h3>Featured</h3>
        </div>
      </div>

      <div class="featured__content-block">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/featured-bg.png" alt="">
        <div class="featured__more-block">
          Sandbox Industries
          <div class="featured__toggle">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/down-arrow-white.svg" alt="">
          </div>
          <div class="featured__reveal-content">
            <p><strong>Ut finibus, augue non</strong> blandit auctor, mi libero efficitur felis, et pulvinar ipsum lorem eu sapien. Duis lacinia sit amet quam in consequat.<p>
            <p>Curabitur ac molestie turpis. Donec luctus aliquam risus, eu vehicula tellus. Vivamus vitae molestie orci, sed sodales purus. Vestibulum sagittis nulla at congue fermentum. Pellentesque tristique feugiat tempus.</p>
          </div>
        </div>
      </div>

    </div> 
  </section><!-- .featured -->

  <section class="insights padded clearfix">
    <div class="container">
      <h2>Insights</h2>

      <div class="insights__post">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/golf-cart.jpg" alt="">
        <div class="insights__content-wrap">
          <div class="insights__title">
            101 Construction Cost Saving Ideas
          </div>
          <div class="insights__link link">
            Download the white paper
          </div>
        </div>
      </div>

    </div>
  </section><!-- .insights -->    

  <section class="hero hero--reversed clearfix">
    <div class="hero__foreground">
      <div class="container">
        <h1>Our new office reflects our culture.</h1>
        <div class="subtitle">Lorem ipsum ac commodo nibh accumsan rhoncus augue tortor Cras adipiscing sollicitudin Nam vitae felis Morbi litora ac placerat sapien.</div>
        <a class="link">
          Join Us Today
        </a>
      </div><!-- .container -->
    </div>
  </section><!-- .hero -->   

  <section class="life top-pad-12 clearfix">
    <div class="container clearfix">
      <div class="row">
        <div class="col col-padded col-1-2">
          <h2 class="text-red">Life At Skender</h2>
        </div><!-- .col -->
        <div class="col col-padded col-1-2">
          <ul class="social-list no-list-style">
            <li><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-twitter.svg" alt=""></a></li>
            <li><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-facebook.svg" alt=""></a></li>
            <li><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-youtube.svg" alt=""></a></li>
            <li><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-instagram.svg" alt=""></a></li>
            <li><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-linkedin.svg" alt=""></a></li>          
          </ul>
        </div><!-- .col -->
      </div><!-- .row -->
    </div>
    <div class="instagram-block top-mar-6">
      <div class="col col-1-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ig-1.jpg" alt=""></div>
      <div class="col col-1-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ig-2.jpg" alt=""></div>
      <div class="col col-1-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ig-3.jpg" alt=""></div>
      <div class="col col-1-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ig-4.png" alt=""></div>
    </div>
  </section><!-- .life --> 

  <section class="news bot-pad-5">
    <div class="container padded">
      <div class="row">
        <div class="col col-padded col-full">
          <h2 class="text-light bot-mar-8">News/Media</h2>
        </div><!-- .col -->
      </div><!-- .row -->
      <div class="row">
        <div class="col col-padded col-1-3">
          <div class="news__post">
            <div class="news__date">Oct 19 2018</div>
            <div class="news__title">Three Skender-built projects honored at AIA Chicago Design Excellence</div>
            <div class="news__link link">
              Read More
            </div>
          </div>
        </div><!-- .col -->

        <div class="col col-padded col-1-3">
          <div class="news__post">
            <div class="news__date">Oct 19 2018</div>
            <div class="news__title">Skender wins Top Safety Award</div>
            <div class="news__link link">
              Read More
            </div>
          </div>
        </div><!-- .col -->

        <div class="col col-padded col-1-3">
          <div class="news__post">
            <div class="news__date">Oct 19 2018</div>
            <div class="news__title">Skender Completes 21,000-SF Office Build-out for The Climate Corporation</div>
            <div class="news__link link">
              Read More
            </div>
          </div>
        </div><!-- .col -->
      </div><!-- .row -->
    </div>
  </section>
    
<?php get_footer(); ?>