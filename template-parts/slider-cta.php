<div class="slider-cta owl-carousel owl-theme">
    <?php
    if (have_rows('slider_slide_cta')):
        while (have_rows('slider_slide_cta')):
            the_row();
            $slideBackground = get_sub_field('background_image');
    ?>
    <div class="slider-cta__slide" style="background-image: url(<?php echo $slideBackground['url']; ?>);">
        <div class="slider-cta__panel">
            <h3 class="heading heading__med">
                <?php the_sub_field('heading'); ?>
            </h3>
            <p>
                <?php the_sub_field('main_copy'); ?>
            </p>
            <div class="button button__light">Find Out More</div>
        </div>
    </div>
    <?php endwhile;
    endif; ?>
</div>