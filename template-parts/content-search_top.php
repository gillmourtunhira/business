<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
	<div>
		<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" class="search_" placeholder="" />
		<input type="submit" id="searchsubmit" value="" class="search_bu" />
	</div>
</form>