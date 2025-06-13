    <?php get_header(); ?>

    <main id="contact">
        <section class="fv">
            <div class="inner">
                <h1>Contact</h1>
                <p>お問い合わせ</p>
            </div>
        </section>
        <section id="contact_contents">
            <div class="inner">
                <h2 class="title animationElement">Contact</h2>
                <p class="subtitle animationElement">お問い合わせ</p>
                <?php echo do_shortcode('[contact-form-7 id="e6501db" title="コンタクトフォーム 1" html_class="animationElement"]'); ?>
                <!-- <form action="">
                    <p>お問い合わせは<br>
                        こちらのフォームより承っています</p>
                    <div class="contact_wrapper_contents">
                        <label for="">お名前<span>*</span></label>
                        <input type="text">
                    </div>
                    <div class="contact_wrapper_contents">
                        <label for="">メールアドレス<span>*</span></label>
                        <input type="text">
                    </div>
                    <div class="contact_wrapper_contents">
                        <label for="">お問い合わせ内容<span>*</span></label>
                        <textarea rows="10" name="" id=""></textarea>
                    </div>
                    <div class="contact_wrapper_privacy">
                        <label for="">
                            <input type="checkbox">
                            <p>プライバシーポリシー</a>に同意して送信する</p>
                        </label>
                    </div>
                    <div class="contact_wrapper_btn">
                        <button>送信する</button>
                    </div>
                </form> -->
            </div>
        </section>

    </main>





    <?php get_footer(); ?>
</body>

</html>