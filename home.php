<?php
/**
 * The home page
 * design: Mahibul Hasan
 * email: hyde.sohag@gmail.com
 * 
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main" class="homepage-article">
				
			<?php 
			
				$categories = get_categories(array('type'=>'post','taxonomy'=>'category'));
								
				foreach($categories as $key=>$cat){
					//$cat_link = get_category_link($cat->term_id);					
					?>
					<article class="home-content">
						<h4 class="home-category-link">
							<a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>">
								<?php echo $cat->name; ?>
							</a>
						</h4>	
					
					<?php
					 									
					$posts = get_posts(array('category'=>$cat->term_id, 'numberposts'=>6, 'orderby'=>'post_date'));
					if($posts) : 
						foreach ($posts as $post){
							 get_template_part( 'home', 'thumbnail' );
							 
						}
					?>
						
						<div style="clear:both"></div>
						
						</article>				
						
					<?php
						
					endif;
				}				
			?>
	
		

			</div><!-- #content -->
		</div><!-- #primary -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
