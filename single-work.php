<?php get_header(); ?>

<section class="mainvisual">
    <div class="heading section-title wow fadeInUp">
        <span class="heading__en mainvisual__en">Works</span>
        <span class="heading__ja mainvisual__ja">制作実績</span>
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

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : ?>
    <?php the_post(); ?>

    <!-- content -->
    <div class="content-work">
      <div class="content-work__inner inner">
          <h1 class="content-work__title"><?php the_title(); ?></h1>
          <div class="content-work__top">
            <div class="content-work__url">
              <div class="content-work__url-title">URL
                <?php if(get_field('url')) : ?>
                <a href="<?php the_field('url'); ?>" target="_blank"><?php the_field('url'); ?></a>
                <?php endif; ?>
              </div>
              <p class="content-work__url-text">このサイトは、検索に掛らないようにしています。Basic認証をかけていますID・passwordの入力をお願いします。</p>
            </div>
            <div class="content-work__key">
              <div class="content-work__id">
                <div class="content-work__id-title">ID</div>
                <div class="content-work__id-id">yuunatest</div>
              </div>
              <div class="content-work__password">
                <div class="content-work__password-title">PASSWORD</div>
                <div class="content-work__password-password">yuunatest</div>
              </div>
            </div>
          </div>
          <div class="content-work__img">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
          </div>
          <div class="content-work__body">
            <div class="content-work__target">
              <div class="content-work__target-title">TARGET</div>
              <?php if(get_field('target')) : ?>
              <div class="content-work__target-text">
                <?php echo nl2br(esc_html(get_field('target'))); ?>
              </div>
              <?php endif; ?>
            </div>
            <div class="content-work__purpose">
              <div class="content-work__purpose-title">PURPOSE</div>
              <?php if(get_field('purpose')) : ?>
              <div class="content-work__purpose-text">
                <?php echo nl2br(esc_html(get_field('purpose'))); ?>
              </div>
              <?php endif; ?>
            </div>
            <div class="content-work__work">
              <div class="content-work__work-title">WORK</div>
              <?php if(get_field('work')) : ?>
              <div class="content-work__work-text">
                <?php echo nl2br(esc_html(get_field('work'))); ?>
              </div>
              <?php endif; ?>
            </div>
            <div class="content-work__period">
              <div class="content-work__period-title">PERIOD</div>
              <?php if(get_field('period')) : ?>
              <div class="content-work__period-text">
                <?php echo nl2br(esc_html(get_field('period'))); ?>
              </div>
              <?php endif; ?>
            </div>
          </div><!-- /content-work-body" -->
          <div class="content-work-btn ">
            <a class="button" href="<?php echo get_post_type_archive_link('work'); ?>">制作一覧</a>
          </div><!-- /content-work-btn -->

        </div><!-- /inner -->
      </div><!-- /content-work -->

  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>