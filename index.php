<?php
/**
 * @package WordPress
 * @subpackage themename
 */

get_header(); ?>

<?php get_sidebar(); ?>

		<div class="content">
			<div id="content">

				<?php get_template_part( 'loop', 'index' ); ?>

			</div><!-- #content -->
		</div><!-- #primary -->


<?php get_footer(); ?>