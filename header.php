<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="共青团,中南民族大学,中南民族大学委员会,青年网,双子新闻,教育网,青年,青年传媒中心,c1avie" />
    <meta name="description" content="共青团中南民族大学委员会青年网,校园新闻发布平台" />
    <meta name="author" content="青年网,网酷工作室,c1avie" /> 
	<title><?php if ( is_home() ) {
        bloginfo('name'); echo " - "; bloginfo('description');
    } elseif ( is_category() ) {
        single_cat_title(); echo " - "; bloginfo('name');
    } elseif (is_single() || is_page() ) {
        single_post_title();
    } elseif (is_search() ) {
        echo "搜索结果"; echo " - "; bloginfo('name');
    } elseif (is_404() ) {
        echo '页面未找到!';
    } else {
        wp_title('',true);
    } ?></title>
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/medium.jpg"/> 
	<!-- css -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<!-- js -->
    <script src="<?php bloginfo('template_url'); ?>/js/html5.js"></script>
    <?php wp_head(); ?>
</head>
<?php flush(); ?>
<body>
<div class="wrapper">
    <!-- title part html -->
    <div class="top">
        <div class="host">主办：<span>共青团中南民族大学委员会青年传媒中心</span></div>
        <div class="home-page">
            <a href="http://icat.scuec.edu.cn/youth/">青年网首页</a>
            <a href="http://icat.scuec.edu.cn/youth/news/wp-login.php?action=register">在线投稿</a>
            <a href="http://www1.scuec.edu.cn/tuanwei/news/">旧版入口</a>
        </div>
    </div>
    <!-- header part html -->
    <header>
        <div class="home-li"><a href="<?php bloginfo('url');?>">首页</a></div>
        <nav>
            <?php wp_nav_menu(array('theme_location'=>'primary','menu_class'=>'nav'));?> 
        </nav>
        <div class="link">
            <ul>
                <li><a href="http://www1.scuec.edu.cn/youth/">团委办公系统</a></li>
                <li><a href="http://e.t.qq.com/mdtw977626493">团委微博</a></li>
                <li><a href="http://e.weibo.com/3211480714/event/117178">青传媒微博</a></li>
                <li><a href="http://weibo.com/u/2557680414">青年网微博</a></li>
                <li><a href="http://e.weibo.com/scuecsu">学生会</a></li>
                <li><a href="http://weibo.com/znmzdxshegongwei">社团</a></li>
                <li><a href="http://e.weibo.com/u/2352415222">校青协</a></li>
                <li><a href="http://e.weibo.com/u/2631428123">艺术团</a></li>
            </ul>
        </div>
    </header>

