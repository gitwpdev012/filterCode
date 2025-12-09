<!-- <h1>This is contact.php file under templates-pages folder</h1> -->
<?php /*Template Name: contact */?>

<?php get_header(); ?>


  <main class="main">
   <br><br><br>

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">
            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              
                <!-- <i class="bi bi-geo-alt flex-shrink-0"></i> -->
                
               

<?php if ( have_rows('contact_us',20) ){
   while ( have_rows('contact_us',20) ){
         the_row();
      get_sub_field('heading_title'); ?>
                   <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                   <?php echo get_sub_field('icon')?>
                <div>
                  <h3><?php echo get_sub_field('heading_title')?></h3>
                  <p><?php echo get_sub_field('details') ?></p>
                  </div>
                  </div><!-- End Info Item -->

             <?php   } } ?>                
                
              
 
             

            </div>

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade" data-aos-delay="100">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="8" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <?php get_footer(); ?>
