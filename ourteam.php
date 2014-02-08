<?php
/*
Template Name: OurTeam
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
				<a href="#staff">Management Team</a> | <a href="#bod">Board of Directors</a> | <a href="#eac">Advisory Board</a>
				</p>
				<br/>
				<p>
				<a name="staff" class="our-team-sub-heading">Management Team</a>
				</p>
				<p>
				<?php 
				$member = new WP_Query(array('post_type' => 'CSCTeamMember', 'category_name' => 'staff', 'orderby' => 'menu_order', 'order' => 'ASC', 'posts_per_page' => -1));
				if ($member->have_posts()) : 
					while($member->have_posts()) : 
						$member->the_post();
						the_content();
						print "<br/>";
					endwhile; 
				endif; 
				?>
				</p>
				<br/>
				<p>
				<a name="bod" class="our-team-sub-heading">Board of Directors</a>
				</p>
				<p>
				<?php 
				$member = new WP_Query(array('post_type' => 'CSCTeamMember', 'category_name' => 'bod', 'orderby' => 'menu_order', 'order' => 'ASC', 'posts_per_page' => -1));
				if ($member->have_posts()) : 
					while($member->have_posts()) : 
						$member->the_post();
						the_content();
						print "<br/>";
					endwhile; 
				endif; 
				?>
				</p>
				<p>
				<a name="eac" class="our-team-sub-heading">Advisory Board</a>
				</p>
				<p>
				<?php 
				$member = new WP_Query(array('post_type' => 'CSCTeamMember', 'category_name' => 'eac', 'orderby' => 'menu_order', 'order' => 'ASC', 'posts_per_page' => -1));

				if ($member->have_posts()) : 
					while($member->have_posts()) : 
						$member->the_post();
						
						the_content();
					endwhile; 
				endif; 
				?>
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
