<?php get_header(); ?>

    <main class="main">
      <!-- ファーストビュー -->
      <div class="fv" id="home">
        <picture class="fv__image">
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/img/fv.jpg" />
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

                <?php
                $args = array(
                  'post_type' => 'work', // Custom Post Typeのスラッグ
                  'posts_per_page' => 3,  // 表示件数
                  'orderby' => 'date',    // 日付順
                  'order' => 'ASC',      // ASCで昇順、DESCで降順
                );
                $query = new WP_Query($args);

                if ($query->have_posts()) :
                  while ($query->have_posts()) : $query->the_post(); ?>
                  <div class="swiper-slide works__slide">
                    <div class="works-card">
                    <?php if (has_post_thumbnail()) : ?>
                      <a href="<?php the_permalink(); ?>" target="_blank">
                        <div class="works-card__image">
                          <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
                        </div>
                        <p class="gallery-card__text">
                          <?php the_title(); ?>
                        </p>
                      </a>
                      <?php endif; ?>
                    </div>
                  </div>
                <?php endwhile;
                  wp_reset_postdata();
                else : ?>
                  <p>画像がありません。</p>
                <?php endif; ?>
                </div>
                  <!-- Slides -->
                  <!-- <div class="swiper-slide works__slide">
                    <div class="works-card">
                      <a href="" target="_blank">
                        <div class="works-card__image">
                          <img src="<?php echo get_template_directory_uri() ?>/img/works_portforio.png" alt="" />
                        </div>
                        <p class="works-card__text">Yuuna's Portforio</p>
                      </a>
                    </div>
                  </div>
                  <div class="swiper-slide works__slide">
                    <div class="works-card">
                      <a href="" target="_blank">
                        <div class="works-card__image">
                          <img src="<?php echo get_template_directory_uri() ?>/img/works_sobolon.png" alt="" />
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
                </div> -->
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

<?php get_footer(); ?>