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

<?php get_footer(); ?>