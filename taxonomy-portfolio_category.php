<h1>This is custom taxonomy file</h1>

<?php get_header(); ?>

<br><br>
<?php print_r(get_queried_object()); ?>

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


<?php $query_data = array(
    'post_type'=>'portfolio',
    'post_status'=>'publish'
);

$data = new wp_query($query_data);
 while($data->have_posts())
 {
    $data->the_post();
    the_title();
    echo get_the_content();
    echo "       ";
 } ?>







    <!-- Blog Posts Section -->
    <section id="blog-posts" class="blog-posts section">

      <div class="container">
        <div class="row gy-4">

        
<?php }?>


  <?php get_footer(); ?>