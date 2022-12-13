<?php

/**
 * The template for displaying all single itineraries
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
                    Your Safari
                </h1>
                <h2 class="heading heading__primary heading__sm">
                    Go To Your Own Place
                </h2>
                <div class="inputs">
                    <div class="input-wrapper anchor">
                        <input id="unique_id" type="text" placeholder="<?php print($the_unique_id); ?>" readonly />
                        <div class="proceed-itin" id="goto-itin">
                            <?php get_template_part('inc/img/chevron'); ?>
                        </div>
                    </div>
                    <div class=" input-wrapper password">
                        <input id="password" type="text" placeholder="Password*" />
                    </div>
                    <div class="input-wrapper submit-button">
                        <button id="check-details">Submit</button>
                    </div>
                </div>
            </div>
            </row>
        </div>
    </div>
</section>

<script>
    document.getElementsByTagName('html')[0].style.overflow = "hidden";
    document.getElementById("check-details").onclick = function () { accessItinerary() };
    function accessItinerary() {
        var required_password = "<?php print($the_password); ?>";
        var submitted_password = document.getElementById("password").value;
        if (submitted_password == required_password) {
            document.getElementById('login-overlay').classList.add("fadeOut");
            document.querySelector('.single-itineraries header').classList.add("visible");
            document.getElementsByTagName('html')[0].style.overflow = "auto";
        } else {

        }
    }
    window.onload = function animateForm() {
        document.querySelector('.single-itineraries main').classList.add("loaded");
        document.querySelector('.proceed-itin').classList.add("hide");
    }
</script>

<div id="page-content">
    <?php the_field('test'); ?>
</div>



<?php get_footer(); ?>