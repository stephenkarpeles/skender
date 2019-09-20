<?php 
/* Template Name: Contact */ 
get_header(); ?>
    
  <section class="page-title">
    <div class="container">
      <h1>Contact</h1>
    </div>
  </section>

  <section class="contact-block">

    <div class="container">
      <div class="row">
        <div class="col col-1-3 col-padded padded">
          <h2>Get In Touch</h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          <form action="">
            <input type="text" placeholder="Your Name"><br>
            <input type="text" placeholder="Your Email"><br>
            <input type="text" placeholder="Your Phone"><br>
            <textarea name="" placeholder="Your Message" id="" cols="30" rows="10"></textarea><br>
            <input type="submit" value="Submit">
          </form>
        </div>

        <div class="col col-1-3 col-padded padded">
          <h2>Chicago Office</h2>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer-chicago.jpg" alt="">
          <div class="contact-block__city-content">
            <div><strong>Address</strong></div>
            <p>123 Jones Street<br>
            Chicago, IL 60603</p>

            <div><strong>Phone</strong></div>
            <p>312 781 0265</p>

            <div><strong>Email</strong></div>
            <p>info[at]skenderchicago.com</p>

            <p><a href="" class="link">View Chicago Projects</a></p>
          </div>
        </div>

        <div class="col col-1-3 col-padded padded">
          <h2>San Francisco Office</h2>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer-sf.jpg" alt="">
          <div class="contact-block__city-content">
            <div><strong>Address</strong></div>
            <p>321 Sarah Street<br>
            Chicago, IL 60603</p>

            <div><strong>Phone</strong></div>
            <p>415 862 8500</p>

            <div><strong>Email</strong></div>
            <p>info[at]skendersf.com</p>

            <p><a href="" class="link">View SF Projects</a></p>
          </div>
        </div> 

      </div>

    </div>
  </section>   

<?php get_footer(); ?>