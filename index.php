<?php get_header(); ?>

	<?php /*if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<p><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></p>

				<?php the_content('Read the rest of this entry &raquo;'); ?>

				<p><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
			</div>

		<?php endwhile; ?>
		
		<ul>
			<li><?php next_posts_link('&laquo; Older Entries') ?></li>
			<li><?php previous_posts_link('Newer Entries &raquo;') ?></li>
		</ul>
		
	<?php else : ?>

		<h2>Not Found</h2>
		<p>Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; */?>
	<div class="content" id="indexContent">
		<div id="conteudo">
			<p>
				<object width="860" height="200">
					<param name="movie" value="<?php bloginfo('stylesheet_directory'); ?>/style/swf/topo_header.swf" />
					<param name="wmode" value="transparent" />
					 <param name="wmode" value="transparent">  
					<embed wmode="transparent" src="<?php bloginfo('stylesheet_directory'); ?>/style/swf/topo_header.swf" type="application/x-shockwave-flash" width="860" height="200" />
				</object>
			</p>
		</div>
		<div id="sidebar">
			<?php get_sidebar(); ?>
		</div>
	</div>

<?php get_footer(); ?>