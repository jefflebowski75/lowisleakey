<div class="row-extended">
    <div class="grid-layout2 no-gutter">
        <div class="image-panel-wrapper">
        <?php 
            if( have_rows('country_cta_location') ) :    
                while( have_rows('country_cta_location')): the_row();
                $newvar = get_sub_field('country_image');?>
                    <div class="image-panel" style="background-image: url(<?php echo $newvar['url']; ?>);">
                        <div class="inner-wrapper">
                            <div>
                                <h3 class="heading heading__med heading__light">Where We Go</h3>
                                <h2 class="heading heading__lg heading__light">Discover <?php the_sub_field('country');?></h2>
                            </div>
                            <div>
                                CLICKY
                            </div>
                        </div>
                    </div>
                <?php endwhile;
            endif; ?>
            
        </div>
        <div class="map-wrapper">
            <?php get_template_part("inc/img/africa-map");?>
            <div class="country-panel">
                <?php 
                if( have_rows('country_cta_location') ) :    
                    while( have_rows('country_cta_location')): the_row();
                    $country = get_sub_field('country');?>
                    <p class="<?php echo strtolower($country);?>"><?php the_sub_field('country');?></p>
                    <?php endwhile;
                endif; ?>
            </div>
            
        </div>
    </div>
</div>
