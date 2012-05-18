<?php
/**
 * designer : Mahibul Hasan Sohag
 * The template for displaying content thumbnail only useage for home page
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
 
?>

	<article id="post-<?php the_ID(); ?>" <?php //post_class(); ?> class="home-content" >
		
		<div class="entry-content">			
						
			<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
			<?php
			
				the_post_thumbnail(array(100,100),array('alt'=>trim(strip_tags( $post->post_title )),'class'=>'alignnone size-thumbnail'));
			?>
			</a>
			<p class="thumbnail_name">
				<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
					<?php the_title(); ?>
				</a>
			</p>	
		</div><!-- .entry-content -->
			
		<?php //edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>
		
	</article><!-- #post-<?php the_ID(); ?> -->
