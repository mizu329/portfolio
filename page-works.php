

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
                $infoPosts = get_posts('numberposts=4&category=2');
                foreach($infoPosts as $post): 
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
                    <p class="title"><?php the_title(); ?></p>
                    <div class="content"><?php the_content(); ?></div>
                    <a class="btn" href="<?php the_permalink(); ?>">詳細を見る</a>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
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
