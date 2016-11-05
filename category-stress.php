<?php get_header(); ?>
<div class="container">
  <div class="row">

    <div class="col-md-3">
      <?php get_sidebar(); ?>
    </div>

    <div class="col-md-9">

      <article class=<?php post_class(); ?>>
        <!-- 説明 -->
        <h2 class="h2">応力とひずみ</h2>

        <h3 class="h3" id="01">応力とひぞみとは</h3>
        <div class="introContents">
          <p>機械を設計する際に、仕様を満たし、かつ安全な機械を作るためには、適切な材料・寸法・形状を決めなければならない。<br>その最適な解を導く時に大事な考えとなるのが、この<strong>応力</strong>と<strong>ひずみ</strong>である</p>
        </div>

        <h3 class="h3" id="-">垂直応力と垂直ひずみ</h3>
        <div class="introContents">
          <p>軸に<strong>引張(圧縮)荷重</strong>が作用して入る時に、その軸上の任意の断面に分布している力を、<strong>引張(圧縮)応力</strong>という。またこれらは、面に垂直な方向に働くため、<strong>垂直応力</strong>と呼ばれる。</p>
        </div>

        <!-- 問題 -->
        <h2 class="h2">応力 問題編</h2>
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
          <h3 class="h3"><?php the_title(); ?></h3>
          <div class="probContents">
            <p>
              <?php the_content(); ?>
            </p>
          </div> <!-- 問題 -->
        <?php endwhile; endif; ?>
      </article>
    </div><!-- col-md-9 -->

  </div> <!-- row -->
</div> <!-- container -->
<?php get_footer(); ?>
