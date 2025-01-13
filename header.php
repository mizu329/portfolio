<!DOCTYPE html>
<html>

<head>
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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css<?php echo '?ver='.filemtime(get_template_directory() . '/css/main.css'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marcellus+SC&display=swap" rel="stylesheet">
</head>

<body>
  
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