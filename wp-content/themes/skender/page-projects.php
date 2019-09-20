<?php 
/* Template Name: Projects */ 
get_header(); ?>

<section class="page-title">
    <div class="container">
      <h1>Projects</h1>
    </div>
  </section>

  <section class="project-menu">      
    <div class="container">
      <ul id="filters">
          <li><a href="#" data-filter="*" class="selected">View All</a></li>
           <?php 
             $terms = get_terms("project-category"); // get all categories, but you can use any taxonomy
             $count = count($terms); //How many are they?
             if ( $count > 0 ){  //If there are more than 0 terms
             foreach ( $terms as $term ) {  //for each term:
             echo "<li><a href='#' data-filter='.".$term->slug."'>" . $term->name . "</a></li>\n";
             //create a list item with the current term slug for sorting, and name for label
             }
           } 
          ?>
      </ul>
    </div><!-- .container -->
  </section><!-- .project-menu -->

  <section class="project-loop">

    <?php 
    $args = array(
        'post_type'        => 'project',
        'posts_per_page'   => -1
      );
    $the_query = new WP_Query( $args );  ?>
    <?php if ( $the_query->have_posts() ) : ?>
        <div id="isotope-list">
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
     $termsArray = get_the_terms( $post->ID, "project-category" );  
     $termsString = ""; 
     foreach ( $termsArray as $term ) { 
     $termsString .= $term->slug.' '; 
     }
     ?> 
     <div class="project-block <?php echo $termsString; ?> item">
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail();?> 
        </a>
        <a href="<?php the_permalink(); ?>" class="title">             
          <?php the_title(); ?>
        </a>   
        <div class="overlay">
          <div class="overlay__text">
            <?php
            echo wp_trim_words( get_the_content(), 40, '...' );
            ?>
          </div>
        </div>         
      </div>     
      <?php endwhile;  ?>
      </div> <!-- end isotope-list -->
    <?php endif; ?>
    
  </section>

<?php get_footer(); ?>