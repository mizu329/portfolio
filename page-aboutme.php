

    <?php get_header(); ?>

    <main class="aboutme">
        <section class="fv">
            <div class="inner">
                <h1>About me</h1>
                <p>私について</p>
            </div>
        </section>
        <section class="aboutme_contents">
            <div class="inner animationElement">
                <h2 class="title">About me</h2>
                <p class="subtitle">私について</p>

                <ul class="aboutme_content_items">
                    <li class="profile">
                        <div class="profile_right">
                            <p class="birth">1994.07.29</p>
                            <h3 class="name">M.M</h3>
                            <p class="duties">Desiner & Engineer</p>
                        </div>
                        <div class="profile_left">
                            <p class="history">新卒でSIerに就職し、コンサルタントとして従事していたが、以前から興味のあったデザインやクリエイティブに携わる仕事がしたいという思いから、建築業界に転職。CADやパースの作成を通じ、デジタルでのデザイン表現に惹かれ、WEBデザインを学び始め、2023年にフリーランスとして活動を開始。
                            サイト改修やLP制作(設計～実装)、メディアサイトのバナー作成や記事修正によるCVR改善プロジェクト等に携わるなどしてきました。CMS構築においては、WordPressやMovable Type、ノーコードツールではSTUDIOを得意としています。<br>
                            <br>
                            よろしくお願い致します。
                            </p>
                        </div>
                    </li>
                    <li class="skill">
                        <h3>SKILL</h3>

                        <ul>
                            <li class="Figma">
                                <p>Figma</p>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/Figma.webp" alt="">
                            </li>
                            <li class="illustrator">
                                <p>illustrator</p>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/illustrator.webp" alt="">
                            </li>
                            <li class="photoshop">
                                <p>photoshop</p>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/photoshop.webp" alt="">
                            </li>
                            <li class="Github">
                                <p>Github</p>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/Github.webp" alt="">
                            </li>
                            <li class="Wordpress">
                                <p>Wordpress</p>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/Wordpress.webp" alt="">
                            </li>
                            <li class="Studio">
                                <p>Studio</p>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/Studio.webp" alt="">
                            </li>
                        </ul>
                    </li>
                </ul>

                <div class="btn">
                    <a href="<?php echo home_url(); ?>">TOPに戻る</a>
                </div>

            </div>
        </section>

    </main>

    <?php get_footer(); ?>
</body>

</html>