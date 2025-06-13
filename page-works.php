

    <?php get_header(); ?>

    <main id="works">
        <section class="fv">
            <div class="inner">
                <h1 class="title">Work</h1>
                <p class="subtitle">実績</p>
            </div>
        </section>

        <section id="works_contents">
            <div class="inner">
            <h2 class="contents_title animationElement">Work</h2>
            <p class="contents_subtitle animationElement">実績</p>

            <ul class="newsNav animationElement">
                    <?php
                    $args = array(
                        'title_li' => '',
                        'hide_empty' => 'true',
                        'exclude' => '1',
                    );
                    wp_list_categories($args);
                    ?>
            </ul>

            <ul class="workslist animationElement">


            <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $args = array(
                    'post_type' => 'post', // カスタム投稿タイプ「news」を指定
                    'posts_per_page' => 6, // 表示する記事数
                    'orderby' => 'date',   // 日付順で取得
                    'order' => 'DESC',     // 新しい順に並べる
                    'paged' => $paged // ページ番号を指定
                );
                $my_query = new WP_Query( $args ); // カスタム投稿を取得
                ?>

            <?php if ( $my_query->have_posts() ) : ?>
                <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
                            
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
                    <p class="title"><?php the_title(); ?></p>
                    <div class="content"><?php the_content(); ?></div>
                    <?php if (!post_password_required()) : ?>
                    <a class="btn" href="<?php the_permalink(); ?>">詳細を見る</a>
                    <?php endif; ?>
                    </div>
                </li>
                <?php endwhile; ?>
            </ul>

            <div class="pagenation">
                <?php
                echo paginate_links( array(
                'total' => $my_query->max_num_pages, // 全ページ数を指定
                'current' => max( 1, $paged ), // 現在のページ番号を指定
                'prev_text' => '« Prev', // 「前へ」のテキスト
                'next_text' => 'Next »', // 「次へ」のテキスト
                ) );
                ?>
            </div>

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
