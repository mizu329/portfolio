

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
                'hide_empty' => 'true',
                'exclude' => '1',
            );
            wp_list_categories($args);
            ?>

            </ul>
            <ul class="newslist slideinTop">
            <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $args = array(
                    'post_type' => 'news', // カスタム投稿タイプ「news」を指定
                    'posts_per_page' => 6, // 表示する記事数
                    'orderby' => 'date',   // 日付順で取得
                    'order' => 'DESC',     // 新しい順に並べる
                    'paged' => $paged // ページ番号を指定
                );
                // $newsPosts = get_posts($args); // カスタム投稿を取得
                $my_query = new WP_Query( $args ); // カスタム投稿を取得
                ?>

               <?php if ( $my_query->have_posts() ) : ?>
                <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
               
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

            <?php
    echo paginate_links( array(
        'total' => $my_query->max_num_pages, // 全ページ数を指定
        'current' => max( 1, $paged ), // 現在のページ番号を指定
        'prev_text' => '« 前へ', // 「前へ」のテキスト
        'next_text' => '次へ »', // 「次へ」のテキスト
    ) );
    ?>

<?php wp_reset_postdata(); ?>
<?php else : ?>
    <p>投稿が見つかりません。</p>
<?php endif; ?>

            </div>

        </section>

    </main>

    <?php get_footer(); ?>
</body>

</html>

    <style>
        .newsNav > li > a {
            color: #fff !important;
            background-color: #099DF0;
            border-radius: 3px;
        }
    </style>