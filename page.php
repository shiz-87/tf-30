<?php get_header(); ?>

<!-- content -->
<div id="content" class="m_one">
    <div class="inner">

        <!-- primary -->
        <main id="primary">

            <!-- breadcrumb -->
            <?php get_template_part('template-parts/breadcrumb'); ?>
            <!-- /breadcrumb -->

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <!-- entry -->
                    <article class="entry m_page">

                        <!-- entry-header -->
                        <div class="entry-header">
                            <h1 class="entry-title"><?php the_title(); ?></h1><!-- /entry-title -->
                            <div class="entry-img">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail(); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/noimg.png" alt="">
                                <?php endif; ?>
                            </div><!-- /entry-img -->
                        </div><!-- /entry-header -->

                        <!-- entry-body -->
                        <div class="entry-body">
                            <?php the_content(); ?>
                        </div><!-- /entry-body -->

                    </article><!-- /entry -->
                <?php endwhile; ?>
            <?php endif; ?>

        </main><!-- /primary -->

        <?php get_sidebar(); ?>

    </div><!-- /inner -->
</div><!-- /content -->

<?php get_footer(); ?>