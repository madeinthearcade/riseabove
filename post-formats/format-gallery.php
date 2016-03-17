<div class="case-study-header">
	<div class="col-1">
		<header>
			<div id="big-circle" data-parallax='{"y" : -80}'></div>
			<h1 itemprop="headline"><?php the_title(); ?></h1>
			<div class="shout">
				<?php the_field('case_study_intro') ?>
			</div>
		</header>
	</div>
</div>
<div class="row">
	<div class="two-thirds-left">
		<article id="post-<?php the_ID(); ?>" role="article" itemscope itemtype="http://schema.org/BlogPosting">
			<?php // end article header ?>
			<section itemprop="articleBody">
				<?php
					// the content (pretty self explanatory huh)
					the_content();
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
	<div class="one-third-right case-study-sidebar">
		<div class="details">
			<h6>Client</h6>
			<?php the_field('project_client') ?>
		</div>
		<div class="details">
			<h6>Role</h6>
			<?php the_field('project_topic') ?>
		</div>
		<div class="details">
			<h6>Agency</h6>
			<?php the_field('project_agency') ?>
		</div>
		<?php 
			$posts = get_field('view_live_site');
			if( $posts ): ?>
			<div class="details last">
				<p class="btn-holder"><a href="<?php the_field('view_live_site'); ?>" class="btn" target="_blank">View live project</a></p>
			</div>
			<?php else: ?> <div class="details last">
				<p class="btn btn-holder">Project Status: In Development</p>
			</div>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
		<!-- /one-third-left -->
	</div>
	<!-- /row -->
</div>
<?php 
$posts = get_field('recent_projects');
if( $posts ): ?>
<div class="row">
	<div class="col-1 recent-projects-holder">
		<h2>Recent Projects</h2>
		<ul class="recent-projects">
			<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
			<?php setup_postdata($post); ?>
			<li>
				<a href='<?php the_permalink() ?>'>
				<?php echo get_the_title( $p->ID ); ?>
				<span class="tags">
					<?php the_field('project_topic') ?>
				</span>
				</a>
			</li>
			<?php endforeach; ?>
		</ul>
		<?php wp_reset_postdata(); ?>
		<!-- /col-1 -->
	</div>
	<!-- /row -->
</div>
<?php endif; //end if have posts from projects?>
