<?php get_header(); ?>

<section class="mainvisual">
    <div class="heading section-title wow fadeInUp">
        <span class="heading__en mainvisual__en">About</span>
        <span class="heading__ja mainvisual__ja">私について</span>
    </div>
</section>

<?php if (function_exists('bcn_display')) : ?>
  <!-- breadcrumb -->
  <div class="breadcrumb">
    <div class="inner">
        <?php bcn_display(); // BreadcrumbNavXTのパンくずを表示するための記述 ?>
    </div>
  </div><!-- /breadcrumb -->
<?php endif; ?>

      <!-- About -->
      <section id="about" class="about hello section">
        <div class="about__inner inner">
          <h2 class="heading section-title wow fadeInUp">
            <span class="heading__en">Hello</span>
            <span class="heading__ja">はじめまして</span>
          </h2>
          <div class="about__content section__content">
            <div class="about__image">
              <img class="about-pc" src="<?php echo get_template_directory_uri() ?>/img/hello-tate.jpg" alt="原由奈" />
              <img class="about-sp" src="<?php echo get_template_directory_uri() ?>/img/hello-yoko.jpg" alt="原由奈" />
            </div>
            <div class="about__profile">
              <p class="about__name">原 由奈 - Yuuna Hara</p>
              <p class="about__text">
                1997年4月、埼玉県出身。学び続ける姿勢を大切にし、成長を楽しむWeb制作者です。現在はベーカリーでの業務を行いながら、Web制作スキルを磨くためデイトラのWeb制作コースを受講中。HTML/CSSやWordPressを中心に、制作の幅を広げています。「学び続け、価値を生むWeb制作」をモットーに成長中です。
              </p>
              <ul class="about__sns-items">
                <li class="about__sns-item">
                  <a
                    href="https://x.com/yuna20240611"
                    class="about__sns-link"
                    target="_blank"
                  >
                    <img src="<?php echo get_template_directory_uri() ?>/img/logo/twitter.png" alt="" class="is-x" />
                  </a>
                </li>
                <li class="about__sns-item">
                  <a href="" class="about__sns-link" target="_blank">
                    <img
                      src="<?php echo get_template_directory_uri() ?>/img/logo/Mark/Color/RGB/Wantedly_Mark_LightBG.png"
                      alt=""
                      class="is-wantedly"
                    />
                  </a>
                </li>
                <li class="about__sns-item">
                  <a
                    href="https://github.com/yuuna-coder"
                    class="about__sns-link"
                    target="_blank"
                  >
                    <img src="<?php echo get_template_directory_uri() ?>/img/logo/github.png" alt="" class="is-github" />
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <!-- Career -->
      <section class="career section">
        <div class="career__inner inner">
          <h2 class="heading section-title wow fadeInUp">
            <span class="heading__en">Career</span>
            <span class="heading__ja">コーダーを目指すまで</span>
          </h2>
          <div class="career__lists">
            <!-- 幼少期 -->
            <div class="career__list career-link">
              <?php if ($career1 = get_field('career1')) : ?>
                <?php if ($date = $career1['career1_date']) : ?>
                  <time datetime="" class="career__date"><?php echo esc_html($date); ?></time>
                <?php endif; ?>
                <div class="career__content">
                <?php if ($title = $career1['career1_title']) : ?>
                  <h3 class="career__content-title"><?php echo nl2br(esc_html($title)); ?></h3>
                <?php endif; ?>
                <?php if ($text = $career1['career1_text']) : ?>
                  <p class="career__content-text"><?php echo nl2br(esc_html($text)); ?></p>
                <?php endif; ?>
                </div>
              <?php endif ; ?>
            </div>
            <!-- 高校時代 -->
            <div class="career__list career-link">
              <?php if ($career2 = get_field('career2')) : ?>
                <?php if ($date = $career2['career2_date']) : ?>
                  <time datetime="" class="career__date"><?php echo esc_html($date); ?></time>
                <?php endif; ?>
                <div class="career__content">
                <?php if ($title = $career2['career2_title']) : ?>
                  <h3 class="career__content-title"><?php echo nl2br(esc_html($title)); ?></h3>
                <?php endif; ?>
                <?php if ($text = $career2['career2_text']) : ?>
                  <p class="career__content-text"><?php echo nl2br(esc_html($text)); ?></p>
                <?php endif; ?>
                </div>
              <?php endif ; ?>
            </div>
            <!-- 埼玉県信用保証協会 -->
            <div class="career__list career-link">
              <?php if ($career3 = get_field('career3')) : ?>
                <?php if ($date = $career3['career3_date']) : ?>
                  <time datetime="" class="career__date"><?php echo esc_html($date); ?></time>
                <?php endif; ?>
                <div class="career__content">
                <?php if ($title = $career3['career3_title']) : ?>
                  <h3 class="career__content-title"><?php echo nl2br(esc_html($title)); ?></h3>
                <?php endif; ?>
                <?php if ($text = $career3['career3_text']) : ?>
                  <p class="career__content-text"><?php echo nl2br(esc_html($text)); ?></p>
                <?php endif; ?>
                </div>
              <?php endif ; ?>
            </div>
            <!-- ベーカリー -->
            <div class="career__list career-link">
              <?php if ($career4 = get_field('career4')) : ?>
                <?php if ($date = $career4['career4_date']) : ?>
                  <time datetime="" class="career__date"><?php echo esc_html($date); ?></time>
                <?php endif; ?>
                <div class="career__content">
                <?php if ($title = $career4['career4_title']) : ?>
                  <h3 class="career__content-title"><?php echo nl2br(esc_html($title)); ?></h3>
                <?php endif; ?>
                <?php if ($text = $career4['career4_text']) : ?>
                  <p class="career__content-text"><?php echo nl2br(esc_html($text)); ?></p>
                <?php endif; ?>
                </div>
              <?php endif ; ?>
            </div>
            <!-- Web制作 -->
            <div class="career__list career-link">
              <?php if ($career5 = get_field('career5')) : ?>
                <?php if ($date = $career5['career5_date']) : ?>
                  <time datetime="" class="career__date"><?php echo esc_html($date); ?></time>
                <?php endif; ?>
                <div class="career__content">
                <?php if ($title = $career5['career5_title']) : ?>
                  <h3 class="career__content-title"><?php echo nl2br(esc_html($title)); ?></h3>
                <?php endif; ?>
                <?php if ($text = $career5['career5_text']) : ?>
                  <p class="career__content-text"><?php echo nl2br(esc_html($text)); ?></p>
                <?php endif; ?>
                </div>
              <?php endif ; ?>
            </div>
          </div>
        </div>
      </section>

       <!-- About -->
       <!-- <section id="about" class="about hello section">
        <div class="about__inner inner">
          <h2 class="heading section-title wow fadeInUp">
            <span class="heading__en">Skill</span>
            <span class="heading__ja">できること</span>
          </h2>
          <div class="about__content section__content">
            
          </div>
        </div>
      </section> -->
<?php get_footer(); ?>