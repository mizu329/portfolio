<!DOCTYPE html>
<html>

<head>
	<!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SVKRP8ENHC"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-SVKRP8ENHC');
    </script>
	
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WF3XSGD5');</script>
    <!-- End Google Tag Manager -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
    <title>
    <?php
    $site_name = get_bloginfo('name');
    $page_title = wp_title('', false);
    
    if ($page_title) {
        echo $site_name . ' | ' . $page_title;
    } else {
        echo $site_name;
    }
    ?>
    </title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marcellus+SC&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WF3XSGD5"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
  
<header>


    <nav class="nav pc">
        <h1 class="title pc">
            <a href="<?php echo home_url(); ?>">Home</a>
        </h1>
        <ul class="menu-group">
            <li class="menu-item"><a href="<?php echo home_url(); ?>/aboutme">About me</a></li>
            <li class="menu-item"><a href="<?php echo home_url(); ?>/work">Works</a></li>
            <li class="menu-item"><a href="<?php echo home_url(); ?>/news">News</a></li>
            <li class="menu-item"><a href="<?php echo home_url(); ?>/contact">Contact</a></li>
        </ul>
    </nav>
    

    <div class="header__inner sp">
    <button id="js-hamburger" type="button" class="hamburger" aria-controls="navigation" aria-expanded="false" aria-label="メニューを開く">
        <span class="hamburger__line"></span>
        <span class="hamburger__text"></span>
      </button>
    <div class="header__nav-area js-nav-area" id="navigation">
      <nav id="js-global-navigation" class="global-navigation">
        <ul class="global-navigation__list">
          <li>
          <a href="<?php echo home_url(); ?>">Home</a>
          </li>
          <li>
          <a href="<?php echo home_url(); ?>/aboutme">About me</a>
          </li>
          <li>
          <a href="<?php echo home_url(); ?>/work">Works</a>
          </li>
          <li>
          <a href="<?php echo home_url(); ?>/news">News</a>
          </li>
          <li>
          <a href="<?php echo home_url(); ?>/contact">Contact</a>
          </li>
        </ul>
        <div id="js-focus-trap" tabindex="0"></div>
      </nav>
    </div>
  </div>

    <?php wp_head(); ?>
</header>

  <div id="custom-popup">
    <h2>お知らせ</h2>
    <p>現在お問い合わせを停止しています</p>
  
  <button id="close-popup">閉じる</button>
  </div>

  <style>
    #custom-popup {
    display: none;
    position: fixed;
    top: 20%;
    left: 50%;
    background: white;
    transform: translateX(-50%);
    padding: 20px;
    border: 2px solid #333;
    z-index: 1000;
    box-shadow: 0 4px 10px rgba(0,0,0,0.3);
    border-radius: 8px;
    }

    #custom-popup h2 {
      font-size: 2rem;
      margin-bottom: 10px;
      text-align: center;
    }

    #custom-popup p {
      font-size: 1.6rem;
      margin-bottom: 20px;
    }

    #close-popup {
    background-color: #333;
    color: white;
    display: block;
    margin: 20px auto 0;
    font-size: 1.6rem;
    padding: 5px 15px;
    border-radius: 5px;
   }
  </style>