<?php
/* Template Name: Homepage */
get_header(); ?>
<?php $fields = get_fields(); ?>

  <section class="video-container">
    <iframe class="video" frameborder="0" height="" width="" 
      src="https://youtube.com/embed/Czu8hb3lqBs?autoplay=1&controls=0&loop=1&showinfo=0&autohide=1&playlist=Czu8hb3lqBs">
    </iframe>

    <div class="hero">
      <div class="hero__foreground">
        <div class="container">
          <h1><?= $fields['banner_headline'] ?></h1>
          <div class="subtitle"><?= $fields['banner_subhead'] ?></div>
          <a class="link" href="<?= $fields['banner_cta_link'] ?>">
            <?= $fields['banner_cta_text'] ?>
          </a>
        </div><!-- .container -->
      </div>
    </div><!-- .hero -->
  </section>  

  <section class="industry-slider">
    <div class="container">
      <div class="industry-slider__nav">
        <ul>
          <li><a href="">Residential</a></li>
          <li><a href="">Interiors</a></li>
          <li><a href="">Retail</a></li>
          <li><a href="">Healthcare</a></li>
          <li><a href="">Office</a></li>
          <li><a href="">Hospitality</a></li>
          <li><a href="">Higher-Education</a></li>
          <li><a href="">Affordable</a></li>
          <li><a href="">Senior</a></li>
          <li><a class="link" href="">View All</a></li>
        </ul>
      </div>
    </div><!-- .container -->
    <div class="industry-slider__slider">
      <?php
      $args = array(
        'post_type'        => 'project',
        'posts_per_page'   => 9
      );
      $query = new WP_Query( $args );
      if ( $query->have_posts() ) {
        ?>
          <?php
          while ( $query->have_posts() ) { 
          $query->the_post();
          ?>
          <div class="industry-slider__slide">
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail();?> 
            </a>
            <a href="<?php the_permalink(); ?>" class="title">             
              <?php the_title(); ?>
            </a>            
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
    </div>
  </section><!-- .industry-slider -->

  <?php if ( !empty( $fields['client_logos'] ) ) : ?>
    <section class="client-slider padded">
      <div class="container">
        <h2>We Work With</h2>
        <div class="subheading"><?= $fields['client_logo_intro'] ?>!</div>

        <div class="client-slider__logos">
          <ul id="client-logo-slider" class="no-list-style">
            <?php foreach ( $fields['client_logos'] as $logo ) : ?>
              <li>
                <img src="<?= $logo['logo']['sizes']['thumbnail'] ?>" alt="<?= $logo['logo']['alt'] ?>" class="pd-grayscale">
                <img src="<?= $logo['logo_hover']['sizes']['thumbnail'] ?>" alt="<?= $logo['logo_hover']['alt'] ?>" class="pd-color">
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </section><!-- .client-slider -->
    <script>
    jQuery( document ).ready( function( $ ) {
      $( '#client-logo-slider' ).slick({
        arrows: false,
        autoplay: true,
        slidesToShow: 5,
        slidesToScroll: 5,
        responsive: [
          {
            breakpoint: 991,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 4
            },
            breakpoint: 767,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          }
        ]
      });
    });
    </script>
  <?php endif; ?>

  <?php if ( !empty( $fields['featured_project'] ) ) : ?>
    <section class="featured">
      <div class="featured__content-wrap">

        <div class="container-wrap">
          <div class="container">
            <h3>Featured</h3>
          </div>
        </div>

        <div class="featured__content-block">
          <?= get_the_post_thumbnail( $fields['featured_project']->ID ) ?>
          <div class="featured__more-block">
            <?= $fields['featured_project']->post_title ?>
            <div class="featured__toggle">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/down-arrow-white.svg" alt="">
            </div>
            <div class="featured__reveal-content">
              <p><?= wp_trim_words( $fields['featured_project']->post_content, 55 ) ?></p>
              <p><a href="<?= get_permalink( $fields['featured_project']->ID ) ?>" class="link">Learn More</a></p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- .featured -->
  <?php endif; ?>

  <?php if ( !empty( $fields['featured_insight'] ) ) : ?>
    <?php $insight_fields = get_fields( $fields['featured_insight']->ID ) ?>
    <section class="insights padded clearfix">
      <div class="container">
        <h2>Insights</h2>

        <div class="insights__post">
          <?= get_the_post_thumbnail( $fields['featured_insight']->ID ) ?>
          <div class="insights__content-wrap">
            <div class="insights__title">
              <?= $fields['featured_insight']->post_title ?>
            </div>
            <?php if ( !empty( $insight_fields['file_download'] ) && !empty( $insight_fields['download_label'] ) ) : ?>
              <a class="insights__link link" href="<?= $insight_fields['file_download']['url'] ?>" target="_blank"><?= $insight_fields['download_label'] ?></a>
            <?php endif; ?>
          </div>
        </div>

      </div>
    </section><!-- .insights -->
  <?php endif; ?>

  <section class="hero hero--reversed clearfix">
    <div class="hero__foreground">
      <div class="container">
        <h1><?= $fields['culture_headline'] ?></h1>
        <div class="subtitle"><?= $fields['culture_subhead'] ?></div>
        <a class="link" href="<?= $fields['culture_cta_link'] ?>">
          <?= $fields['culture_cta_text'] ?>
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
            <?php if ( !empty( $fields['social_media'] ) ) : ?>
              <?php foreach ( $fields['social_media'] as $site ) : ?>
                <li><a href="<?= $site['link'] ?>" target="_blank"><img src="<?= $site['image']['url'] ?>" alt="<?= $site['image']['url'] ?>"></a></li>
              <?php endforeach; ?>
            <?php endif; ?>
          </ul>
        </div><!-- .col -->
      </div><!-- .row -->
    </div>
    <div class="instagram-block top-mar-6">

      <?php $ig = json_decode( file_get_contents( 'https://api.instagram.com/v1/users/4562864132/media/recent/?access_token=4562864132.70aaf88.899690e0fdf74884b599a78c55be4cdd' ) ); ?>
      <?php if ( !empty( $ig->data[0] ) ) : ?>
        <?php for ( $i = 0; $i < 4; $i++ ) : ?>
          <div class="col col-1-4"><a href="<?= $ig->data[ $i ]->link ?>" target="_blank"><img src="<?= $ig->data[ $i ]->images->standard_resolution->url ?>" alt="<?= $ig->data[ $i ]->caption->text ?>"></a></div>
        <?php endfor; ?>
      <?php endif; ?>
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
        <?php
        $args = array(
          'post_type' => 'news-media',
          'posts_per_page' => 3
        );
        $news_items = get_posts( $args );
        if ( !empty( $news_items ) ) :
          foreach ( $news_items as $news_item ) :
          ?>
            <div class="col col-padded col-1-3">
              <div class="news__post">
                <div class="news__date"><?= get_the_date( '', $news_item->ID ) ?></div>
                <div class="news__title"><?= $news_item->post_title ?></div>
                <a class="news__link link" href="<?= get_permalink( $news_item->ID ) ?>">
                  Read More
                </a>
              </div>
            </div><!-- .col -->
          <?php
          endforeach;
        endif;
        ?>

      </div><!-- .row -->
    </div>
  </section>

<?php get_footer(); ?>
