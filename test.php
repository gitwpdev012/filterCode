
<?php
/*Template Name: test   */

?>
<style>
   /* test page  */

.posts_types_wrpr {
    display: flex;
    gap: 30px;
    padding: 20px;
}

.posts_types_wrpr .blog-posts {
    width: 25%;
    min-height: 350px;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>


<h1>Developing Filter:</h1>
<?php 

// $var = 9;
// $times =10;

// $multiplier = 1;

// while($times)
// {

//      echo $var." x ".$multiplier." = ".$var*$multiplier;
//      echo"<br>";

//     $multiplier++;
//    $times--;

    
// }
?>

<select name="post_type_filter" id="post_type_filter">
   <option value="all">Select Post Types</option>
    <?php
        $allPosts = array (
            'public' => true,
            '_builtin' => false
        );
        $output = 'names'; // Return an array of post type names (slugs)
        $operator = 'and'; // Use 'and' to combine the arguments
        $post_types = get_post_types( $allPosts, $output, $operator );
        foreach ( $post_types as $post_type_slug) {
            $post_type_obj = get_post_type_object( $post_type_slug );
            if ( $post_type_obj) {
            $post_type_label = $post_type_obj->labels->singular_name;
            echo '<option value="' . $post_type_slug . '">' . $post_type_label . '</option>';
            };
        };
    ?>
</select>

<select name="post_category_filter" id="post_category_filter">
   <option value="">Select a Category</option>
   <?php
      $cpt_cat = get_post_types ( array( 'public' => true ), 'names' );
      foreach ( $cpt_cat as $post_type_cat ) {
          $taxonomy_names = get_object_taxonomies( $post_type_cat, 'names' );
          foreach ( $taxonomy_names as $taxonomy ) {
              $taxonomy_obj = get_taxonomy( $taxonomy );
              if ( $taxonomy_obj->hierarchical ) {
                  $cpt_cat_terms = get_terms( array(
                      'taxonomy' => $taxonomy,
                      'hide_empty' => true,
                  ) );
              }
               foreach ( $cpt_cat_terms as $term ) {
                        echo '<option value="' . esc_attr( $term->slug ) . '">' . esc_html( $term->name ) . '</option>';
                    }
          }
      }  
   ?>
</select>   

<select name="post_sort_filter" id="post_sort_filter">
    <option value="DESC">Newest First</option>
    <option value="ASC">Oldest First</option>
</select>

<div class="select_dates">
    <label for="start_date">Start Date:</label>
    <input type="date" id="start_date" name="start_date">
    
    <label for="end_date">End Date:</label>
    <input type="date" id="end_date" name="end_date">
</div>
<div class="posts_types_wrpr">
   <?php
      $arg = array(
      'post_type' => 'post',
      'posts_per_page' => 5
      );
      $the_query = new WP_Query( $arg );
      if( $the_query->have_posts() ):
      while( $the_query->have_posts() ): $the_query->the_post();
      $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );

   ?>
   <a class="blog-posts" href="<?php the_permalink(); ?>" style = "background-image: url('<?php echo $large_image_url[0]; ?>');">
      <div  class="post_types_cntnt">
         <h2><?php the_title(); ?></h2>    
      </div>
   </a>
   <?php
      endwhile;
      wp_reset_postdata();
   endif;
   ?>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
jQuery(document).ready(function($){

    $('#post_type_filter').on('change', function(){

        let selectedPostType = $(this).val();
        let selectedSort = $('#post_sort_filter').val();
        $.ajax({
            url: "<?php echo admin_url('admin-ajax.php'); ?>",
            type: "POST",
            data: {
                action: "filter_posts_by_post_type",
                post_type: selectedPostType,
                sort: selectedSort
            },
            beforeSend: function(){
                $('.posts_types_wrpr').html("<p>Loading...</p>");
            },
            success: function(response) {
                $('.posts_types_wrpr').html(response);
            }
        });

        // -----------------------------
        // 2. LOAD CATEGORIES BY CPT
        // -----------------------------
        $.ajax({
            url: "<?php echo admin_url('admin-ajax.php'); ?>",
            type: "POST",
            data: {
                action: "get_categories_by_post_type",
                post_type: selectedPostType
            },
            success: function(response){
                $('#post_category_filter').html(response);
            }
        });



          $('#post_category_filter, #post_sort_filter').on('change', function(){
     
        let selectedCategory = $('#post_category_filter').val();
        let selectedPostType = $('#post_type_filter').val();
        let selectedSort = $('#post_sort_filter').val();
     
        $.ajax ({
            url : "<?php echo admin_url('admin-ajax.php'); ?>",
            type:"POST",
            data: {
                action: "get_categories_posts",
                post_type: selectedPostType,
                category: selectedCategory,
                sort: selectedSort
            },
            beforeSend: function(){
                $('.posts_types_wrpr').html("<p>Loading...</p>");
            },
            success: function(response){
                 $('.posts_types_wrpr').html(response);
            }
        });
     
    });

    // start and end date ajax call 
     $('#start_date, #end_date').on('change', function(){
     
        let selectedPostType = $('#post_type_filter').val();
        let selectedCategory = $('#post_category_filter').val();
        let selectedSort = $('#post_sort_filter').val();
        let startDate = $('#start_date').val();
        let endDate = $('#end_date').val();
     
        $.ajax ({
            url : "<?php echo admin_url('admin-ajax.php'); ?>",
            type:"POST",
            data: {
                action: "get_categories_posts",
                post_type: selectedPostType,
                category: selectedCategory,
                sort: selectedSort,
                start_date: startDate,
                end_date: endDate
            },
            beforeSend: function(){
                $('.posts_types_wrpr').html("<p>Loading...</p>");
            },
            success: function(response){
                 $('.posts_types_wrpr').html(response);
            }
        });
     
    });


    });
    
  




});
</script>