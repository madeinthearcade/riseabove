<?php get_header(); ?>
		<div id="content">
			<div class="container">
				<div class="row">
					<div class="col-1">
						<?php if (have_posts()) : while (have_posts()) : the_post(); // start the loop ?>
							<?php if ( has_post_thumbnail() ) {
								the_post_thumbnail('full');
							} ?>
							<?php the_content(); ?>
							<?php endwhile; else : ?>
								<article id="post-not-found" class="hentry">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
									</section>
									<footer class="article-footer">
										<p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
									</footer>
								</article>
							<?php endif; ?>
						<!-- /col-1 -->
					</div>
					<!-- /row -->
				</div>
				<?php if(is_front_page() ) { ?>
					<div class="row" id="about-me">
						<div class="col-2">
							<div class="shout">
								<div id="big-circle" data-parallax='{"y" : -80}'></div>
								<?php the_field('about_me'); ?>
							</div>
						</div>
						<div class="col-2">
							<p>
								<?php the_field('paragraph_one'); ?>
							</p>
							<p class="quote" >
								<?php the_field('big_quote'); ?> <span>~ <?php the_field('quote_by'); ?></span>
							</p>
							<p>
								<?php the_field('paragraph_two'); ?>
							</p>
						</div>
						<!-- /row -->
					</div>
					<?php 
					$posts = get_field('recent_projects');
					if( $posts ): ?>
					<div class="row recent-projects-holder" id="recent-projects">
						<div class="col-1">
							<h2>Recent Projects</h2>
							<ul class="recent-projects">
								<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
								<?php setup_postdata($post); ?>
								<li class="wow fadeIn" data-wow-delay="0.2s" data-wow-duration="1.5s">
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
				<?php } //end if front page ?>
				<!-- /content container -->
			</div>

			<?php if(is_front_page() ) { ?>
			<div class="col-1">
				<?php
				$args = array(
					'numberposts' => 1,
					'cat' => 4
					);
				$posts=get_posts($args);
				if ($posts) {
					foreach($posts as $post) {
						setup_postdata($post);
						?>
						<article class="post">
							<div class="article-left">
								<h2><a href="<?php echo home_url() ?>/category/journal">Journal</a></h2>
								<header class="article-header">
									<h5 class="entry-title">
										<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
									</h5>
								</header>
								<section class="entry-content">
									<?php the_excerpt(); ?>
									<p class="btn-holder"><a href="<?php the_permalink()?>" class="btn">Read entry</a></p>
								</section>
							</div>
							<div class="blog-img">
								<?php if ( has_post_thumbnail() ) {
									the_post_thumbnail('full');
								} ?>
							</div>
						</article>
					<?php }
				}
				?>
				<!-- /col-1 -->
			</div>
			<?php } //end if front page ?>
			<!-- /content -->
		</div>
<?php get_footer(); ?>