<?php get_header(); ?>
<div class="container">
  <div class="row">

    <div class="col-md-3">
      <?php get_sidebar(); ?>
    </div>

    <div class="col-md-9">

      <article class=<?php post_class(); ?>>
        <!-- 説明 -->
        <h2 class="h2">応力 説明</h2>
        <h3 class="h3" id="01">応力とは</h3>
        <div class="introContents">
          <p><!-- 本文のテキストは左端に寄せる -->
ああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ
ああああああああああああああああああ

あああ

あああ

ああ
あ



ああ
          </p><!-- 本文のテキストは左端に寄せる -->
        </div><!-- 説明 -->

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
