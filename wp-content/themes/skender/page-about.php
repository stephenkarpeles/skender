<?php 
/* Template Name: About */ 
get_header(); ?>

  <section class="page-title">
    <div class="container">
      <h1>About</h1>
    </div>
  </section>

  <section class="hero hero--alt">
    <div class="hero__foreground">
      <div class="container">
        <h1>Our Approach</h1>
        <div class="subtitle">Lorem ipsum dolor sit amet, eum eu falli putant facilisi, usu fabulas platonem ea. Eu pri epicuri scribentur. In duo nonumes efficiantur. Quo ad malorum partiendo. Mea id maiorum habemus, vix quando bonorum corrumpit ex.</div>
      </div><!-- .container -->
    </div>
  </section><!-- .hero -->

  <section class="team clearfix">
    <div class="container">
      <h2 class="top-pad-6 bot-pad-3">Leadership team</h2>
    </div>

    <?php
      $args = array(
        'post_type' => 'team'
      );
      $query = new WP_Query( $args );
      if ( $query->have_posts() ) { $a=0;
        ?>
          <?php
          while ( $query->have_posts() ) { $a++;
          $query->the_post();
          ?>
          <div class="col col-1-4">
            <a href="#bioPopup-<?php echo $a; ?>" class="open-popup-link">
              <?php the_post_thumbnail();?> 

            </a>
            <div id="bioPopup-<?php echo $a; ?>" class="white-popup mfp-hide">
              <div class="bioPopup__image bot-mar-25"><?php the_post_thumbnail();?></div>
              <h2><?php the_title(); ?></h2>
              <div><?php the_content(); ?></div>
            </div>           
          </div>
          <?php
          }
          ?>
        </div>
        <?php
        } else {
        // no posts found
      }
    /* Restore original Post Data */
    wp_reset_postdata();
    ?>

  </section>

  <section class="recognition padded bot-pad-20">

    <div class="container">
      <div class="row">
        <div class="col col-full col-padded">
          <h2>Recognition</h2>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col col-padded col-1-3 recognition__col">
          <div class="recognition__number" id="recognitionNumber1">15</div>
          <div class="recognition__stat">Lorem ipsums</div>
        </div>

        <div class="col col-padded col-1-3 recognition__col">
          <div class="recognition__number" id="recognitionNumber2">30</div>
          <div class="recognition__stat">Dolor set amit</div>
        </div>

        <div class="col col-padded col-1-3 recognition__col">
          <div class="recognition__number" id="recognitionNumber3">22</div>
          <div class="recognition__stat">Calundi alun nel</div>
        </div>

      </div>
    </div>    
  </section>

<?php get_footer(); ?>