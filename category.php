<?php get_header()?>

<!-- content part html -->
<section class="content">
	<div class="main">
		<h2><a href="<?php bloginfo('url');?>">首页&gt;&gt;</a><?php the_category(','); ?></h2>
		<div class="line">
			<?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
			<ul>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			</ul>
		<?php endwhile; ?>
		<?php endif; ?>
		</div>
		<div class="paging"><?php par_pagenavi(5); ?></div>
	</div>
	<?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>