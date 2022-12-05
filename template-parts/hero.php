<?php
$hero = get_field('hero');
if( $hero ): ?>

<?php $heroImage = get_field('hero_background_image');?>

<div class="hero" style="background-image: url(<?php echo $heroImage['url']; ?>);">
    <div class="row">
        <div class="hero__heading">
            <h2 class="heading heading__med heading__alt">
                Lowis & Leakey    
            </h2>
            <h1 class="heading heading__xl">
                <?php echo ( $hero['heading'] ); ?>
            </h1>
        </div>
    </div>
</div>    

<?php endif; ?>


