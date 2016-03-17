<?php get_header(); ?>
<div id="content">
	<div class="container">
		<header class="archive-header">
			<div class="col-1">
				<?php the_archive_title( '<h1>', '</h1>' ); the_archive_description( '<div class="shout">', '</div>' ); ?>
			</div>
		</header>
		<div class="row">
			<div class="col-1">
				<h2>Categories</h2>
			</div>
		</div>
		<div class="category-list">
			<?php
				$subcategories = get_categories('&child_of=4&hide_empty'); // List subcategories of category '4' (even the ones with no posts in them)
				echo '<ul>';
				foreach ($subcategories as $subcategory) {
					echo sprintf('<li><a href="%s">%s <span>'. $subcategory->description . '</span></a></li>', get_category_link($subcategory->term_id), apply_filters('get_term', $subcategory->name));
				}
				echo '</ul>';
			?>
		</div>
		<div class="row">
			<div class="col-1">
			<h2>Latest Posts</h2>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" class="post" role="article">
						<section class="entry-content">
							<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
							<div class="archive-img-thumbnail" style="background-image: url('<?php echo $image[0]; ?>')"></div>
							<div class="section-right">
								<p class="entry-meta">
								<span class="filed-under">Written under: <?php the_category( ' ' ); ?></span> ~
									<?php printf( __( 'Posted on' ).' %1$s',
										/* the time the post was published */
										'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>'
									); ?>
									<span class="tags"><?php the_tags('Tags: ', ', '); ?></span>
								</p>
								<header class="article-header">
									<h2 class="entry-title">
										<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
									</h2>
								</header>
								<p class="intro"><?php echo(get_the_excerpt()); ?></p>
								<p class="btn-holder">
									<a href="<?php the_permalink() ?>" class="btn">Read entry</a>
								</p>
							</div>
						</section>
					</article>
					<?php endwhile; ?>
					<?php bones_page_navi(); ?>
				<?php else : ?>
					<article id="post-not-found" class="hentry cf">
						<header class="article-header">
							<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
						</header>
						<section class="entry-content">
							<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
						</section>
						<footer class="article-footer">
							<p><?php _e( 'This is the error message in the archive.php template.', 'bonestheme' ); ?></p>
						</footer>
					</article>
				<?php endif; ?>
				<!-- /col-1 -->
			</div>
			<!-- /row -->
		</div>
		<div class="twitter-feed">
			<div class="row">
				<div class="col-1">
					<h2><i class="fa fa-twitter"></i> <a href="https://twitter.com/madeinthearcade" target="_blank">Follow me on Twitter</a></h2>
				</div>
			</div>
			<?php echo do_shortcode('[ap-twitter-feed]'); ?>
		</div>
		<!-- /container -->
	</div>
	<!-- /content -->
</div>
<?php get_footer(); ?>
