    <?php get_header(); ?>


    <main class="top">
        <section class="fv">
            <div class="inner">
                <h1 class="animationElement">Visionary Mate</h1>
                <p class="animationElement">伝えたい価値を、伝わるかたちへ。<br>
                想いを届けるデザイン・実装・CMS運用で、あなたのブランドを支えます。</p>
            </div>
        </section>
        <section class="aboutme animationElement">
            <div class="inner">
                <h1>About</h1>
                <h2>Visionary Mate</h2>
                <p>Visionary Mateでは、WEBやLP、バナー制作などのクリエイティブ制作やCMS構築のお手伝いをしています。<br>
                新しいWEBサイトやLPの構築やリニューアルをお考えの方は、ぜひお気軽にお声がけください。
                </p>
                <div class="btn">
                    <a href="<?php echo home_url(); ?>/aboutme/">About me</a>
                </div>
            </div>
        </section>
        <section class="work">
            <div class="inner">
                <div class="title_area animationElement">
                    <h2>Work</h2>
                    <a href="<?php echo home_url(); ?>/works/">VIEW MORE</a>
                </div>
                <ul class="worklist animationElement">
                    <?php
                    $infoPosts = get_posts('numberposts=4&category=2');
                    foreach($infoPosts as $post): 
                    ?>

                    <li class="workitems">
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
                            <h2 class=""><?php the_title() ?></h2>
                            <div class="content"><?php the_content(); ?></div>
                            <?php if (!post_password_required()) : ?>
                            <a class="btn" href="<?php the_permalink(); ?>">詳細を見る</a>
                            <?php endif; ?>
                        </div>
                    </li>

                    <?php endforeach; ?>
                </ul>
            </div>

        </section>
        <section class="news">
            <div class="inner">
                <div class="title_area animationElement">
                    <h2>News</h2>
                    <a href="<?php echo home_url(); ?>/news/">VIEW MORE</a>
                </div>
                <ul class="newslist animationElement">
                <?php
                $args = array(
                    'post_type' => 'news', // カスタム投稿タイプ「news」を指定
                    'posts_per_page' => 3, // 表示する記事数
                    'orderby' => 'date',   // 日付順で取得
                    'order' => 'DESC',     // 新しい順に並べる
                );
                $newsPosts = get_posts($args); // カスタム投稿を取得
                ?>
               <?php foreach($newsPosts as $post): setup_postdata($post); ?>
               
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

                <?php endforeach; wp_reset_postdata(); // ループ後にデータをリセット ?>
                </ul>



            </div>

        </section>
    </main>

    <?php get_footer(); ?>
    <script>

    </script>
</body>

</html>