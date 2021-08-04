<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	
	<title>
		<?php if (is_home()) { echo bloginfo('name');
		} elseif (is_404()) {
		echo '404 Not Found';
		} elseif (is_category()) {
		echo 'Category:'; wp_title('');
		} elseif (is_search()) {
		echo 'Search Results';
		} elseif ( is_day() || is_month() || is_year() ) {
		echo 'Archives:'; wp_title('');
		} else {
		echo wp_title('');
		}
		?>
	</title>

	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
	<meta name="description" content="<?php bloginfo('description') ?>" />
	<?php if(is_search()) { ?>
	<meta name="robots" content="noindex, nofollow" /> 
	<?php }?>

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_head(); ?>

</head>

<body>
<!-- ClickTale Top part -->
<script type="text/javascript">
var WRInitTime=(new Date()).getTime();
</script>
<!-- ClickTale end of Top part -->
<div id="header">
	<a href="/index.php"><img src="<?php bloginfo('stylesheet_directory'); ?>/style/images/f5sites-logo-100x250.png" alt="F5 Sites (Logotipo)" /></a>
</div>
<div id="menu">
	<ul>
		<li><a href="<?php echo get_settings('home'); ?>/" title="Home">Home</a></li>
		<?php
		wp_list_pages('sort_column=menu_order&depth=1&title_li=&echo=1');
		?>
	</ul>
	<!--
		<li class="destaque"><a href="/index.php">Home</a></li>
		<li><a href="/blog/">Blog</a></li>
		<li><a href="/clientes.php">Clientes</a></li>
		<li><a href="/portfolio.php">Portfolio</a></li>
		<li>
		<li><a href="/servicos.php">Servi&ccedil;os</a></li>
		<a href="/index.php">Projetos</a></li>
		<li><a href="/index.php">Advergames</a></li>
		<li><a href="/promocao.php">Promo&ccedil;&atilde;o</a></li>
		<li><a href="/vtiger.php">vTigerCRM</a></li>
		<li><a href="/contato.php">Contato</a></li>
	>-->
</div>