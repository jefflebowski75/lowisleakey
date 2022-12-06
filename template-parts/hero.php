<?php $heroImage = get_field('hero_background_image');?>

<div class="hero" style="background-image: url(<?php echo $heroImage['url']; ?>);">
    <div class="row">
        <div class="hero__heading">
            <h2 class="heading heading__med heading__alt">
                Lowis & Leakey    
            </h2>
            <h1 class="heading heading__xl">
                <?php the_field( 'hero_heading' ); ?>
            </h1>
        </div>
    </div>
</div>    


