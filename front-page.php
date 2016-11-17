<?php get_header(); ?>

<div class="jumbotron">
	<div class="container">
		<p>
			明治大学生向けのWEBサイトです。
		</p>
		<p><a href="https://oh-o2.meiji.ac.jp/portal/oh-o_meiji/" target="_blank">Oh-o! Meiji</a>はこちら</p>
	</div>
</div>
<div class="container">
  <div class="row">

    <div class="col-md-3">
		<?php get_sidebar(); ?>
    </div>

    <div class="col-md-9">
		<?php get_template_part( "TopContents" ); ?>
    </div>

  </div>
</div>
<?php get_footer(); ?>
