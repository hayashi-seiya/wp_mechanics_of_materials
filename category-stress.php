<?php get_header(); ?>
<div class="container">
  <div class="row">

    <div class="col-md-3">
      <?php get_sidebar(); ?>
    </div>

    <div class="col-md-9">

      <article class=<?php post_class(); ?>>
        <?php get_template_part( 'StressContents' ); ?>
        <h2 class="h2">応力 問題編</h2>
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
          <h3 class="h3"><?php the_title(); ?></h3>
          <div class="probContents"><!-- 問題 -->
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
