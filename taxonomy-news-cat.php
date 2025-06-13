

<?php get_header(); ?>

<main id="newsPost">
    <section class="fv">
        <div class="inner">
            <h1 class="fv_title">News</h1>
            <p class="fv_subtitle">お知らせ</p>
        </div>
    </section>

    <section id="newsPost_contents">
        <div class="inner">
        <h2 class="contents_title slideinTop">News</h2>
        <p class="contents_subtitle slideinTop">お知らせ</p>

        <ul class="newsNav slideinTop">
        <?php
        $args = array(
            'taxonomy'   => 'news-cat', // カスタムタクソノミー名
            'title_li'   => '',
            'hide_empty' => true, // 投稿がないカテゴリは非表示
        );
        wp_list_categories($args);
        ?>
        </ul>


        <ul class="newslist slideinTop">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
           
            <a href="<?php the_permalink(); ?>">
            <li class="newsitems">
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
                <?php $categories = get_the_terms($post->ID, 'news-cat') ?>
                <p class="category"><?= $categories[0]->name ?></p>
                <p class="title"><?php the_title(); ?></p> <!-- 記事のタイトルを表示 -->
                <p class="time"><?php the_time('Y/m/d'); ?></p> <!-- 投稿日時を表示 -->
            </li>
            </a>
            <?php endwhile; ?>
            </ul>
            
            <div class="pagenation">
            <?php
            the_posts_pagination([
            'mid_size'     => 1,
            'prev_text'    => '« Prev',
            'next_text'    => 'Next »',
            ]);
            ?>
        </div>
    <?php endif; ?>
            

        
    </section>

</main>

<?php get_footer(); ?>
</body>

</html>