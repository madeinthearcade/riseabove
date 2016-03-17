<?php
/*
* This is the default post format.
*
* So basically this is a regular post. if you don't want to use post formats,
* you can just copy ths stuff in here and replace the post format thing in
* single.php.
*
* The other formats are SUPER basic so you can style them as you like.
*
* Again, If you want to remove post formats, just delete the post-formats
* folder and replace the function below with the contents of the "format.php" file.
*/
?>
<header class="single-journal-post-page">
	<div class="col-1">
		<div class="header-left">
			<h1 itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>
			<p class="byline entry-meta vcard">
				<span class="filed-under">Written under: <?php the_category( ' ' ); ?></span> ~
				<?php printf( __( 'Posted on' ).' %1$s',
					/* the time the post was published */
					'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>'
				); ?>
			</p>
		</div>
		<div class="header-right">
			<figure class="single-article-featured-img">
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail('full');
				} ?>
				<figcaption>
					<?php if ( $caption = get_post( get_post_thumbnail_id() )->post_excerpt ) : ?>
						<?php echo $caption; ?>
					<?php endif; ?>
				</figcaption>
			</figure>
		</div>
	</div>
</header>
<?php // end article header ?>
<div class="row">
	<div class="two-thirds-left">
		<article id="post-<?php the_ID(); ?>" role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">
			<section itemprop="articleBody">
				<?php the_content();
					/*
					* Link Pages is used in case you have posts that are set to break into
					* multiple pages. You can remove this if you don't plan on doing that.
					*
					* Also, breaking content up into multiple pages is a horrible experience,
					* so don't do it. While there are SOME edge cases where this is useful, it's
					* mostly used for people to get more ad views. It's up to you but if you want
					* to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
					*
					* http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
					*
					*/
					wp_link_pages( array(
						'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
						'after'       => '</div>',
						'link_before' => '<span>',
						'link_after'  => '</span>',
						) );
				?>
			</section> 
			<?php // end article section ?>
			<?php //comments_template(); ?>
		</article>
		<?php // end article ?>
		<!-- /two-thirds-left -->
	</div>
	<div class="one-third-right">
		<div class="category-list">
			<h6>Categories</h6>
			<ul>
			<?php wp_list_categories('title_li=&child_of=4&hide_empty&show_count=1'); ?> <!--/ &hide_empty shows empty catgories -->
			</ul>
		</div>
		<!-- /one-third-right -->
	</div>
	<!-- /row -->
</div>
