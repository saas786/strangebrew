<article <?php Hybrid\Attr\display( 'entry' ) ?>>

<?php Strangebrew\display_featured_image(); ?>

	<header class="entry__header">
		<?php Hybrid\Post\display_title() ?>
	</header>

	<div class="entry__summary">
		<?php the_excerpt() ?>
	</div>

</article>
