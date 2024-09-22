<?php 
/* Template Name: Chứng nhận */
$list_cretify_query = new WP_Query(array(
    'post_type' => 'danh-sach-chung-nhan',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order'      => 'ASC',
));
get_header(); ?>
<main>
    <?php include('section/section-banner.php') ?>
    <div class="section-cretify fade-in">
        <div class="container">  
            <div class="wrap">
                <div class="left">
                    <nav class="list-tab" id="list-tab-cretify">
                        <ul>
                            <?php if ($list_cretify_query->have_posts()) : ?>
                                <?php while ($list_cretify_query->have_posts()) : $list_cretify_query->the_post(); ?>
                                    <?php
                                        $cretify_id = get_the_ID();
                                        $cretify = get_field('cretify', $cretify_id);
                                    ?>
                                    <li><a href="#<?= get_post_field('post_name', get_post()); ?>"><?php the_title(); ?></a></li>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                            <?php else : ?>
                                <p><?= (pll_current_language() == 'en-us') ? "There are not cretify." : "Không có chứng nhận nào." ?></p>
                            <?php endif; ?>
                        </ul>
                    </nav>
                </div>
                <div class="right" id="list-cretify">
                    <?php if ($list_cretify_query->have_posts()) : ?>
                        <?php while ($list_cretify_query->have_posts()) : $list_cretify_query->the_post(); ?>
                            <?php
                                $cretify_id = get_the_ID();
                                $cretify = get_field('cretify', $cretify_id);
                                $cretify_list = $cretify['cretify-list'];
                            ?>
                            <div class="child">
                                <ul>
                                    <?php foreach($cretify_list as $item): ?>
                                        <li>
                                            <h4><?= $item['title'] ?></h4>
                                            <span>
                                                <a href="<?= $item['link'] ?>" target="_blank">
                                                    <p><?= $item['text'] ?></p>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path d="M12.8 11.2002L20 4.0002M20 4.0002H15.725M20 4.0002V8.2752" stroke="#414141" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M20 12C20 15.7712 20 17.6569 18.8284 18.8284C17.6569 20 15.7712 20 12 20C8.22876 20 6.34315 20 5.17157 18.8284C4 17.6569 4 15.7712 4 12C4 8.22876 4 6.34315 5.17157 5.17157C6.34315 4 8.22876 4 12 4" stroke="#414141" stroke-width="1.5" stroke-linecap="round"/>
                                                    </svg>
                                                </a>
                                            </span>
                                        </li>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>     
    </div>
</main>
<?php get_footer(); ?>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tabs = document.querySelectorAll('#list-tab-cretify li');
        const cretify = document.querySelectorAll('#list-cretify .child');

        tabs[0].classList.add('active');
        cretify[0].classList.add('active');

        tabs.forEach((tab, index) => {
            tab.addEventListener('click', () => {
                setActiveTab(index);
            });
        });

        function setActiveTab(activeIndex) {
            tabs.forEach(t => t.classList.remove('active'));
            cretify.forEach(p => p.classList.remove('active'));

            tabs[activeIndex].classList.add('active');
            cretify[activeIndex].classList.add('active');
        }
        
        // Function to set tab based on URL hash
        function setTabFromHash() {
            const hash = window.location.hash.substring(1); // Get the hash without the '#'
            const targetTab = Array.from(tabs).findIndex(tab => tab.querySelector('a').getAttribute('href').substring(1) === hash);

            if (targetTab !== -1) {
                setActiveTab(targetTab);
            }
        }

        // Call function to set tab from hash
        setTabFromHash();

        // Optional: Update tab when URL hash changes (e.g., when users use the back/forward buttons)
        window.addEventListener('hashchange', setTabFromHash);
    });
</script>