<?php
/**
 * ============== Template Name: Home Page
 *
 * @package lowisleakey
 */
get_header(); ?>

<?php get_template_part("template-parts/hero"); ?>

<?php get_template_part("template-parts/headline"); ?>

<div class="vertical-spacing"></div>

<?php get_template_part("template-parts/map-country"); ?>

<div class="vertical-spacing"></div>

<?php get_template_part("template-parts/slider-cta"); ?>

<div class="vertical-spacing"></div>

<?php get_template_part("template-parts/gallery-feed"); ?>

<div class="vertical-spacing"></div>

<?php get_footer(); ?>