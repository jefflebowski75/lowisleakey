<?php
/**
 * The template for displaying 404 pages
 *
 * @package lowisleakey
 */

get_header();
?>

<?php if (strpos($_SERVER["REQUEST_URI"], "/your-safari/") !== false) {
    get_template_part('template-parts/check-password');
} ?>



<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <section class="error-404 not-found">

            <span class="loader"></span>
            <h1 class="heading-primary--main">ERROR 4<span>0</span>4</h1>
            <h3 class="error-copy robo-font">Page not found</h3>



        </section><!-- .error-404 -->

    </main><!-- #main -->
</div><!-- #primary -->

<script>
    document.getElementById("goto-itin").onclick = function () { findItinerary() };
    function findItinerary() {
        var url = '/your-safari/' + document.getElementById('unique_id').value;
        window.location.href = url;
    }
</script>

<?php
get_footer();