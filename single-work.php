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


<!-- content -->
<div id="content" class="content-work">
  <div class="inner">
    <!-- primary -->
    <main id="primary">
      <!-- entry -->
      <article class="entry entry-work">
        <!-- entry-header -->
        <div class="entry-header">
          <div class="entry-label">
            <?php
            $terms = get_the_terms(get_the_ID(), 'works_category');
            if ($terms && !is_wp_error($terms)) :
                $term = array_shift($terms);
                $term_name = esc_html($term->name);
            ?>
            <a href=""><?php echo $term_name; ?></a>
            <?php endif; ?>
          </div>
          <h1 class="entry-title"><?php the_title(); ?></h1>
          <div class="entry-img">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
          </div>
        </div><!-- /entry-header -->
        <div class="entry-work-body">
          <div class="entry-work-content">
            カスタム投稿、カスタムタクソノミーでサイト構造の整理を行い、カスタムフィールドの活用によって、お客様にとっても操作性の高い管理画面の設計を行っています。
          </div>
          <div class="entry-work-table">
            <table>
              <tr>
                <th>会社名</th>
                <td>〇〇株式会社</td>
              </tr>
              <tr>
                <th>サイトURL</th>
                <td>https://example.com</td>
              </tr>
              <tr>
                <th>担当範囲</th>
                <td>デザイン、コーディング</td>
              </tr>
            </table>
          </div><!-- /entry-work-table -->
        </div><!-- /entry-work-body" -->
        <div class="entry-work-btn ">
          <a class="button" href="">一覧に戻る</a>
        </div><!-- /entry-work-btn -->
      </article><!-- /entry -->
    </main><!-- /primary -->
  </div><!-- /inner -->
</div><!-- /content -->

<?php get_footer(); ?>