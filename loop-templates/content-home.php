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
		    <div class="col-md-6">
		      <div class="text-block left">
		          <h2 id="people">People</h2>        
		      </div>
		    </div>
		    <div class="col-md-6">
		     <div class="text-block left">
		          <h2 id="participate">Participate</h2> 
		       <p>Call to action. Contact or something like that.</p>
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
		    <div class="col-md-3">      
		            <!-- use the  #filter filter -->
		      <div class="bio holder">
		            <img src="https://dlinq.middcreate.net/wp-content/uploads/2021/07/Woodward_Tom_325_420.jpg"  alt="Blurred bio image.">
		      </div>  
		              <h3>Tom Woodward</h3>
		    </div>
		      <div class="col-md-3">
		        <div class="bio holder">
		            <img src="https://dlinq.middcreate.net/wp-content/uploads/2021/07/Woodward_Tom_325_420.jpg"  alt="Blurred bio image.">        
		        </div>     
		        <h3>Tom Woodward</h3>
		      </div>
		        <div class="col-md-3">
		        <div class="bio holder">
		            <img src="https://dlinq.middcreate.net/wp-content/uploads/2021/07/Woodward_Tom_325_420.jpg"  alt="Blurred bio image.">
		        </div>  
		        <h3>Tom Woodward</h3>
		      </div>    
		          <div class="col-md-3">
		        <div class="bio holder">
		            <img src="https://dlinq.middcreate.net/wp-content/uploads/2021/07/Woodward_Tom_325_420.jpg"  alt="Blurred bio image.">
		        </div> 
		       <h3>Tom Woodward</h3>
		      </div>
		    </div>  
		  </div>
		  <!--end row-->

	

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_edit_post_link(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
