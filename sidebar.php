<!-- secondary -->
<aside id="secondary">
    <?php if (is_active_sidebar('sidebar-widget')) : ?>
        <?php dynamic_sidebar('sidebar-widget'); ?>
    <?php endif; ?>

    <!-- widget -->
    <div class="widget widget_search">
        <div class="widget-title">検索</div>
        <!-- search-form -->
        <form method="get" class="search-form" action="#">
            <input type="search" class="search-field" value="" placeholder="キーワード" name="s" id="s">
            <button type="submit" class="search-submit"><i class="fas fa-search"></i></button>
        </form><!-- /search-form -->
    </div><!-- /widget -->

</aside><!-- secondary -->