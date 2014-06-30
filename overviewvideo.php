<?php
/*
Template Name: OverviewVideo
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
				<iframe width="560" height="315" src="//www.youtube.com/embed/vkBwgcqMRKU" frameborder="0" allowfullscreen></iframe>
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
