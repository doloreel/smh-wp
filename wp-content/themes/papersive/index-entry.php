
<div id="post-<?php the_ID(); ?>" <?php post_class('article-preview'); ?>>
	<div class="article-thumb-wrap">
		<?php get_template_part( 'entry', ( is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
	</div>
	<div class="article-preview-txt">
		<div class="article-preview-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a></div>
		<div class="article-preview-line"></div>
		<div class="article-preview-tag"><?php _e( '', 'blankslate' ); ?><?php the_category( ', ' ); ?></div> 
	</div>
</div> 