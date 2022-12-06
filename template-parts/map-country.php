<div class="row-extended">
    <div class="grid-layout2 no-gutter">
        <div class="image-panel-wrapper">
        <?php 
            if( have_rows('country_cta_location') ) :    
                while( have_rows('country_cta_location')): the_row();
                $country_background = get_sub_field('country_image');
                $country = get_sub_field('country');?>
                    <div id="<?php echo strtolower($country);?>" class="image-panel" style="background-image: url(<?php echo $country_background['url']; ?>);">
                        <div class="inner-wrapper">
                            <div>
                                <h3 class="heading heading__med heading__light">Where We Go</h3>
                                <h2 class="heading heading__lg heading__light">Discover <?php echo $country;?></h2>
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
