<?php


register_nav_menus(
    array('primary-menu'=>'Top Menu')
);

register_nav_menus(array('footer-menu'=>'Bottom Menu')); 

add_theme_support('post-thumbnails');  //it adds featured image option in admin panel of posts
add_theme_support('custom-background'); //it adds background image option in appearance tab of admin panel
add_post_type_support('page','excerpt'); //it adds excerpt option in edit page of admin panel
add_theme_support('custom-header'); //gives the option of dynamic logo
                                 //to call it    get_header_image();
// add_theme_support('custom-header');

register_sidebar(array('name'=>'Sidebar Location',
                         'id'=>'sidebar'));         //it enables the widget option in admin panel of wordpress




























                         
// 1. Create the custom widget class
class Simple_Message_Widget extends WP_Widget {

    // Constructor
    function __construct() {
      parent::__construct(
        'simple_message_widget', // Widget ID
        __('Simple Message', 'textdomain'), // Widget Name
        array('description' => __('A custom widget that shows a simple message.', 'textdomain'))
      );
    }                                                                                   
  
    // 2. Frontend display of the widget
    public function widget( $args, $instance ) {
      echo $args['before_widget'];
  
      // Display the title if it's set
      if ( ! empty( $instance['title'] ) ) {
        echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
      }
  
      // Display the message
      echo '<p>This is my custom widget message!</p>';
  
      echo $args['after_widget'];
    }
  
    // 3. Widget admin form
    public function form( $instance ) {
    //   $title = ! empty( $instance['title'] ) ? $instance['title'] : 'My Widget Title';
      if($title = ! empty( $instance['title'] ))
      {
        $title = $instance['title'];
      }
      else{
        $title = 'My Widget Title';
      }
      ?>
      <p>
        <label for="<?php echo esc_attr( $this->get_field_id('title') ); ?>">Title:</label>
        <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('title') ); ?>" 
               name="<?php echo esc_attr( $this->get_field_name('title') ); ?>" 
               type="text" value="<?php echo esc_attr( $title ); ?>">
      </p>                                           
      <?php
    }
  
    // 4. Save widget settings
    public function update( $new_instance, $old_instance ) {
      $instance = array();
      $instance['title'] = strip_tags( $new_instance['title'] );
      return $instance;
    }
  }
  
  // 5. Register the widget

    register_widget( 'Simple_Message_Widget' );

   
//    The 5-line code below makes a posts like option second one just like news
    register_post_type('portfolio', array(
        'label' => 'Portfolio',
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'show_in_rest' => true,   // this line adds gutenberg block to custom postb
        'archive' => true,
        'rewrite' => array('slug' => 'portfolio'),
        'taxonomies' => array('categoryy'), 
        
      ));
  
      register_taxonomy('project_type', 'portfolio', array(
        'label' => 'Project Type',       
        'hierarchical' => true, //it adds parent option in the admin pabel of above option
         'show_in_rest' => true,
      ));
      register_taxonomy('portfolio_category', 'portfolio', array(
        'label' => 'Categoriess',        
        'hierarchical' => true, //it adds parent option in the admin pabel of above option
         'show_in_rest' => true,
      ));


      register_post_type('mobile',array(
           'label'=>'Mobile',
           'public'=>true,
           'supports'=>array('title','thumbnail','editor')
      ));
      register_taxonomy('Mobile_category','mobile',array(
            'label'=>'Categories',
            'hierarchical'=>true
      ));


  // The Below commented 9 lines of code are just for practice
      // register_post_type('newss',array(
      //   'label'=>'Newss',
      //   'public'=>true,
      //   'suports'=>array('title','thumbnail','editor'),
      // ));
      // register_taxonomy('news_category','newss',array(
      //   'label'=>'Categories',
      //   'hierarchical'=>true,
      // ));
  


// Below is an example of action hook(it is called on a specific time)
// add_action('wp_footer', 'my_footer_message');
// function my_footer_message() {
//   echo '<p>This is a custom footer message.</p>';
// }

//Below is the example of filter hook(it changes the title befor showing it)
// add_filter('the_title', 'change_post_title');
// function change_post_title($title) {
//   return '👉 ' . $title;
// }


// Register a custom shortcode [greeting]
function my_custom_greeting_shortcode() {
    return '<p>Hello, welcome to my website! 🎉</p>';
}
add_shortcode('greeting', 'my_custom_greeting_shortcode');

//Another shortcode
function my_shortcode_test() {
    return 2;
}
add_shortcode('g', 'my_shortcode_test');


//custom function
function get_year()
{
    echo date('Y');
    return 1;
    // or you can return whatever you want to
}

 register_post_type('mobile_charger',array(
                  'label'=>'Mobile Charger',
                  'public'=>true,
                  'supports'=>array('title','thumbnail','editor')
 ));
 register_taxonomy('mobile_charger_category','mobile_charger',array(
       'label'=>'Categories',
       'hierarchical'=>true
 ));



 register_sidebar(array('name'=>'Sidebar 2', 'id'=>'sidebar_2'));
  
// function load_theme_files() {
//   wp_enqueue_style( 'main-style',  get_template_directory_uri() . '/assets/css/main.css',array(),null );
 
//   wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array(), null, true );
  
//   wp_enqueue_script('bootstrap.bundle.min.js', get_template_directory_uri().'/assets/vendor/bootstrap/js/bootstrap. bundle.min.js',array(),null,true);
  
//   wp_enqueue_script('validate.js',get_template_directory_uri().'/assets/vendor/php-email-form/validate.js',array(),null,true);

//   wp_enqueue_script('aos.js',get_template_directory_uri().'/assets/vendor/aos/aos.js',array(),null,true);

//   wp_enqueue_script('glightbox.min.js',get_template_directory_uri().'/assets/vendor/glightbox/js/glightbox.min.js',array(),null,true);

//   wp_enqueue_script('swiper-bundle.min.js',get_template_directory_uri().'/assets/vendor/swiper/swiper-bundle.min.js',array(),null,true);

//   wp_enqueue_script('purecounter_vanilla.js',get_template_directory_uri().'/assets/vendor/purecounter/purecounter_vanilla.js',array(),null,true);
 
//   wp_enqueue_script('imagesloaded.pkgd.min.js',get_template_directory_uri().'/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js',array(),null,true);

 
//   wp_enqueue_script('isotope.pkgd.min.js',get_template_directory_uri().'/assets/vendor/isotope-layout/isotope.pkgd.min.js',array(),null,true);

// }
// add_action( 'wp_enqueue_scripts', 'load_theme_files' );



//the function below converts all the style files to wp-enqueue (previously available in header.php)
function load_theme_styles() {

  // Google Fonts
  wp_enqueue_style(
      'google-fonts',
      'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap',
      array(),
      null
  );

  // Vendor CSS
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css');
  wp_enqueue_style('bootstrap-icons', get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css');
  wp_enqueue_style('aos', get_template_directory_uri() . '/assets/vendor/aos/aos.css');
  wp_enqueue_style('glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css');
  wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css');

  // Main CSS
  wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css');
}
add_action('wp_enqueue_scripts', 'load_theme_styles');



//the function below converts all the java-script files to wp-enqueue (previously available in footer.php)
function load_theme_scripts() {
  // Vendor JS files
  wp_enqueue_script('bootstrap-bundle', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), null, true);
  wp_enqueue_script('validate', get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js', array(), null, true);
  wp_enqueue_script('aos', get_template_directory_uri() . '/assets/vendor/aos/aos.js', array(), null, true);
  wp_enqueue_script('glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/js/glightbox.min.js', array(), null, true);
  wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.js', array(), null, true);
  wp_enqueue_script('purecounter', get_template_directory_uri() . '/assets/vendor/purecounter/purecounter_vanilla.js', array(), null, true);
  wp_enqueue_script('imagesloaded', get_template_directory_uri() . '/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js', array(), null, true);
  wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js', array(), null, true);

  // Main JS file
  wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'load_theme_scripts');



  
 
add_action('template_redirect', 'my_contact_page_hook');
function my_contact_page_hook() {
    if (is_page('contact')) {
        /**
         * Trigger your custom action hook.
         */
        // do_action('my_custom_contact_page_action');
          //  echo"Yes the hook called";
        // Or run your custom logic directly here
        error_log('Contact page was visited.'); //this line stores the error in log-file of php
    }
}





// posts filter 


add_action('wp_ajax_filter_posts_by_post_type', 'filter_posts_by_post_type');
add_action('wp_ajax_nopriv_filter_posts_by_post_type', 'filter_posts_by_post_type');

function filter_posts_by_post_type() {

    $post_type = $_POST['post_type'];
    $sort = (!empty($_POST['sort'])) ? $_POST['sort'] : 'DESC';
    $start_date = (!empty($_POST['start_date'])) ? $_POST['start_date'] : '';
    $end_date = (!empty($_POST['end_date'])) ? $_POST['end_date'] : '';
    // Default blog posts
    if ($post_type == 'all') {
        $post_type = 'post';
    }

    $args = array(
        'post_type' => $post_type,
        'posts_per_page' => 5,
        'orderby' => 'date',
        'order' => $sort
    );

    $args['date_query'] = array (
      array (
        'after' => $start_date,
        'before' => $end_date,
        'inclusive' => true
      ),
      );
    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) : $query->the_post();

            $large_image_url = wp_get_attachment_image_src(
                get_post_thumbnail_id(get_the_ID()),
                'large'
            );
            ?>

            <a class="blog-posts" href="<?php the_permalink(); ?>" 
               style="background-image:url('<?php echo $large_image_url[0]; ?>');">
                <div class="post_types_cntnt">
                    <h2><?php the_title(); ?></h2>
                    
                </div>
            </a>

            <?php
        endwhile;
        wp_reset_postdata();
    } else {
        echo "<p>No posts found.</p>";
    }

    wp_die();
}



add_action('wp_ajax_get_categories_by_post_type', 'get_categories_by_post_type');
add_action('wp_ajax_nopriv_get_categories_by_post_type', 'get_categories_by_post_type');

function get_categories_by_post_type() {
    $post_type = $_POST['post_type'];

    if ($post_type == 'all' || $post_type == '') {
        $post_type = 'post';
    }

    // Step 1: Get taxonomies linked with this post type 
    $taxonomies = get_object_taxonomies($post_type, 'objects');

    echo '<option value="">Select a Category</option>';

    foreach ($taxonomies as $taxonomy) {

        if (!$taxonomy->hierarchical) continue; // only categories-like

        // Step 2: Get terms of this taxonomy
        $terms = get_terms([
            'taxonomy' => $taxonomy->name,
            'hide_empty' => true
        ]);

        if (!empty($terms) && !is_wp_error($terms)) {
            foreach ($terms as $term) {
                echo '<option value="'. esc_attr($term->slug) .'">'
                        . esc_html($term->name) .
                     '</option>';
            }
        }
    }

    wp_die();
}



add_action('wp_ajax_get_categories_posts', 'get_categories_posts');
add_action('wp_ajax_nopriv_get_categories_posts', 'get_categories_posts');

function get_categories_posts() { 
  $post_type = $_POST['post_type'];
  $category = $_POST['category'];
  $sort = (!empty($_POST['sort'])) ? $_POST['sort'] : 'DESC';
  $start_date = (!empty($_POST['start_date'])) ? $_POST['start_date'] : '';
  $end_date = (!empty($_POST['end_date'])) ? $_POST['end_date'] : '';

   $args = array(
        'post_type' => $post_type,
        'posts_per_page' => 5,
        'orderby' => 'date',
        'order' => $sort
    );

     $args['date_query'] = array (
      array (
        'after' => $start_date,
        'before' => $end_date,
        'inclusive' => true
      ),
      );

   if(!empty($category)) {
    $taxonomies = get_object_taxonomies($post_type);

    if($taxonomies){
      $args['tax_query'] = array (
        array (
          'taxonomy' => $taxonomies[0],
          'field' => 'slug',
          'terms' => $category
        )
        );
    }
   }

  $taxPosts = new WP_Query ($args);

   if ($taxPosts->have_posts()) {
        while ($taxPosts->have_posts()) : $taxPosts->the_post();

            $large_image_url = wp_get_attachment_image_src(
                get_post_thumbnail_id(get_the_ID()),
                'large'
            );
            ?>

            <a class="blog-posts" href="<?php the_permalink(); ?>" 
               style="background-image:url('<?php echo $large_image_url[0]; ?>');">
                <div class="post_types_cntnt">
                    <h2><?php the_title(); ?></h2>
                    
                </div>
            </a>

            <?php
        endwhile;
        wp_reset_postdata();
    } else {
        echo "<p>No posts found.</p>";
    }
  
    wp_die();
}

?>