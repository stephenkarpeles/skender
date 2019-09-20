<?php
/*
Plugin Name: Pivot Skender Addons
*/

/**
 * Loads single Project template.
 *
 * @param string $template Unfiltered path to template file
 * @return string Filtered path to template file
 */
function pd_load_project_template( $template ) {
  global $post;
  if ($post->post_type == 'project' ){
    $plugin_path = plugin_dir_path( __FILE__ );
    $template_name = 'single-project.php';
    if ( $template === get_stylesheet_directory() . '/' . $template_name || !file_exists( $plugin_path . $template_name ) ) {
      return $template;
    }
    return $plugin_path . $template_name;
  }
  return $template;
}
add_filter('single_template', 'pd_load_project_template');

/**
 * Loads custom page templates.
 *
 * @param string $page_template Unfiltered path to template file
 * @return string Filtered path to template file
 */
function pd_load_page_templates( $page_template ) {
  global $post;
  if ( is_page( 'contact' ) ) {
    $page_template = dirname( __FILE__ ) . '/page-contact.php';
  } else if ( $post->post_parent == 37 ) {
    $page_template = dirname( __FILE__ ) . '/page-location.php';
  } else if ( is_page( 'home' ) ) {
    $page_template = dirname( __FILE__ ) . '/page-homepage.php';
  }
  return $page_template;
}
add_filter( 'page_template', 'pd_load_page_templates' );

function pd_addon_styles() {
  ?>
  <style type="text/css">
  /* Utility */
  .pd-clearfix {
    clear: both;
  }

  #client-logo-slider li img.pd-color {
    display: none;
  }

  #client-logo-slider li img.pd-grayscale,
  #client-logo-slider li:hover img.pd-color {
    display: block;
  }

  #client-logo-slider li:hover img.pd-grayscale {
    display: none;
  }

  /* Single Project */
  .single-project-details__description ul {
    list-style: none;
  }

  .single-project-details__description ul li {
    border-bottom: 1px solid #ddd;
    padding: 1em 0;
  }

  .single-project-details__description ul li:first-child {
    padding-top: 0;
  }

  .single-project-details__description ul li:last-child {
    border: none;
  }

  .single-project-details__testimonial {
    line-height: 1.75;
    margin: 0;
    padding: 0.5em 0 0 1em;
    quotes: "“" "”" "‘" "’";
  }

  .single-project-details__testimonial:before {
    content: open-quote;
    font-family: sans-serif;
    font-size: 10em;
    line-height: 1em;
    margin: -0.2em 0 0 -0.1em;
    opacity: 0.2;
    position: absolute;
  }

  .single-project-more-block,
  .location-info__alt-related {
    position: relative;
  }

  .single-project-more-block .title,
  .location-info__alt-related .title {
    position: absolute;
    bottom: 15px;
    left: 15px;
    color: white;
    border-bottom: 2px solid #ed1b2e;
    text-transform: uppercase;
  }

  /* Contact */
  .hidden_label label {
    position: absolute !important;
    top: -9999px !important;
    left: -9999px !important;
  }

  input[type="text"],
  input[type="email"],
  input[type="url"],
  input[type="password"],
  input[type="search"],
  input[type="number"],
  input[type="tel"],
  input[type="range"],
  input[type="date"],
  input[type="month"],
  input[type="week"],
  input[type="time"],
  input[type="datetime"],
  input[type="datetime-local"],
  input[type="color"],
  input[type="submit"],
  textarea {
    border-radius: 0;
  }

  input[type="submit"] {
    font-size: 110%;
  }

  textarea {
    border-radius: 0;
    resize: none;
  }

  .validation_error,
  .validation_message {
    color: #ed1b2e;
  }

  .validation_error {
    margin-bottom: 1em;
  }

  .validation_message {
    margin-bottom: 1.5em;
  }

  .ginput_container_phone + .validation_message {
    margin-top: -1.5em;
  }

  .contact-block a,
  .location-contact a {
    color: inherit;
  }

  .contact-block a:not(.link):hover,
  .location-contact a:not(.link):hover {
    text-decoration: underline;
  }

  a.pd-no-line-hover:hover {
    text-decoration: none !important;
  }
  </style>
  <?php
}
add_action( 'wp_head', 'pd_addon_styles' );

/** Enables hiding of field labels in Gravity Forms. */
add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );
?>
