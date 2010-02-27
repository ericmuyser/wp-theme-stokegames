<div id="menu">
<center>
<div id="menu-t"></div>
		<ul>
			<?php wp_list_pages('title_li=<h2></h2>' ); ?>

			<li><h2>Archives</h2>
				<ul>
				<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</li>

			<?php wp_list_categories('show_count=0&title_li=<h2>Categories</h2>'); ?>
		</ul>
		<ul>
			<?php if ( is_home() || is_page() ) { ?>
				<?php wp_list_bookmarks(); ?>
			<?php } ?>
		</ul>
<br />
<form role="search" method="get" id="searchform" action="/" >
	<input type="text" value="" name="s" id="s" />
	<input type="submit" id="searchsubmit" value="Search" />
</form>

<div id="menu-b"></div>
</center>
</div>

