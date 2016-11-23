<nav class="navbar">
  <div class="container">
    <div class="row">
      <h2>カテゴリー</h2>
      <?php wp_nav_menu( $defaults ); ?>
    </div>
  </div>
</nav>
<div class="index">
  <h2>目次</h2>
  <ul>
    <?php
    if (is_front_page()) {$indexes = topIndex();}
    if (is_category('about')) {$indexes = aboutIndex();}
    if (is_category('stress')) {$indexes = stressIndex();}
    if (is_category('tensile')) {$indexes = tensileIndex();}
    if (is_category('twist')) {$indexes = twistIndex();}
    if (is_category('bend')) {$indexes = bendIndex();}

    foreach ($indexes as $index) {
      echo "<li><a>".$index."</a>";
    }
    ?>
  </ul>
</div>