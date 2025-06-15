
    <?php get_header(); ?>

    <style>
        @keyframes bound-anim {
            0%, 100% {
              transform: translateY(0) scale(1);
            }
            30% {
              transform: translateY(-10px);
            }
            50% {
              transform: translateY(0) scale(1);
            }
            90% {
              transform: translateY(0) scale(1);
            }
          }
    </style>

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
                            <p class="history">                           
							新卒でSIerに就職し、コンサルタントとして従事していたのですが、以前から興味のあったデザインやクリエイティブに携わる仕事がしたいという思いから、当時インテリアが好きだったこともあり、建築業界に転職。<br>
							そこでデザインに足を踏みむことは出来たのですが、次第に「自分自身が手を動かしながらデザインを生み出し、ユーザーに届くものをつくりたい」と強く思うようになり、WEBデザインを学び始め、そのまま2023年から企業様に業務委託で入ったり、フリーランスでお仕事を請け負うなどして、
                            Webサイト制作やLP制作、システム開発における企画・デザイン・実装・ディレクション業務に携わってまいりました。<br>
                            CMSを使用した制作でいうと、WordPressやMovable Type、ノーコードツールではSTUDIOでの構築実績があります。<br>
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
                                <a href="https://github.com/mizu329" target="_blank" rel="noopener noreferrer">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/Github.webp" alt="">
                                </a>
                                <p class="bound">▲click here</p>
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