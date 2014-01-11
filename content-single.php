<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php the_post_thumbnail(); ?>
	<header class="entry-header">
		<div class="box-entry-title"><h1 class="entry-title"><?php the_title(); ?></h1></div>
		<div class="box-date"><?php the_date('M d, Y') ?></div>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content( __( 'continue lendo <span class="meta-nav">&rarr;</span>') ); ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ' ) );
				if ( $tags_list ) :
			?>
			<span class="tags-links">
				<?php printf( __( '%1$s'), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
	</footer><!-- .entry-meta -->

</article>
