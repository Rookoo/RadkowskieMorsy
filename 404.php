<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package WP FanZone
 */
?>
<?php get_header(); ?>
<div class="row breadcrumb-container">
	<?php wp_fanzone_breadcrumb(); ?>
</div>
<div class="row">
	<div id="primary" class="content-area col-md-9">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Uups! Strona nie została znaleziona.', 'wp-fanzone' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'Wygląda na to, że w tej lokalizacji nie znaleziono niczego. Możesz skorzystać z wyszukiwarki lub z naszego archiwum.', 'wp-fanzone' ); ?></p>

					<?php get_search_form(); ?>

					<!-- <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

					<?php if ( wp_fanzone_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
					<div class="widget widget_categories">
						<h2 class="widget-title"><?php _e( 'Most Used Categories', 'wp-fanzone' ); ?></h2>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->
					<?php endif; ?> -->

					<?php
						/* translators: %1$s: smiley */
						$archive_content = '<p>' . sprintf( __( 'Spróbuj wyszukać w naszym archiwum miesięcznym. %1$s', 'wp-fanzone' ), convert_smilies( ':)' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
					?>

					<!-- <?php the_widget( 'WP_Widget_Tag_Cloud' ); ?> -->

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->
    <aside id="widget" class="widget-container col-md-3 ">
        <?php get_sidebar(); ?>
    </aside>
</div>
<?php get_footer(); ?>
