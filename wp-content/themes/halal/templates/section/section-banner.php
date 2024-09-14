<?php
    $id = get_the_ID();
    // $description = get_field('description', $id);
?>
    <div class="section-banner">
        <div class="banner">
            <img src="<?= get_the_post_thumbnail_url($id,'full')?>" alt="">
        </div>
        <div class="backdrop-banner"></div>
        <div class="container">
            <div class="bot">
                <a href="<?= home_url() ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.49428 8.0817C1.96749 8.55581 1.66669 9.2312 1.66669 9.93995V16.3265C1.66669 17.7073 2.78598 18.8265 4.16669 18.8265H15.8334C17.2141 18.8265 18.3334 17.7073 18.3334 16.3265V9.93995C18.3334 9.2312 18.0325 8.55581 17.5058 8.0817L11.6724 2.8317C10.7217 1.97602 9.27835 1.97602 8.3276 2.83171L2.49428 8.0817ZM9.16669 11.3265C8.24621 11.3265 7.50002 12.0727 7.50002 12.9932V16.3265C7.50002 16.7868 7.87312 17.1599 8.33335 17.1599H11.6667C12.1269 17.1599 12.5 16.7868 12.5 16.3265V12.9932C12.5 12.0727 11.7539 11.3265 10.8334 11.3265H9.16669Z" fill="white"/>
                    </svg>
                </a>
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.47976 13.1801C5.2845 12.9848 5.2845 12.6683 5.47976 12.473L9.34171 8.61111C9.40678 8.54598 9.40678 8.44051 9.34171 8.37538L5.47976 4.51346C5.2845 4.3182 5.2845 4.00162 5.47976 3.80636C5.67502 3.6111 5.9916 3.6111 6.18686 3.80636L10.0488 7.66831C10.5044 8.12391 10.5044 8.86258 10.0488 9.31818L6.18686 13.1801C5.9916 13.3754 5.67502 13.3754 5.47976 13.1801Z" fill="white"/>
                    </svg>
                </span>
                <a href="<?php get_permalink($id) ?>"><?php the_title() ?></a>
            </div>
            <h2 class="title"><?php the_title() ?></h2>
            <span><?php the_content()  ?></span>
        </div>
    </div>