<div class="slider-cta owl-carousel owl-theme">


<?php 
            if( have_rows('slider_slide_cta') ) :    
                while( have_rows('slider_slide_cta')): the_row();?>

            <div class="slider-cta__slide">
               
            <?php the_sub_field('heading');?>
 
            </div>

            <?php endwhile;
            endif; ?>


</div>