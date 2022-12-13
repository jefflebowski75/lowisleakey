<div class="gallery-feed">
    <div class="row">
        <div class="grid-layout2">
            <div>
                <h4 class="heading heading__med">Safari Diaries</h4>
                <p>The best way to show what we do is through the lens of our trips. Below are photo diaries of recent
                    adventures:</p>

            </div>
        </div>

    </div>
    <?php
    $loop = new WP_Query(
        array(
            'post_type' => 'safari_gallery'
        )
    );
    while ($loop->have_posts()):
        $loop->the_post(); ?>
    <div class="row">
        <div class="gallery-feed__card">
            <div class="meta">
                <h3 class="heading heading__sm">
                    <?php the_title(); ?>
                </h3>
                <p>
                    <?php the_field('dates'); ?>
                </p>
                <?php $terms = get_the_terms($post->ID, 'gallery_location');
        if ($terms) {
            foreach ($terms as $term) { ?>
                <p class="meta__list">
                    <?php echo $term->name; ?>
                </p>
                <?php }
        } ?>
                <a href="" class="button">See Full Album</a>
            </div>

            <div class="gallery-featured-image"
                style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>

        </div>

    </div>

    <?php endwhile;
    wp_reset_postdata();
    ?>



</div>