<?php
/*
Template Name: VolunteerHotList
*/
?>

<?php
$base_path = get_base_path();

get_page_properties();
$props = $GLOBALS['page_properties'];
?>

<?php get_header(); ?>

<div id="main">

	<?php get_sidebar('left'); ?>
	  
  <div id="content">

    <div class="csc-content">
		  <div>
		    <h1 class="<?php print $props->pageColor; ?> csc-title"><?php the_title(); ?></h1>
				<p>
				The Children's Science Center leverages volunteers across our organization to not only supplement our management team but also to lead essential activities.  Be sure to check out the Volunteer Hot List for specific roles and time-sensitive needs that we need to fill.
				</p>
				<p>
				<?php 
				$hotitem = new WP_Query(array('post_type' => 'CSCVolunteerHotList', 'category_name' => '', 'orderby' => 'menu_order', 'order' => 'ASC', 'posts_per_page' => -1));
				if ($hotitem->have_posts()) : 
					while($hotitem->have_posts()) : 
						$hotitem->the_post();
						the_content();
						print "<br/>";
					endwhile; 
				endif; 
				?>
				</p>
				<p>
				Your first step to becoming a volunteer is to complete the <a href="https://www.volunteermatters.net/vm/SelfRegister.do?owner=thecsc" target="_blank">Volunteer Application</a>. If you have specific questions, please <a href="mailto:newvolunteer@childsci.org">contact us</a>.
				</p>
				<p>
				<a href="https://www.volunteermatters.net/vm/SelfRegister.do?owner=thecsc" target="_blank" border="0"><img src="<?php print get_image_path(); ?>volunteer_app.png"/></a>
				</p>
			</div>
		</div>
		<br/><br/>
  </div> <!-- close content -->

  <?php get_sidebar('right'); ?>

</div> <!-- close main -->

<br/><br/>

<div id="delimiter"></div>

<?php get_footer(); ?>
