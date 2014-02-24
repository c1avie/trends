<?php get_header(); ?>

<!-- content part html -->
<section class="content">
	<!-- line1 part html -->
	<div class="line" id="line1">
		<div class="banner grid1">
			<div class="banner-img">
				<?php
	    			$posts = get_posts('numberposts=4&cat=4');
	    			foreach($posts as $post) {
            			setup_postdata($post);
            			echo '<a href="' . get_permalink() . '"><img class="nodisplay" src="' . catch_that_image() . '" alt="' . get_the_title() . '"' . ' title="' . get_the_title() . '" />';
	            		echo '</a>';
        			}
        			$post = $posts[0];
				?>
			</div>
			<div class="banner-nav">
				<div class="banner-change">
					<?php
		    			$posts = get_posts('numberposts=4&cat=4');
		    			foreach($posts as $post) {
	            			setup_postdata($post);
	            			echo '<span class="banner-word nodisplay">' . get_the_title() . '</span>';
	        			}
	        			$post = $posts[0];
					?>
				</div>

				<span class="banner-trigger">
					<a href="#" class="trigger img-curr">1</a>
					<a href="#" class="trigger">2</a>
					<a href="#" class="trigger">3</a>
					<a href="#" class="trigger">4</a>
				</span>
			</div>
		</div>
		<div class="news grid2">
			<h2 class="news-title title">要闻快递</h2>
			<div class="news-details">
				<?php
        			$posts = get_posts('numberposts=2&cat=2');
        			foreach($posts as $post) {
            			setup_postdata($post);
            			echo '<div><h3 class="news-details-title">' . get_the_title() . '</h3><p><a href="' . get_permalink() . '">';
            			// echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 160,"……");
            			echo get_the_excerpt();
            			echo '</a></p></div>';
        			}
        			$post = $posts[0];
    			?>
			</div>
		</div>
		<div class="mircoblog grid3">
			<iframe width="270" height="305" class="share_self"  frameborder="0" scrolling="no" src="http://widget.weibo.com/weiboshow/index.php?language=&amp;width=270&amp;height=305&amp;fansRow=2&amp;ptype=1&amp;speed=0&amp;skin=1&amp;isTitle=1&amp;noborder=1&amp;isWeibo=1&amp;isFans=0&amp;uid=3211480714&amp;verifier=e02d1a3c&amp;dpc=1"></iframe>
		</div>
	</div>
	<!-- line2 part html -->
	<div class="line" id="line2">
		<div class="notice grid1">
			<h2 class="line2-title title">通知公告</h2>
			<div class="line2-details">
				<!--<?php
        			$posts = get_posts('numberposts=2&cat=3');
        			foreach($posts as $post) {
            			setup_postdata($post);
            			echo '<div><h3>' . get_the_title() . '</h3><p><a href="' . get_permalink() . '">';
            			// echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 130,"……");
            			echo get_the_excerpt();
            			echo '</a></p></div>';
        			}
        			$post = $posts[0];
    			?>-->
    			<ul>
					<?php
	        			$posts = get_posts('numberposts=6&cat=3');
	        			foreach($posts as $post) {
	            			setup_postdata($post);
	            			echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
	        			}
	        			$post = $posts[0];
	    			?>
				</ul>
			</div>
		</div>
		<div class="group grid2">
			<h2 class="line2-title title">最新团讯</h2>
			<div class="line2-details">
				<!--<?php
        			$posts = get_posts('numberposts=2&cat=4');
        			foreach($posts as $post) {
            			setup_postdata($post);
            			echo '<div><h3>' . get_the_title() . '</h3><p><a href="' . get_permalink() . '">';
            			// echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 130,"……");
            			echo get_the_excerpt();
            			echo '</a></p></div>';
        			}
        			$post = $posts[0];
    			?>-->
    			<ul>
					<?php
	        			$posts = get_posts('numberposts=6&cat=4');
	        			foreach($posts as $post) {
	            			setup_postdata($post);
	            			echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
	        			}
	        			$post = $posts[0];
	    			?>
				</ul>
			</div>
		</div>
		<div class="book grid3">
			<h2 class="line2-title title">图说故事</h2>
			<div class="line2-details">
				<?php
	    			$posts = get_posts('numberposts=4&cat=20');
	    			foreach($posts as $post) {
	        			setup_postdata($post);
	        			echo '<dl><dt><a href="' . get_permalink() . '"><img src="' . catch_that_image() . '" alt="' . get_the_title() . '"' . ' title="' . get_the_title() . '" /></a></dt>' . '<dd>' . get_the_title() . '</dd></dl>';
	    			}
	    			$post = $posts[0];
				?>
			</div>
		</div>
	</div>
	<!-- ad1 part html -->
	<div class="ad">
		<a href="http://icat.scuec.edu.cn/Moved/"><img src="<?php bloginfo('template_url'); ?>/images/news-ad1.jpg" alt="青年网专题" title="青年网专题" /></a>
	</div>
	<!-- line3 part html -->
	<div class="line" id="line3">
		<div class="campus grid1">
			<div class="campus-title">
			    <ul class="campus-menu">
			       <li>校园生活</li>
			       <li>缤纷团体</li>
			       <li>风采院系</li>
			    </ul>
			</div>
			<div class="campus-details">
			    <div class="campus-layout">
			  		<ul>
						<?php
		        			$posts = get_posts('numberposts=6&cat=15');
		        			foreach($posts as $post) {
		            			setup_postdata($post);
		            			echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
		        			}
		        			$post = $posts[0];
		    			?>
					</ul>
				</div>
			   	<div class="campus-layout">
			   		<ul>
						<?php
		        			$posts = get_posts('numberposts=6&cat=16');
		        			foreach($posts as $post) {
		            			setup_postdata($post);
		            			echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
		        			}
		        			$post = $posts[0];
		    			?>
					</ul>
			   	</div>
			    <div class="campus-layout">
			    	<ul>
						<?php
		        			$posts = get_posts('numberposts=6&cat=19');
		        			foreach($posts as $post) {
		            			setup_postdata($post);
		            			echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
		        			}
		        			$post = $posts[0];
		    			?>
					</ul>
			    </div>
			</div>
		</div>
		<div class="volunteer grid2">
			<div class="volunteer-title">
			    <ul class="volunteer-menu">
			       <li>志愿服务</li>
			       <li>社会实践</li>
			    </ul>
			</div>
			<div class="volunteer-details">
			    <div class="volunteer-layout">
			    	<ul>
				  		<?php
		        			$posts = get_posts('numberposts=4&cat=6');
		        			foreach($posts as $post) {
		            			setup_postdata($post);
		            			echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
		        			}
		        			$post = $posts[0];
	    				?>
    				</ul>
				</div>
			   	<div class="volunteer-layout">
			   		<ul>
						<?php
		        			$posts = get_posts('numberposts=4&cat=17');
		        			foreach($posts as $post) {
		            			setup_postdata($post);
		            			echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
		        			}
		        			$post = $posts[0];
		    			?>
					</ul>
			   	</div>
			</div>
			
		</div>
		<div class="focus grid3">
			<h2 class="line-title title">外媒聚焦</h2>
			<ul>
				<?php
        			$posts = get_posts('numberposts=6&cat=7');
        			foreach($posts as $post) {
            			setup_postdata($post);
            			echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
        			}
        			$post = $posts[0];
    			?>
			</ul>
		</div>
	</div>
	<!-- line4 part html -->
	<div class="line" id="line4">
		<div class="youth grid1">
			<h2 class="line-title title">青年视角</h2>
			<div class="youth-details">
				<?php
	    			$posts = get_posts('numberposts=2&cat=8');
	    			foreach($posts as $post) {
	        			setup_postdata($post);
	        			echo '<div class="youth-details-list"><img src="' . catch_that_image() . '" alt="' . get_the_title() . '"' . ' title="' . get_the_title() . '" /><p><a href="' . get_permalink() . '">';
	            		echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 80,"……");
	            		// echo get_the_excerpt();
	            		echo '</a></p></div>';
	    			}
	    			$post = $posts[0];
				?>
			</div>
		</div>
		<div class="pioneer grid2">
			<h2 class="line-title title">先锋专访</h2>
			<ul>
				<?php
        			$posts = get_posts('numberposts=6&cat=9');
        			foreach($posts as $post) {
            			setup_postdata($post);
            			echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
        			}
        			$post = $posts[0];
    			?>
			</ul>
		</div>
		<div class="subject grid3">
			<h2 class="line-title title">精彩专题</h2>
			<ul>
				<?php
        			$posts = get_posts('numberposts=6&cat=10');
        			foreach($posts as $post) {
            			setup_postdata($post);
            			echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
        			}
        			$post = $posts[0];
				?>
			</ul>
		</div>
	</div>
	<!-- ad2 part html -->
	<div class="ad">
		<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/news-ad2.jpg" alt="青年网专题" title="青年网专题" /></a>
	</div>
	<!-- line5 part html -->
	<div class="line" id="line5">
		<div class="literature grid1">
			<h2 class="line-title title">文艺泛舟</h2>
			<ul>
				<?php
        			$posts = get_posts('numberposts=4&cat=18');
        			foreach($posts as $post) {
            			setup_postdata($post);
            			echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
        			}
        			$post = $posts[0];
    			?>
			</ul>
		</div>
		<div class="fouthyear grid2">
			<h2 class="line-title title">&lt;&lt;大学四年&gt;&gt;</h2>
			<div class="fouthyear-details">
				<?php
	    			$posts = get_posts('numberposts=1&cat=21');
	    			foreach($posts as $post) {
	        			setup_postdata($post);
	        			echo '<img src="' . catch_that_image() . '" alt="' . get_the_title() . '"' . ' title="' . get_the_title() . '" /><p><a href="' . get_permalink() . '">';
	            		echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 120,"……");
	            		// echo get_the_excerpt();
	            		echo '</a></p>';
	    			}
	    			$post = $posts[0];
				?>
			</div>
		</div>
		<div class="download grid3">
			<h2 class="line-title title">下载专区</h2>
			<ul>   
				<?php
        			$posts = get_posts('numberposts=4&cat=11');
        			foreach($posts as $post) {
            			setup_postdata($post);
            			echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
        			}
        			$post = $posts[0];
    			?>
			</ul>
		</div>
	</div>
	<!-- scene part html -->
	<div class="scene">
		<div class="scene-left"><img src="<?php bloginfo('template_url'); ?>/images/scene-left.png" alt="向左" title="向左" /></div>
		<div class="scene-nav">
	     	<div class="scene-nav-inner">
	     		<?php
	    			$posts = get_posts('numberposts=8&cat=13');
	    			foreach($posts as $post) {
	        			setup_postdata($post);
	        			echo '<div class="scene-array"><a href="' . get_permalink() . '"><img src="' . catch_that_image() . '" alt="' . get_the_title() . '"' . ' title="' . get_the_title() . '" />';
	            		echo '</a></div>';
	    			}
	    			$post = $posts[0];
				?>
			</div>
		</div>
		<div class="scene-right"><img src="<?php bloginfo('template_url'); ?>/images/scene-right.png" alt="向右" title="向右" /></div>
	</div>
</section>
<?php get_footer() ?>