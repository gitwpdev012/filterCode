<h1>This is category.php file</h1>
<?php get_header(); ?>

<main class="main">

<br><br>
    <?php
$subcategories = get_categories(array(
    'child_of' => get_queried_object_id(),
));

if ( $subcategories ) {
    echo '<ul class="subcategories">';
    foreach ( $subcategories as $subcategory ) {
        echo '<li><a href="' . get_category_link($subcategory->term_id) . '">' . $subcategory->name . '</a></li>';
        // $image_path = wp_get_attachment_image_src(get_post_thumbnail_id(),'medium');
    }
    echo '</ul>';
} else{
?>

    <!-- Page Title -->
    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Blog</h1>
              <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Blog</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Blog Posts Section -->
    <section id="blog-posts" class="blog-posts section">

      <div class="container">
        <div class="row gy-4">

        <?php
        if(have_posts()){
while(have_posts()){
     the_post();
     $image_path = wp_get_attachment_image_src(get_post_thumbnail_id(),'medium');

    ?>
          <div class="col-lg-4">
            <article>

              <div class="post-img">
              <a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url( $image_path[0] ); ?>" alt="" class="img-fluid"></a>
              </div>

              <p class="post-category"><?php the_title(); ?></p>

              <h2 class="title">
                <a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author"><?php the_author(); ?></p>
                  <p class="post-date">
                    <time datetime="2022-01-01"><?php the_date(); ?></time>
                  </p>
                </div>
              </div>

            </article>
          </div>
          <?php }?><!-- End post list item -->
         
      

        </div>
      </div>

    </section><!-- /Blog Posts Section -->

    <!-- Blog Pagination Section -->
    <section id="blog-pagination" class="blog-pagination section">

      <div class="container">
        <div class="d-flex justify-content-center">
         
        <?php wp_pagenavi(); ?>
        
        </div>
      </div>

    </section><!-- /Blog Pagination Section -->

  </main>
<?php }else{echo "There are no any blogs in this category at this moment";}}?>


  <?php get_footer(); ?>