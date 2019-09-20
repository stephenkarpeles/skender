<?php
/* Template Name: Location */
get_header(); ?>

<?php	while ( have_posts() ) : the_post(); ?>
  <?php $fields = get_fields(); ?>

  <section class="page-title">
    <div class="container">
      <h1><?php the_title(); ?></h1>
    </div>
  </section>

  <div class="col col-2-3 location-col">

    <section class="location-info">
      <?php the_post_thumbnail(); ?>
      <div class="location-info__content">
        <?php the_content(); ?>
      </div>

      <?php
      /* TODO: Add query for projects from specific location */
      $args = array(
        'post_type' => 'project',
        'posts_per_page' => 3
      );
      $location_projects = get_posts( $args );
      ?>

      <?php if ( !empty( $location_projects ) ) : ?>
        <?php foreach ( $location_projects as $project ) : ?>
          <div class="col col-1-3 location-info__alt-related">
            <a href="<?= get_permalink( $project->ID ) ?>"><?= get_the_post_thumbnail( $project->ID, 'medium', array( 'class' => 'location-info__alt-img' ) ) ?></a>
            <a href="<?= get_permalink( $project->ID ) ?>" class="title"><?= $project->post_title ?></a>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>

    </section>

  </div><!-- .col -->

  <div id="map-col" class="col col-1-3 location-col">
    <section class="map">
      <?php if ( !empty( $fields['address']['lat'] ) ) : ?>
        <div id="map"></div>
        <script>
        function initMap() {
        var office = { lat: <?= $fields['address']['lat'] ?>, lng: <?= $fields['address']['lng'] ?> };
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          zoomControl: false,
          scaleControl: false,
          streetViewControl: false,
          fullscreenControl: false,
          mapTypeControl: false,
          center: office,
          styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
        });
        var marker = new google.maps.Marker({
          position: office,
          map: map
        });
        var currCenter = map.getCenter();
        jQuery( document ).ready( function( $ ) {
          $( window ).on( 'load resize', function() {
            var colWidth = $( '#map-col' ).width();
            $( '#map' ).css( 'height', colWidth + 'px' );
              google.maps.event.trigger( map, 'resize' );
              map.setCenter( currCenter );
          });
        });
        }
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?callback=initMap"></script>
      <?php endif; ?>
    </section>

    <section class="location-contact">

      <?php if ( !empty( $fields['address'] ) ) : ?>
        <?php $address = explode( ',', $fields['address']['address'] ); ?>
        <div><strong>Address</strong></div>
        <?php if ( count( $address ) == 5 ) : ?>
        <p>
          <?= $address[0] ?><br>
          <?= $address[1] ?><br>
          <?= $address[2] . ', ' . $address[3] . ' ' . $address[4] ?>
        </p>
        <?php else : ?>
          <p>
            <?= $address[0] ?><br>
            <?= $address[1] . ', ' . $address[2] . ' ' . $address[3] ?>
          </p>
        <?php endif; ?>
      <?php endif; ?>

      <?php if ( !empty( $fields['phone'] ) ) : ?>
        <div><strong>Phone</strong></div>
        <p><?= $fields['phone'] ?></p>
      <?php endif; ?>

      <?php if ( !empty( $fields['email'] ) ) : ?>
        <div><strong>Email</strong></div>
        <p><a href="mailto:<?= antispambot( $fields['email'] ) ?>"><?= antispambot( $fields['email'] ) ?></a></p>
      <?php endif; ?>

      <?php if ( !empty( $fields['projects_link'] ) ) : ?>
        <p><a href="<?= $fields['projects_link'] ?>" class="link">View <?php the_title(); ?> Projects</a></p>
      <?php endif; ?>

    </section>
  </div>

<?php endwhile; ?>

<?php get_footer(); ?>
