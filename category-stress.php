<?php get_header(); ?>
<div class="container">
  <div class="row">

    <div class="col-md-3">
      <?php get_sidebar(); ?>
    </div>

    <div class="col-md-9">
      <article class=<?php post_class(); ?>>
        <?php get_template_part( 'StressContents' ); ?>
      </article>
    </div>

  </div> <!-- row -->
</div> <!-- container -->
<?php get_footer(); ?>
