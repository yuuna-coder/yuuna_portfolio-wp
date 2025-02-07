<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="noindex" />
    <!-- <title>Yuuna's Portfolio</title>
    <meta
      name="description"
      content="Web制作者を目指す原 由奈のポートフォリオサイトです。"
    /> -->
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/favicon.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&display=swap"
      rel="stylesheet"
    />
    <!-- <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="./css/lib/animate.css" />
    <link rel="stylesheet" href="./css/reset.css" />
    <link rel="stylesheet" href="./css/style.css" /> -->

    <?php wp_head(); ?>
  </head>
  <body>
    <!-- ヘッダー -->
    <header class="header">
      <div class="header__top"></div>
      <div class="header__inner inner">
        <h1 class="header__logo">
          <a href="http://yuunas-portforio.local/">
            <img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="Yuuna's Portfolio" />
          </a>
        </h1>
        <button
          id="js-drawer-button"
          type="button"
          class="header__icon drawer-icon"
        >
          <span class="drawer-icon__bar"></span>
          <span class="drawer-icon__bar"></span>
          <span class="drawer-icon__bar"></span>
        </button>
        <nav id="js-drawer-content" class="header__nav">
        <?php
          wp_nav_menu(
            array(
              'depth' => 1,
              'theme_location' => 'global', // グローバルメニューをここに表示すると指定
              'container' => '',
              'menu_class' => 'header__lists'
            )
          );
        ?>
          <!-- <ul class="header__lists">
            <li class="header__list"><a href="#home">Home</a></li>
            <li class="header__list"><a href="#about">About</a></li>
            <li class="header__list"><a href="#works">Works</a></li>
            <li class="header__list"><a href="#contact">Contact</a></li>
          </ul> -->
        </nav>
      </div>
    </header>