<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- meta情報 -->
  <title>CodeUpsWordPress講座</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <!-- ogp -->
  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
  <!-- ファビコン -->
  <!-- <link rel="icon" href="" /> -->

  <!-- GoogleFont -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Noto+Serif+JP:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Noto+Sans+JP:wght@400;700&family=Noto+Serif+JP:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
  <!-- css -->
  <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/assets/css/styles.css">
  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
  <!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->
  <script defer src="<?php echo get_theme_file_uri(); ?>/assets/js/script.js"></script>
</head>

<body>
  <header class="l-header p-header">
    <div class="p-header__inner">
      <h1 class="p-header__logo">
        <a href="" class="p-header__logoLink">CodeUps</a>
      </h1>
      <div class="p-header__drawer c-hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <nav class="p-header__pc-nav pc-nav">
        <ul class="pc-nav__items">
          <li class="pc-nav__item">
            <a href="#">NEWS</a>
          </li>
          <li class="pc-nav__item">
            <a href="#">SERVICE</a>
          </li>
          <li class="pc-nav__item">
            <a href="#">WORKS</a>
          </li>
          <li class="pc-nav__item">
            <a href="#">COMPANY</a>
          </li>
          <li class="pc-nav__item">
            <a href="#">RECRUIT</a>
          </li>
          <li class="pc-nav__item">
            <a href="#">CONTACT</a>
          </li>
        </ul>
      </nav>
      <nav class="p-header__sp-nav sp-nav js-sp-nav">
        <ul class="sp-nav__items">
          <li class="sp-nav__item">
            <a href="">NEWS</a>
          </li>
          <li class="sp-nav__item">
            <a href="">SERVICE</a>
          </li>
          <li class="sp-nav__item">
            <a href="">WORKS</a>
          </li>
          <li class="sp-nav__item">
            <a href="">COMPANY</a>
          </li>
          <li class="sp-nav__item">
            <a href="">RECRUIT</a>
          </li>
          <li class="sp-nav__item">
            <a href="">CONTACT</a>
          </li>
        </ul>

      </nav>
    </div>
  </header>