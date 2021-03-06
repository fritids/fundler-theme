<?php get_header(); ?>
<div class="bigcontainer4">
	<div class="container">
		<div id="content">
			<div id="inner-content" class="wrap clearfix">
				<div class="blog_post">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
							<div class="blog_post_single_img">
								<?php 
								if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
										the_post_thumbnail('');
									} 
								?>
							</div>
							<div class="blog_post_single_databg"><h2 class="blog_post_single_title_1"><?php the_title(); ?></h2>
										<div class="blog_post_single_data"><?php
										printf(__('by <span class="author">%3$s</span>', 'fundler'), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), fundler_get_the_author_posts_link(), get_the_category_list(', '));
									?></div>
									</div>

								<section class="entry-content clearfix" itemprop="articleBody">
									<?php the_content(); ?>
							</section> <!-- end article section -->

								<div class="blog_post_single_data">
									<?php the_tags('<p class="tags"><span class="tags-title">' . __('Tags:', 'fundler') . '</span> ', ', ', '</p>'); ?>

								</div>


							</article> <!-- end article -->

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry clearfix">
										<header class="article-header">
											<h1><?php _e("Oops, Post Not Found!", "fundler"); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "fundler"); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e("This is the error message in the page.php template.", "fundler"); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div> 
						<div class="blog_sidebar">
							<?php get_sidebar(); ?>
						</div>
				</div> <!-- end #inner-content -->
			</div> <!-- end #content -->
	</div>
</div>

<?php get_footer(); ?>