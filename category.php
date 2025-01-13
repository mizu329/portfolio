

    <?php get_header(); ?>


    <main id="works">
    <section class="fv">
            <div class="inner">
                <h1 class="fv_title">Works</h1>
                <p class="fv_subtitle">実績</p>
            </div>
    </section>

        <section id="works_contents">
            <div class="inner">
            <h2 class="contents_title slideinTop">Work</h2>
            <p class="contents_subtitle slideinTop">実績</p>

            <ul class="newsNav slideinTop">
                    <?php
                    $args = array(
                        'title_li' => '',
                        'hide_empty' => 'true',
                        'exclude' => '1',
                    );
                    wp_list_categories($args);
                    ?>
            </ul>

            <ul class="workslist slideinTop">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>     

                <li class="worksitems">
                    <div class="box_left">
                    <?php
                        if (has_post_thumbnail()) {
                            echo get_the_post_thumbnail();
                        } else {
                            echo 
                            '<div class="noimage">
                            <img src="' . get_template_directory_uri() . '/img/noimage.svg" alt="画像無し">
                            </div>';
                        }
                        ?>
                    </div>
                    <div class="box_right">
                    <p class="title"><?php the_title(); ?></p> <!-- 記事のタイトルを表示 -->
                    <a class="btn" href="<?php the_permalink(); ?>">詳細を見る</a>
                    </div>
                </li>
                <?php endwhile; ?>
            <?php endif;
            wp_reset_postdata(); ?>
            </ul>
            </div>

        </section>

    </main>

    <?php get_footer(); ?>
</body>

</html>
