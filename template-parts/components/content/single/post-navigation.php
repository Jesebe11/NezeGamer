<?php

the_post_navigation(
    array(
        'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'nezegamer' ) . '</span> <span class="nav-title">%title</span>',
        'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'nezegamer' ) . '</span> <span class="nav-title">%title</span>',
    )
);