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
        <?php
        // 現在のカテゴリIDを取得
        $current_category_id = get_queried_object_id();

        // カスタムクエリの初期化
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        $custom_query = new WP_Query([
            'post_type'      => 'post', // 投稿タイプを指定
            'posts_per_page' => 6,     // 1ページあたりの投稿数
            'paged'          => $paged, // 現在のページ番号
            'cat'            => $current_category_id, // 現在のカテゴリIDを取得
        ]);

        if ($custom_query->have_posts()) :
            while ($custom_query->have_posts()) : $custom_query->the_post();
                // 投稿のループ処理
        ?>    

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
                <div class="content"><?php the_content(); ?></div>
                <a class="btn" href="<?php the_permalink(); ?>">詳細を見る</a>
                </div>
            </li>
            <?php
endwhile;
?>
</ul>

<div class="pagenation">
    <?php
    the_posts_pagination([
        'total'        => $custom_query->max_num_pages,
        'current'      => $paged,
        'mid_size'     => 1,
        'prev_text'    => '« Prev',
        'next_text'    => 'Next »',
    ]);
    ?>
</div>
<?php
endif;
wp_reset_postdata();
?>
        </div>

        </div>

    </section>

</main>

<?php get_footer(); ?>
</body>

</html>
