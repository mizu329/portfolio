<?php get_header(); ?>

<main id="news_article">
    <section class="fv">
        <div class="inner">
            <h1>News</h1>
            <p>お知らせ</p>
        </div>
    </section>
    <section id="news_contents">
        <div class="inner">
            <?php $categories = get_the_terms($post->ID, 'news-cat') ?>
            <div class="appear">
                <p class="category"><?= $categories[0]->name ?></p>
                <p class="time"><?php the_time('Y/m/d'); ?></p>
            </div>
            <h2 class="title"><?php the_title(); ?></h2>

            <div class="content">
                <?php echo wpautop(get_the_content()); ?>

                <div class="btn">
                    <a href="<?php echo home_url(); ?>/news">News一覧へ</a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
</body>

</html>