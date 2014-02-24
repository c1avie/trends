<?php get_header()?>

<!-- content part html -->
<section class="content">
	<div class="main">
		<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
		<?php setPostViews(get_the_ID()); ?>
		<h2><a href="<?php bloginfo('url');?>">首页&gt;&gt;</a><?php the_category(','); ?>&gt;&gt;正文</h2>
		<div class="article">
			<h1><?php the_title(); ?></h1>
			<h3><span>来源：民大青年网</span><span><?php the_tags('作者：', ', ', ''); ?></span><span>编辑：<?php echo the_author_meta('last_name'); ?><?php echo the_author_meta('first_name'); ?></span><span>发布日期：<?php the_time('Y年n月j日') ?>
</span><span>点击：<?php echo getPostViews(get_the_ID()); ?></span></h3>
		
			<?php the_content(); ?>
		
		</div>
		 <?php else : ?>
	    <div class="errorbox">
	        没有文章！
	    </div>
	    
	    <?php endif; ?>
	</div>
	<?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>