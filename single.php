<?php get_header(); ?>

<div class="container">
  <div class="row">

    <div class="col-md-3">
      <?php get_sidebar(); ?>
    </div>

    <div class="col-md-9">
      <article class=<?php post_class(); ?>>

        <?php if(have_posts()): while(have_posts()): the_post(); ?>

        <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>

        <?php endwhile; endif; ?>
        
      </article>
    </div>

  </div>
</div>

<?php get_footer(); ?>
