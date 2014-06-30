<?php
/*
Template Name: ManagementTeam
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
				<p>
				<span class="our-team-sub-heading">STEM Educators</span>
				</p>
				<p>
				<?php 
				$member = new WP_Query(array('post_type' => 'CSCTeamMember', 'category_name' => 'stemedu', 'orderby' => 'menu_order', 'order' => 'ASC', 'posts_per_page' => -1));
				if ($member->have_posts()) : 
					while($member->have_posts()) : 
						$member->the_post();
						the_content();
						//print "<br/>";
					endwhile; 
				endif; 
				?>
				</p>
				<p>Our management team is supported by more than 300 volunteers serving in all aspects of operations including, marketing, volunteer management, fundraising and educational outreach.</p>
				<br/><br/>
			</div>
		</div>
		<br/><br/>
  </div> <!-- close content -->

  <?php get_sidebar('right'); ?>

</div> <!-- close main -->

<br/><br/>

<div id="delimiter"></div>

<?php get_footer(); ?>
