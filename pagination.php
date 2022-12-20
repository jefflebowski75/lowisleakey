<?php
function paginate_posts()
{
    echo "<div class='page-nav-container'>" . paginate_links(
        array(
            'prev_text' => __('<'),
            'next_text' => __('>')
        )
    ) . "</div>";
} ?>