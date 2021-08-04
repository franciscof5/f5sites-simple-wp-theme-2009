<!-- SIDEBAR -->
<ul id="subpaginas">
	<p>Sidebar</p>
	<?php
	if($post->post_parent)
	$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
	else
	$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
	if ($children) { ?>
	<ul>
	<?php echo wp_list_pages("include=9, ".$post->post_parent); ?>
	<?php echo "<li class=\"linhacima\"><ul>".$children."</ul></li>"; ?>
	</ul>
	<?php } ?>
</ul>