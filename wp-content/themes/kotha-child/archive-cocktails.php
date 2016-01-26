<?php get_header(); ?>

	<div class="st-content">
		<div class="container">
			<div class="row">
				<div class="
				<?php if (get_theme_mod( 'kotha_page_layout' ) == 'full') { ?>
					call-md-12
				<?php } else { ?>
					col-md-8
				<?php }
				 ?>
				">	
					<div id="primary" class="content-area">
						<main id="main" class="site-main" role="main">
					
										<?php while ( have_posts() ) : the_post(); 
											$image_1 = get_field("image_1");
											$size = "medium";
											$cocktail_name = get_field('cocktail_name');
											$description = get_field('description');
										$ingredient_1 = get_field('ingredient_1');
										$ingredient_2 = get_field('ingredient_2');
										$ingredient_3 = get_field('ingredient_3');
										$ingredient_4 = get_field('ingredient_4');
										$ingredient_5 = get_field('ingredient_5');
										$instructions = get_field('instructions');
												?>

									<article class="cocktails">

										<aside class="cocktail-sidebar">
											<h3><?php the_title(); ?></h3>
											<h5><?php echo $description; ?></h5>
											<h3>Ingredients: </h3>
											<h5><?php echo $ingredient_1; ?></h5>
											<h5><?php echo $ingredient_2; ?></h5>
											<h5><?php echo $ingredient_3; ?></h5>
											<h5><?php echo $ingredient_4; ?></h5>
											<h5><?php echo $ingredient_5; ?></h5>


											<h3>Instructions: </h3>
											<h5><?php echo $instructions; ?></h5>

										</aside>
											<div class="cocktail-images">
													<a href="<?php the_permalink(); ?>">
													<?php if($image_1)  {
													  echo wp_get_attachment_image( $image_1, $size ); } ?>
													</a>
											</div>	
										</article>	
											<?php endwhile; // end of the loop. ?>
											</main><!-- #main -->
										</div><!-- #primary -->
									</div> <!-- /col -->

<!-- Blogsidebar -->
<?php if (get_theme_mod( 'kotha_page_layout' ) == 'full') {
	
} else {?>
	<div class="col-md-4 col-sm-5">
        <div class="primary-sidebar widget-area" role="complementary">
            <?php dynamic_sidebar('blog-sidebar'); ?>
        </div>
    </div>
<?php }
 ?>
		</div> <!-- /.row -->
		</div> <!-- /.container -->
	</div> <!-- /.st-content -->

<?php get_footer(); ?>