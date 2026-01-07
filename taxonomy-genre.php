<?php get_header(); ?>

<!-- main-visual -->
<div class="mainvisual">
    <div class="inner">
        <div class="mainvisual-content">
            <div class="mainvisual-title">制作実績</div>
        </div>
    </div><!-- /inner -->
</div><!-- /main-visual -->

<div class="work-breadcrumb">
    <div class="inner">
        <!-- breadcrumb -->
        <?php get_template_part('template-parts/breadcrumb'); ?>
        <!-- /breadcrumb -->
    </div><!-- /inner -->
</div><!-- /work-breadcrumb -->

<!-- content -->
<div id="content" class="content-work">
    <div class="inner">

        <!-- primary -->
        <main id="primary">

            <div class="genre-nav">
                <?php
                // 1. 現在表示しているページの情報を取得
                $obj = get_queried_object();
                ?>

                <div class="genre-nav-link">
                    <a class="<?php if (!is_tax('genre')) echo 'is-active'; ?>" href="<?php echo esc_url(get_post_type_archive_link('work')); ?>">すべて</a>
                </div>

                <?php
                $genre_terms = get_terms('genre', array(
                    'hide_empty' => false, // 空のタームも取得する場合はfalseに設定
                ));
                foreach ($genre_terms as $term) :
                    // 2. 判定ロジック
                    // 現在のオブジェクトが「ターム」であり、かつ「IDが一致する」場合にクラスをつける
                    $active_class = '';
                    if (isset($obj->term_id) && $obj->term_id === $term->term_id) {
                        $active_class = 'is-active';
                    }
                ?>
                    <div class="genre-nav-link"><a class="<?php echo $active_class; ?>" href="<?php echo esc_url(get_term_link($term)); ?>"><?php echo esc_html($term->name); ?></a></div>
                <?php endforeach; ?>

            </div><!-- /genre-nav -->

            <!-- entries -->
            <div class="entries entries-work">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>

                        <a href="<?php the_permalink(); ?>" class="entry-item entry-item-horizontal">
                            <div class="entry-item-img">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail(); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/noimg.png" alt="">
                                <?php endif; ?>
                            </div>
                            <div class="entry-item-body">
                                <div class="entry-item-meta">
                                    <div class="entry-item-tag"><?php echo get_the_terms(get_the_id(), 'genre')[0]->name; ?></div>
                                </div>
                                <div class="entry-item-title"><?php the_title(); ?></div>
                                <div class="entry-item-excerpt"><?php the_excerpt(); ?></div>
                            </div><!-- /entry-item-body -->
                        </a><!-- /entry-item -->
                    <?php endwhile; ?>
                <?php endif; ?>
            </div><!-- /entries -->

            <!-- pagination -->
            <?php get_template_part('template-parts/pagination'); ?>
            <!-- /pagination -->
        </main><!-- /primary -->

    </div><!-- /.inner -->
</div><!-- /.content -->

<?php get_footer(); ?>