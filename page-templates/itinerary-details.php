<?php
/**
 * ============== Template Name: Itinerary Details Page
 *
 * @package lowisleakey
 */
get_header(); ?>

<section id="login-overlay">
    <?php $the_unique_id = get_field('unique_id'); ?>
    <?php $the_password = get_field('password'); ?>
    <div class="header-overlay">
        <div class="row">
            <div class="logo">
                <?php get_template_part('inc/img/logo'); ?>
            </div>
        </div>
    </div>
    <?php $pageImage = get_field('log_in_background', 'options'); ?>

    <div class="full-page-panel" style="background-image: url(<?php echo $pageImage; ?>);">
        <div class="row">
            <div class="details-entry">
                <h1 class="heading heading__lg">
                    <?php the_title(); ?>
                </h1>
                <h2 class="heading heading__primary heading__sm">
                    <?php the_field('sub_heading'); ?>
                </h2>
                <div class="inputs">
                    <div class="input-wrapper">
                        <input id="unique_id" type="text" placeholder="Unique ID" />
                        <div class="proceed-itin" id="goto-itin">
                            <?php get_template_part('inc/img/chevron'); ?>
                        </div>
                    </div>
                </div>
                <!-- <div class=" input-wrapper">
                    <input id="password" type="text" placeholder="Password*" />
                </div> -->
                <!-- <div class="input-wrapper">
                <button id="send-details">Submit</button>
            </div> -->
            </div>
            </row>
        </div>
</section>
<script>
    document.getElementById("goto-itin").onclick = function () { findItinerary() };
    function findItinerary() {
        var url = document.getElementById('unique_id').value;
        window.location.href = window.location.href + url;
    }
</script>

<?php get_footer(); ?>