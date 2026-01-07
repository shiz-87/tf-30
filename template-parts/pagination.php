<?php if (paginate_links()) : ?>
    <div class="pagination">
        <?php
        echo paginate_links(
            array(
                'end_size' => 1,
                'mid_size' => 1,
                'prev_next' => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
                'prev_text' => '<i class="fas fa-angle-left"></i>',
                'next_text' => '<i class="fas fa-angle-right"></i>',
            )
        );
        ?>
    </div>
<?php endif; ?>