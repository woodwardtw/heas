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

		<h1 class="entry-title home-title">Home</h1>

	</header><!-- .entry-header -->


	<div class="entry-content">
		<div class="row">
		    <div class="col-md-6">
		      	<?php echo heaf_about();?>
		      	<?php echo heaf_positions();?>
				<?php echo heaf_questions();?>		      	
		    </div>
		 	<!--end col md 6-->
		    <div class="col-md-6">
		      <div class="text-block right">
		        <h2>Actions</h2>
		        <div id="home-posts">
		        	<?php echo heas_list_posts();?>
		        </div>
		      </div>
		    </div>
		 </div>
		  <!--end row-->
		  <div class="row">		    
		    <div class="col-md-6 offset-md-6">
		     <div class="text-block left">
		          <h2 id="participate">Participate</h2> 
		       	  <?php echo get_field('participate');?>
		      </div>
		      <svg xmlns="http://www.w3.org/2000/svg">
		           <filter id="filter" x="0" y="0">
		        <feFlood x="4" y="4" height="2" width="2"/>    
		        <feComposite width="10" height="10"/>
		        <feTile result="a"/>
		        <feComposite in="SourceGraphic" in2="a" operator="in"/>
		        <feMorphology operator="dilate" radius="5"/>
		      </filter>
		      </svg>
		    </div> 		   
		  </div>
		  <!--end row-->
		  <div class="row red">
		  	<div class="col-md-6">
		      <div class="text-block left">
		          <h2 id="people">Members</h2>        
		      </div>
		    </div>
		    <div class="col-md-6"></div>
		  	 <?php echo heas_list_people();?>		   
		  </div>

	

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_edit_post_link(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
