
<?php get_header(); ?>

	<div class="st-content">
		<div class="container">

					<div id="primary" class="content-area">
						<main id="main" class="site-main" role="main">
			
		<?php while ( have_posts() ) : the_post(); 
			$size = "full";
			$cocktail_name = get_field('cocktail_name');
			$description = get_field('description');
			$ingredient_1 = get_field('ingredient_1');
		$ingredient_2 = get_field('ingredient_2');
		$ingredient_3 = get_field('ingredient_3');
		$ingredient_4 = get_field('ingredient_4');
		$ingredient_5 = get_field('ingredient_5');
		$instructions = get_field('instructions');
		$image_1 = get_field('image_1');
		$image_2 = get_field('image_2');
		$image_3 = get_field('image_3');
				?>
				
	<article class="cocktails">
	
		<aside class="cocktail-sidebar-single">
			<h2><?php the_title(); ?></h2>
			<h5><?php echo $description; ?></h5>
			<h2>Ingredients: </h2>
			<h5><?php echo $ingredient_1; ?></h5>
			<h5><?php echo $ingredient_2; ?></h5>
			<h5><?php echo $ingredient_3; ?></h5>
			<h5><?php echo $ingredient_4; ?></h5>
			<h5><?php echo $ingredient_5; ?></h5>
		 

			<h2>Instructions: </h2>
			<h5><?php echo $instructions; ?></h5>
			
				<?php the_content(); ?>
		</aside>
			<div class="cocktail-images-single">
				<?php if($image_1) ?>
				<?php echo wp_get_attachment_image( $image_1, $size ); ?>
				<?php if($image_2) ?>
				<?php echo wp_get_attachment_image( $image_2, $size ); ?>
				<?php if($image_3) ?>
				<?php echo wp_get_attachment_image( $image_3, $size ); ?>
			</div>	
		</article>	
			<?php endwhile; // end of the loop. ?>


		</div><!-- #content -->
	</div><!-- #primary -->
</div>
<?php get_footer(); ?>