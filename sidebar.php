<div id="fixedbox">
    <nav class="navbar">
        <h2>カテゴリー</h2>
        <?php $defaults=[
                'menu_class' => 'list-group'
        ];
        wp_nav_menu($defaults); ?>
    </nav>
    <div class="navbar">
        <h2>目次</h2>
        <ul class="list-group">
            <?php
            if (is_front_page()) {$indexes = topIndex();}
            if (is_category('about')) {$indexes = aboutIndex();}
            if (is_category('stress')) {$indexes = stressIndex();}
            if (is_category('tensile')) {$indexes = tensileIndex();}
            if (is_category('twist')) {$indexes = twistIndex();}
            if (is_category('bend')) {$indexes = bendIndex();}

            foreach ($indexes as $index) {
                echo "<li class=\"list-group-item\"><a>".$index."</a></li>";
            }
            ?>
        </ul>
    </div>
</div>