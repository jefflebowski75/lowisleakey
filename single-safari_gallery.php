<?php

/**
 * The template for displaying all single safari galleries
 *
 * @package lowisleakey
 */
get_header(); ?>

<div class="vertical-spacing"></div>
<h2>
    <?php the_title() ?>
    <?php the_field('dates'); ?>
</h2>

<?php
$images = get_field('images');
if ($images): ?>
<ul>
    <?php foreach ($images as $image): ?>
    <li>
        <a href="<?php echo esc_url($image['url']); ?>">
            <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>"
                alt="<?php echo esc_attr($image['alt']); ?>" />
        </a>
        <p>
            <?php echo esc_html($image['caption']); ?>
        </p>
    </li>
    <?php endforeach; ?>
</ul>
<?php endif; ?>
<?php get_footer(); ?>