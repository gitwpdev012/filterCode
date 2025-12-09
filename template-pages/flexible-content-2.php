<h1>This is flexible-content-2.php file</h1>
<?php /*Template Name: flexible-content-2 */ ?>



<?php if( have_rows('page_builder') ): ?>
    <?php while( have_rows('page_builder') ): the_row(); ?>

        <?php if( get_row_layout() == 'hero_section' ): ?>
            <section class="hero" style="background-image: url('<?php the_sub_field('background_image'); ?>');">
                <h1><?php the_sub_field('headline'); ?></h1>
            </section>

        <?php elseif( get_row_layout() == 'text_block' ): ?>
            <section class="text-block">
                <?php the_sub_field('content'); ?>
            </section>

        <?php elseif( get_row_layout() == 'gallery' ): ?>
            <section class="gallery">
                <?php 
                $images = get_sub_field('images');
                foreach( $images as $image ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="">
                <?php endforeach; ?>
            </section>

        <?php elseif( get_row_layout() == 'video_embed' ): ?>
            <section class="video">
                <iframe src="<?php the_sub_field('video_url'); ?>" frameborder="0" allowfullscreen></iframe>
            </section>

        <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>
