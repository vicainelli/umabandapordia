<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a>
	<header class="entry-header">
		<div class="box-entry-title"><h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1></div>
		<div class="box-date"><?php the_date('M d, Y') ?></div>
	</header><!-- .entry-header -->
</article>
