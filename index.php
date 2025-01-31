<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="noindex" />
    <title>Yuuna's Portfolio</title>
    <meta
      name="description"
      content="Web制作者を目指す原 由奈のポートフォリオサイトです。"
    />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/favicon.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="./css/lib/animate.css" />
    <link rel="stylesheet" href="./css/reset.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <?php wp_head(); ?>
  </head>
  <body>
    <!-- ヘッダー -->
    <header class="header">
      <div class="header__top"></div>
      <div class="header__inner inner">
        <h1 class="header__logo">
          <a href="">
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
          <ul class="header__lists">
            <li class="header__list"><a href="#home">Home</a></li>
            <li class="header__list"><a href="#about">About</a></li>
            <li class="header__list"><a href="#works">Works</a></li>
            <li class="header__list"><a href="#contact">Contact</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <main class="main">
      <!-- ファーストビュー -->
      <div class="fv" id="home">
        <picture class="fv__image">
          <source media="(min-width: 768px)" srcset="./img/fv.jpg" />
          <img
            src="<?php echo get_template_directory_uri() ?>/img/fv (1).jpg"
            alt="学び続け、価値を生むWeb制作を Yuuna Hara 今も成長中、明日もっと頼れる存在に"
          />
        </picture>
        <div class="fv__contents">
          <div class="fv__message">
            <!-- 上部のキャッチフレーズ -->
            <p class="fv__caption fv__caption-main">
              学び続け、価値を生むWeb制作を
            </p>

            <!-- 中央の名前 -->
            <h2 class="fv__heading">
              <span class="fv__name">Yuuna Hara</span>
            </h2>

            <!-- 下部のキャッチフレーズ -->
            <p class="fv__caption fv__caption-sub">
              今も成長中、明日もっと頼れる存在に
            </p>
          </div>
          <div class="fv__button">
            <a href="#works" class="button">実績を見る</a>
          </div>
        </div>
      </div>

      <!-- About -->
      <section id="about" class="about section">
        <div class="about__inner inner">
          <h2 class="heading section-title wow fadeInUp">
            <span class="heading__en">About</span>
            <span class="heading__ja">私について</span>
          </h2>
          <div class="about__content section__content">
            <div class="about__image">
              <img class="about-pc" src="<?php echo get_template_directory_uri() ?>/img/about_tate.jpg" alt="原由奈" />
              <img class="about-sp" src="<?php echo get_template_directory_uri() ?>/img/about_yoko.jpg" alt="原由奈" />
            </div>
            <div class="about__profile">
              <p class="about__name">原 由奈 - Yuuna Hara</p>
              <p class="about__text">
                1997年4月、埼玉県出身。学び続ける姿勢を大切にし、成長を楽しむWeb制作者です。現在はベーカリーでの業務を行いながら、Web制作スキルを磨くためデイトラのWeb制作コースを受講中。HTML/CSSやWordPressを中心に、制作の幅を広げています。「学び続け、価値を生むWeb制作」をモットーに成長中です。
              </p>
              <div class="about__button">
                <a href="" class="button button-2">ABOUT ME</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Works -->
      <section id="works" class="works section">
        <div class="works__inner inner">
          <h2 class="heading section-title wow fadeInUp">
            <span class="heading__en">Works</span>
            <span class="heading__ja">制作実績</span>
          </h2>
          <div class="works__content section__content">
            <div class="works__slider">
              <!-- Slider main container -->
              <div id="js-works-swiper" class="swiper works__swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                  <!-- Slides -->
                  <div class="swiper-slide works__slide">
                    <div class="works-card">
                      <a href="" target="_blank">
                        <div class="works-card__image">
                          <img src="<?php echo get_template_directory_uri() ?>/img/works_OHA!.png" alt="" />
                        </div>
                        <p class="works-card__text">Yuuna's Portforio</p>
                      </a>
                    </div>
                  </div>
                  <div class="swiper-slide works__slide">
                    <div class="works-card">
                      <a href="" target="_blank">
                        <div class="works-card__image">
                          <img src="<?php echo get_template_directory_uri() ?>/img/works_OHA!.png" alt="" />
                        </div>
                        <p class="works-card__text">【架空ページ】sobolon</p>
                      </a>
                    </div>
                  </div>
                  <div class="swiper-slide works__slide">
                    <div class="works-card">
                      <a href="" target="_blank">
                        <div class="works-card__image">
                          <img src="<?php echo get_template_directory_uri() ?>/img/works_OHA!.png" alt="" />
                        </div>
                        <p class="works-card__text">【架空ページ】OHA!</p>
                      </a>
                    </div>
                  </div>
                </div>
                <!-- If we need pagination -->
                <div
                  id="js-works-pagination"
                  class="swiper-pagination works__pagination"
                ></div>

                <!-- If we need navigation buttons -->
                <div
                  id="js-works-prev"
                  class="swiper-button-prev works__prev"
                ></div>
                <div
                  id="js-works-next"
                  class="swiper-button-next works__next"
                ></div>
              </div>
            </div>
            <div class="works__button">
              <a href="" class="button button-2">VIEW MORE</a>
            </div>
          </div>
        </div>
      </section>

      <!-- Contact -->
      <section id="contact" class="contact section">
        <div class="contact__inner inner">
          <h2 class="heading section-title wow fadeInUp">
            <span class="heading__en">Contact</span>
            <span class="heading__ja">お問い合わせ</span>
          </h2>
          <div class="contact__content section__content">
            <div class="contact__image">
              <img
                class="contact-img"
                src="<?php echo get_template_directory_uri() ?>/img/usirosugata.jpg"
                alt="原由奈"
              />
            </div>
            <div class="contact__text">
              <div class="contact__message">
                <span>同僚をお探しですか？</span>
                <span class="is-hidden-text"
                  >”ご連絡はいつでも歓迎です”
                  <img
                    draggable="false"
                    role="img"
                    class="emoji"
                    alt="🙌"
                    src="https://s.w.org/images/core/emoji/15.0.3/svg/1f64c.svg"
                  />
                </span>
              </div>
              <p class="contact__e-mail">yuna.hara.85moru@gmail.com</p>

              <div class="contact__button">
                <a href="" class="button button-2">SEND MAIL</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
      <div class="footer__inner inner">
        <div class="footer__logo">
          <a href="" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="" /></a>
        </div>
      </div>
      <ul class="footer__sns-items">
        <li class="footer__sns-item">
          <a
            href="https://x.com/yuna20240611"
            class="footer__sns-link"
            target="_blank"
          >
            <img src="<?php echo get_template_directory_uri() ?>/img/logo/twitter.png" alt="" class="is-x" />
          </a>
        </li>
        <li class="footer__sns-item">
          <a href="" class="footer__sns-link" target="_blank">
            <img
              src="<?php echo get_template_directory_uri() ?>/img/logo/Mark/Color/RGB/Wantedly_Mark_LightBG.png"
              alt=""
              class="is-wantedly"
            />
          </a>
        </li>
        <li class="footer__sns-item">
          <a
            href="https://github.com/yuuna-coder"
            class="footer__sns-link"
            target="_blank"
          >
            <img src="<?php echo get_template_directory_uri() ?>/img/logo/github.png" alt="" class="is-github" />
          </a>
        </li>
      </ul>
      <p class="footer__copyright">
        <small>&copy; 2025 Yuuna's Portfolio All Rights Reserved.</small>
      </p>
    </footer>

    <p id="pageTop">TOP</p>

    <script src="./js/lib/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>
