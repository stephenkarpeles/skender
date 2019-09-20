<?php
/* Template Name: Contact */
get_header();
?>

<?php	while ( have_posts() ) : the_post(); ?>

  <section class="page-title">
    <div class="container">
      <h1>Contact</h1>
    </div>
  </section>

  <section class="contact-block">

    <?php
    $args = array(
      'post_type' => 'page',
      'post_parent' => get_the_id(),
      'orderby' => 'menu_order',
      'order' => 'ASC'
    );
    $locations = get_posts( $args );
    ?>

    <div class="container">
      <div class="row">
        <div class="col col-1-3 col-padded padded">
          <?php the_content(); ?>
        </div>

        <?php if ( !empty( $locations ) ) : ?>
          <?php foreach ( $locations as $location ) : ?>
            <?php $fields = get_fields( $location->ID ); ?>
            <div class="col col-1-3 col-padded padded">
              <h2><a href="<?= get_permalink( $location->ID ) ?>" class="pd-no-line-hover"><?= $location->post_title ?> Office</a></h2>
              <a href="<?= get_permalink( $location->ID ) ?>"><?= get_the_post_thumbnail( $location->ID ) ?></a>
              <div class="contact-block__city-content">
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
                  <p><a href="<?= $fields['projects_link'] ?>" class="link">View <?= $location->post_title ?> Projects</a></p>
                <?php endif; ?>
              </div>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>

      </div>

    </div>
  </section>

<?php endwhile; ?>

<?php get_footer(); ?>
