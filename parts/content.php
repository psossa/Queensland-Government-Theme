<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 */

?>
<div id="content">
	<div class="article">
		<div class="box-sizing">

			<?php the_title( '<h1>', '</h1>' ); ?>

			<div class="page-options" id="pre-page-options">
				<ul>
					<li><a href="#"><?php esc_html_e( 'Share', 'qldgovt' ); ?></a></li>
					<li><a href="<?php echo esc_url( get_post_comments_feed_link() ); ?>"><?php esc_html_e( 'Subscribe', 'qldgovt' ); ?></a>
						<ul>
							<li><a href="<?php echo esc_url( get_post_comments_feed_link() ); ?>"><?php esc_html_e( 'RSS feed', 'qldgovt' ); ?></a></li>
							<li><a href="<?php echo esc_url( get_post_comments_feed_link( null, 'atom' ) ); ?>"><?php esc_html_e( 'Atom feed', 'qldgovt' ); ?></a></li>
							<!--<li><a href="#">Email newsletter</a></li>-->
						</ul>
					</li>
				</ul>
			</div><!-- .page-options -->
			<div class="section">
				<?php the_content(); ?>
			</div><!-- .section -->

		</div><!-- .box-sizing -->
	</div><!-- .article -->
</div><!-- #content -->
