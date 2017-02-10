<?php
/**
 * The template for displaying all pages.
 *
 * @package Kage
 */
 get_header(); ?>
 <?php while (have_posts()) : the_post(); ?>
  		<div id="content">
			<div class="pagetitle pagetitle_blog">
				<div class="container">
					<div class="gutter clearfix">
						<h5><?php the_title(); ?></h5>
					</div>
				</div>	
			</div>
			<div class="container">
				<div class="sidebar_right clearfix">
					<section class="pagesection">
						<div class="gutter">
							<article class="singlepost clearfix">
								<?php the_content(); ?>
								<div class="clear"></div>
								<hr class="space25">
								<p><?php posts_nav_link(); ?></p>
								<?php comments_template(); ?>
								<?php kage_paginate_page(); ?> 
							</article>
						</div>
					</section>
					<?php  get_sidebar(); ?>
				</div>
			</div>
		</div>
<?php endwhile; ?>		
<?php get_footer(); ?>