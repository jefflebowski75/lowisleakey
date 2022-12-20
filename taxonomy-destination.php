<?php

/**
 * The template for displaying all single posts
 *
 * @package lowisleakey
 */
get_header(); ?>
<?php $term = get_queried_object();
$termlower = strtolower($term->name); ?>
<?php $pageImage = get_field('hero_image'); ?>
<div class="hero hero__destination" style="background-image: url(<?php echo $pageImage['url']; ?>);">
    <a href="/your-safari">
        <div class="floating-link">YOUR ITINERARY</div>
    </a>
    <div class="row">
        <p class="heading">
            <?php get_template_part('inc/img/chevron'); ?>Return
        </p>
        <h3 class=" heading heading__sm">Discover</h3>
        <h1 class="heading heading__xl">
            <?php echo $term->name; ?>
        </h1>
    </div>
    <div class="see-more">
        <?php get_template_part('inc/img/chevron'); ?>
    </div>
</div>

<?php get_template_part('template-parts/headline-destination'); ?>

<div class="vertical-spacing"></div>

<?php get_template_part('template-parts/highlights'); ?>

<div class="vertical-spacing"></div>

<?php get_footer(); ?>