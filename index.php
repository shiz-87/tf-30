<?php get_header(); ?>

<!-- pickup -->
<div id="pickup">
    <div class="inner">

        <div class="pickup-items">
            <?php $pickup_query = new WP_Query(
                array(
                    'posts_per_page' => 3,
                    'tag' => 'pickup',
                    'post_type' => 'post',
                )
            );
            ?>

            <?php if ($pickup_query->have_posts()) : ?>
                <?php while ($pickup_query->have_posts()) : $pickup_query->the_post(); ?>
                    <a href="#" class="pickup-item">
                        <div class="pickup-item-img">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail(); ?>
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/noimg.png" alt="">
                            <?php endif; ?>
                            <div class="pickup-item-tag">
                                <?php my_the_post_category(false); ?>
                            </div><!-- /pickup-item-tag -->
                        </div><!-- /pickup-item-img -->
                        <div class="pickup-item-body">
                            <h2 class="pickup-item-title"><?php the_title(); ?></h2><!-- /pickup-item-title -->
                        </div><!-- /pickup-item-body -->
                    </a><!-- /pickup-item -->
                <?php endwhile; ?>
            <?php endif; ?>

        </div><!-- /pickup-items -->

    </div><!-- /inner -->
</div><!-- /pickup -->


<!-- content -->
<div id="content">
    <div class="inner">

        <!-- primary -->
        <main id="primary">

            <!-- entries -->
            <div class="entries">

                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>

                        <!-- entry-item -->
                        <a href="<?php the_permalink(); ?>" class="entry-item">
                            <!-- entry-item-img -->
                            <div class="entry-item-img">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail(); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/noimg.png" alt="">
                                <?php endif; ?>
                            </div><!-- /entry-item-img -->

                            <!-- entry-item-body -->
                            <div class="entry-item-body">
                                <div class="entry-item-meta">
                                    <div class="entry-item-tag">
                                        <?php echo my_the_post_category(false); ?>
                                    </div><!-- /entry-item-tag -->
                                    <time class="entry-item-published" datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d'); ?></time>
                                    <!-- /entry-item-published -->
                                </div><!-- /entry-item-meta -->
                                <h2 class="entry-item-title">
                                    <?php the_title(); ?>
                                </h2><!-- /entry-item-title -->
                                <div class="entry-item-excerpt">
                                    <p><?php the_excerpt(); ?></p>
                                </div><!-- /entry-item-excerpt -->
                            </div><!-- /entry-item-body -->
                        </a><!-- /entry-item -->

                    <?php endwhile; ?>
                <?php endif; ?>

            </div><!-- /entries -->

            <!-- pagination -->
            <?php get_template_part('template-parts/pagination'); ?>
            <!-- /pagination -->

        </main><!-- /primary -->

        <?php get_sidebar(); ?>

    </div><!-- /inner -->
</div><!-- /content -->

<?php get_footer(); ?>