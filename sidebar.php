<nav class="navbar">
  <div class="container">
    <div class="row">
      <h2>カテゴリー</h2>
      <?php
        wp_nav_menu( $defaults );
      ?>
    </div>
  </div>
</nav>
<div class="navbar">
  <h2>目次</h2>
  <ul>
    <li>
      <a href="#01">応力とは</a>
      <!--
      TODO <a>タグのあとのテキストをページごとに動的に出力したい
      参照URL: http://media.tech-salon.com/php-%E3%83%87%E3%83%BC%E3%82%BF%E5%8F%96%E5%BE%97-pregmatch/
      -->
    </li>
  </ul>
</div>
