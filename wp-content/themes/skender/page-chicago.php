<?php 
/* Template Name: Chicago */ 
get_header(); ?>
    
  <section class="page-title">
    <div class="container">
      <h1>Chicago</h1>
    </div>
  </section>

  <div class="col col-2-3 location-col">

    <section class="location-info">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer-chicago.jpg" alt="Chicago">
      <div class="location-info__content">
        <h2>Grassroots Original</h2>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>

        <h3>Alternate Headline</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
        
        <h3>More Content Here</h3>
        <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
      </div>

      <div class="col col-1-3">
        <img class="location-info__alt-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/project-8.jpg" alt="">
      </div>
      <div class="col col-1-3">
        <img class="location-info__alt-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/project-7.jpg" alt="">
      </div>
      <div class="col col-1-3">
        <img class="location-info__alt-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/project-6.jpg" alt="">
      </div>
      
    </section>

  </div><!-- .col -->

  <div class="col col-1-3 location-col">
    <section class="map">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/chicago-map.png" alt="">
    </section>

    <section class="location-contact">
      <div><strong>Address</strong></div>
      <p>123 Jones Street<br>
      Chicago, IL 60603</p>

      <div><strong>Phone</strong></div>
      <p>312 781 0265</p>

      <div><strong>Email</strong></div>
      <p>info[at]skenderchicago.com</p>

      <p><a href="" class="link">View Chicago Projects</a></p>
      
    </section>
  </div>

    
<?php get_footer(); ?>