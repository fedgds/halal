<?php
/* Template Name: Halal NQI */
$list_halal_nqi_query = new WP_Query(array(
    'post_type' => 'halal-nqi',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'ASC',
));
get_header(); ?>
<main>
    <?php include('section/section-banner.php') ?>
    <div class="section-halal-nqi fade-in">
        <div class="container">
            <div class="left">
                <nav class="list-tab" id="list-tab-nqi">
                    <ul>
                        <?php if ($list_halal_nqi_query->have_posts()): ?>
                            <?php while ($list_halal_nqi_query->have_posts()):
                                $list_halal_nqi_query->the_post(); ?>
                                <?php
                                $nqi_id = get_the_ID();
                                $nqi = get_field('halal_nqi', $nqi_id);
                                ?>
                                <li><a href="#<?= get_post_field('post_name', get_post()); ?>"><?php the_title(); ?></a></li>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php else: ?>
                            <p>Không có.</p>
                        <?php endif; ?>
                    </ul>
                </nav>
            </div>
            <div class="right" id="list-nqi">
                <?php if ($list_halal_nqi_query->have_posts()): ?>
                    <?php while ($list_halal_nqi_query->have_posts()):
                        $list_halal_nqi_query->the_post(); ?>
                        <?php
                        $nqi_id = get_the_ID();
                        $nqi = get_field('halal_nqi', $nqi_id);
                        $policy_list = $nqi['policy-list'];
                        ?>
                        <div class="child">
                            <h3 class="title"><?php the_title(); ?></h3>
                            <div class="content">
                                <?php the_content(); ?>
                            </div>
                            <ul>
                                <?php foreach ($policy_list as $item): ?>
                                    <li>
                                        <span><?= $item['policy'] ?></span>
                                        <a href="<?= $item['link_download'] ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none">
                                                <path
                                                    d="M12.442 15.6051C12.3284 15.7294 12.1677 15.8002 11.9992 15.8002C11.8308 15.8002 11.6701 15.7294 11.5564 15.6051L8.3564 12.1051C8.1328 11.8605 8.1498 11.481 8.39436 11.2574C8.63892 11.0338 9.01844 11.0508 9.24204 11.2953L11.3992 13.6548V4.8002C11.3992 4.46882 11.6679 4.2002 11.9992 4.2002C12.3306 4.2002 12.5992 4.46882 12.5992 4.8002V13.6548L14.7564 11.2953C14.98 11.0508 15.3595 11.0338 15.6041 11.2574C15.8486 11.481 15.8656 11.8605 15.642 12.1051L12.442 15.6051Z"
                                                    fill="#414141" />
                                                <path
                                                    d="M5.39922 14.4002C5.39922 14.0688 5.13059 13.8002 4.79922 13.8002C4.46785 13.8002 4.19922 14.0688 4.19922 14.4002V14.4441C4.1992 15.5382 4.19919 16.42 4.29244 17.1136C4.38925 17.8337 4.59637 18.44 5.0779 18.9215C5.55943 19.403 6.16573 19.6102 6.88582 19.707C7.57939 19.8002 8.46125 19.8002 9.55532 19.8002H14.4431C15.5372 19.8002 16.419 19.8002 17.1126 19.707C17.8327 19.6102 18.439 19.403 18.9205 18.9215C19.4021 18.44 19.6092 17.8337 19.706 17.1136C19.7993 16.42 19.7992 15.5382 19.7992 14.4441V14.4002C19.7992 14.0688 19.5306 13.8002 19.1992 13.8002C18.8679 13.8002 18.5992 14.0688 18.5992 14.4002C18.5992 15.5485 18.5979 16.3494 18.5167 16.9537C18.4378 17.5407 18.2934 17.8516 18.072 18.073C17.8506 18.2944 17.5397 18.4388 16.9527 18.5177C16.3484 18.5989 15.5476 18.6002 14.3992 18.6002H9.59922C8.45089 18.6002 7.65 18.5989 7.04572 18.5177C6.4587 18.4388 6.14784 18.2944 5.92643 18.073C5.70502 17.8516 5.56066 17.5407 5.48174 16.9537C5.40049 16.3494 5.39922 15.5485 5.39922 14.4002Z"
                                                    fill="#414141" />
                                            </svg>
                                        </a>
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
</main>
<?php get_footer(); ?>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tabs = document.querySelectorAll('#list-tab-nqi li');
        const nqi = document.querySelectorAll('#list-nqi .child');

        tabs[0].classList.add('active');
        nqi[0].classList.add('active');

        tabs.forEach((tab, index) => {
            tab.addEventListener('click', () => {
                setActiveTab(index);
            });
        });

        function setActiveTab(activeIndex) {
            tabs.forEach(t => t.classList.remove('active'));
            nqi.forEach(p => p.classList.remove('active'));

            tabs[activeIndex].classList.add('active');
            nqi[activeIndex].classList.add('active');
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