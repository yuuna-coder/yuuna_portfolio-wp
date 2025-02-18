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

<section class="w-works">
    <!-- tag -->
    <div class="w-works__inner inner">
        <div class="w-works__tags">
            <div class="w-works__tag">
                <a href="http://yuunaportfolio.s324.xrea.com/?post_type=work">ALL</a>
            </div>
            <div class="w-works__tag">
                <a class="is-active" href="http://yuunaportfolio.s324.xrea.com/?works_category=lp">LP</a>
            </div>
            <div class="w-works__tag">
                <a href="http://yuunaportfolio.s324.xrea.com/?works_category=wordpress">WordPress</a>
            </div>
        </div>
        <!-- content -->
        <div class="w-works__content">
            <div class="w-works__posts">
            <?php
            // WP_Queryで最新のお知らせ3件を取得
            $args = array(
                'post_type'      => 'work',
                'orderby'        => 'date',
                'order'          => 'DESC',
                'tax_query'      => array(
                    array(
                        'taxonomy' => 'works_category',
                        'field'    => 'slug',
                        'terms'    => 'lp',
                    ),
                ),

            );
            $work_query = new WP_Query($args);
            ?>

            <?php if ($work_query->have_posts()) : ?>
                <?php while ($work_query->have_posts()) : $work_query->the_post(); ?>
                <div class="w-works__post">
                    <a href="<?php the_permalink(); ?>">
                        <div class="w-works__post--img">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        </div>
                        <div class="w-works__post--top">
                        <?php
                        $terms = get_the_terms(get_the_ID(), 'works_category');
                        if ($terms && !is_wp_error($terms)) :
                            $term = array_shift($terms);
                            $term_name = esc_html($term->name);
                        ?>
                            <div class="w-works__post--tag"><?php echo $term_name; ?></div>
                        <?php endif; ?>
                            <div class="w-works__post--title"><?php the_title(); ?></div>
                        </div>
                    </a>
                </div>
                
                <?php endwhile; ?>
                <?php
                // クエリをリセットして他のクエリに影響を与えないようにする
                wp_reset_postdata();
                ?>
            <?php else : ?>
                <!-- 投稿が存在しない場合の表示 -->
                <p>投稿はありません。</p>
            <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>