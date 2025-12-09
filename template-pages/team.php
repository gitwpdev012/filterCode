
<?php /*Template Name: team */?>

<?php echo "This is page.php file." ?>

<?php get_header(); ?>


  <main class="main">
    
  <br><br><br>
   <!-- Team Section -->
   <section id="team" class="team section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Our Team</h2>
  <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
</div><!-- End Section Title -->

<div class="container">

  <div class="row gy-4">

  <?php if ( have_rows('members_data',14) ){
   while ( have_rows('members_data',14) ){
         the_row();
     ?>
    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
      <div class="member">
        <img src="<?php echo(get_sub_field('member_image')['url']); ?>" class="img-fluid" alt="">
        <h4><?php echo get_sub_field('member_name')?></h4>
        <span><?php echo get_sub_field('member_role')?></span>
        <div class="social">
          <a href=""><?php echo get_sub_field('icon_1')?></a>
          <a href=""><?php echo get_sub_field('icon_2')?></a>
          <a href=""><?php echo get_sub_field('icon_3')?></a>
          <a href=""><?php echo get_sub_field('icon_4')?></a>
        </div>
      </div>
    </div><!-- End Team Member -->

 <?php  }} ?>
  </div>

</div>

</section><!-- /Team Section -->
    <br>
  </main>

  <?php get_footer(); ?>