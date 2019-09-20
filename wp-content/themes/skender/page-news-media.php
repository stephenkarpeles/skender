<?php 
/* Template Name: News & Media */ 
get_header(); ?>
    
  <section class="page-title">
    <div class="container">
      <h1>News &amp; Media</h1>
    </div>
  </section>

  <section class="news-menu">      
    <div class="container">
      <ul>
        <li><a href="">Blog Posts</a></li>
        <li><a href="">Articles</a></li>
        <li><a href="">Videos</a></li>
        <li><a href="">Social Media</a></li>
        <li><a href="">PR</a></li>
      </ul>
    </div><!-- .container -->
  </section><!-- .project-menu -->

  <section class="news-loop">

    <div class="container">

      <?php
      $args = array(
        'post_type' => 'news-media'
      );
      $query = new WP_Query( $args );
      if ( $query->have_posts() ) {
        ?>
          <?php
          while ( $query->have_posts() ) { 
          $query->the_post();
          ?>
          <div class="news-loop__item">
            <?php the_post_thumbnail();?>
            <div class="content">
              <div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
              <div class="excerpt"><?php the_excerpt();?></div>
              <a href="<?php the_permalink(); ?>" class="more-link link">Read More</a>
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

    </div><!-- .container -->

  </section>
    
<?php get_footer(); ?>