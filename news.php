<?php
/**
  * Template name: News
 */
get_header(); ?>


	<div id="wrapper">
	<div id="wrapper2">
		<div id="wrapper-bgtop">
			<div id="page">
				<div id="content">
					<div class="post">
						
						<div style="clear: both;">&nbsp;</div>
						<div class="entry">
							  
<div id="main-content" class="main-content">
  
    <?php
        if ( is_front_page() && fifteen_has_featured_posts() ) {
            get_template_part( 'featured-content' );
  
        }
    ?>
  
    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">
			<?php
				$do_not_duplicate = array();
				$categories = get_categories(); 
			  
				foreach ( $categories as $category ) {
				
				$args = array(
					'cat' => $category->term_id,
					'post_type' => 'post',
					'posts_per_page' => '1',
					'post__not_in' => $do_not_duplicate
				);
				
				
			$query = new WP_Query( $args );
  
if ( $query->have_posts() ) { ?>
  
    <section class="<?php echo $category->name; ?> listing">
        <h2>Последнее в <?php echo $category->name; ?>:</h2>
  
        <?php while ( $query->have_posts() ) {
  
				$query->the_post();
			  
				$do_not_duplicate[] = $post->ID;
            ?>
  
            <article id="post-<?php the_ID(); ?>" <?php post_class( 'category-listing' ); ?>>
                <?php if ( has_post_thumbnail() ) { ?>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail( 'thumbnail' ); ?>
                    </a>
                <?php } ?>
  
                <h3 class="entry-title">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h3>
  
                <?php the_excerpt( __( 'Continue Reading <span class="meta-nav">&rarr;</span>', 'twentyfourteen' ) ); ?>
  
            </article>
  
        <?php } ?>
  
    </section>
  
<?php }}
wp_reset_postdata(); ?>
			
			
        </div>
    </div>
</div>
 
						</div>
					</div>
					
					
					<div style="clear: both;">&nbsp;</div>
				</div>
				<!-- end #content -->
				
				<!-- end #sidebar -->
				<div style="clear: both;">&nbsp;</div>
			</div>
			<!-- end #page -->
		</div>
	</div>
</div>
  
  
  
  
	  


</div><!-- #main -->




<?php get_footer(); ?>
</body>
</html>