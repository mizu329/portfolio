

    <?php get_header(); ?>

    <main id="work_article">
        <section class="fv">
            <div class="inner">
                <h1>Work</h1>
                <p>実績</p>
            </div>
        </section>
        <section class="work_contents">
            <div class="inner">
                <h2 class="title"><?php the_title() ?></h2>
                <p class="subtitle"><?php the_field('subtitle'); ?></p>

                <div class="work_wrapper">
                    <div class="work_wrapper_inner">
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
                    <?php $cms_value = get_field('cms'); ?>
                    <?php if (!empty($cms_value)): ?>
                        <p class="cms">
                            <span>CMS:</span><br>
                            <?php echo $cms_value; ?>
                        </p>
                    <?php endif; ?>

                    <?php $tool_value = get_field('tool'); ?>
                    <?php if (!empty($tool_value)): ?>
                        <p class="tool">
                            <span>ツール:</span><br>
                            <?php echo $tool_value; ?>
                        </p>
                    <?php endif; ?>

                    <?php $lang_value = get_field('lang'); ?>
                    <?php if (!empty($lang_value)): ?>
                        <p class="lang">
                            <span>言語:</span><br>
                            <?php echo $lang_value; ?>
                        </p>
                    <?php endif; ?>
                    <?php $explain_value = get_field('explain'); ?>
                    <?php if (!empty($explain_value)): ?>
                        <p class="explain">
                            <span>説明:</span><br>
                            <?php echo nl2br($explain_value); ?>
                        </p>
                    <?php endif; ?>
                    <?php $url_value = get_field('url'); ?>
                    <?php if (!empty($url_value)): ?>
                        <p class="url">
                            <span>URL:</span><br>
                            <a target="_blank" rel="noopener noreferrer" href="<?php echo $url_value; ?>"><?php echo $url_value; ?></a>
                        </p>
                    <?php endif; ?>

                    <?php 
$fullpage_image = get_field('fullpage'); 
if (!empty($fullpage_image)): ?>
    <img src="<?php echo esc_url($fullpage_image['url']); ?>" alt="<?php echo esc_attr($fullpage_image['alt']); ?>">
<?php endif; ?>

                <div class="btn">
                <a href="<?php echo home_url(); ?>/work">Woks一覧へ</a>
                </div>
                    </div>
                </div>

            </div>
        </section>

    </main>





    <?php get_footer(); ?>
</body>

</html>