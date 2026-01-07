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

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>

                    <!-- entry -->
                    <article class="entry entry-work">

                        <!-- entry-header -->
                        <div class="entry-header">
                            <?php $genre_term = get_the_terms(get_the_ID(), 'genre')[0]; ?>
                            <div class="entry-label"><a href="<?php echo esc_url(get_term_link($genre_term)); ?>"><?php echo esc_html($genre_term->name); ?></a></div>
                            <h1 class="entry-title"><?php the_title(); ?></h1>

                            <div class="entry-img">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail(); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/noimg.png" alt="">
                                <?php endif; ?>
                            </div>
                        </div><!-- /entry-header -->

                        <div class="entry-work-body">
                            <?php the_content(); ?>
                        </div><!-- /entry-work-body" -->

                        <div class="entry-work-btn">
                            <a class="btn" href="<?php echo esc_url(get_post_type_archive_link('work')); ?>">一覧に戻る</a>
                        </div><!-- /entry-work-btn -->
                    </article><!-- /entry -->

                <?php endwhile; ?>
            <?php endif; ?>

        </main><!-- /primary -->

    </div><!-- /inner -->
</div><!-- /content -->

<?php get_footer(); ?>