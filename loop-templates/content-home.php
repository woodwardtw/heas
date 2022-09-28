<?php
/**
 * Partial template for content in home.php
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->


	<div class="entry-content">
		<div class="row">
		    <div class="col-md-6">
		      <div class="text-block left">
		      	<?php echo heaf_about();?>
		      	<?php echo heaf_positions();?>
				<?php echo heaf_questions();?>		      	
		      </div>
		    </div>
		 	<!--end col md 6-->
		    <div class="col-md-6">
		      <div class="text-block right">
		        <h2>Actions</h2>
		        <div id="home-posts"></div>
		      </div>
		    </div>
		  </div>
		  <!--end row-->

	

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_edit_post_link(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
