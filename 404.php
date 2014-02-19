<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 */
?>

<?php
$base_path = get_base_path();

get_page_properties();
$props = $GLOBALS['page_properties'];
?>

<?php get_header(); ?>

<div id="main">

	<div id="sidebar-left">&nbsp;</div>
	
  <div id="content">

    <div class="csc-content">
		  <div>
		    <h1 class="<?php print $props->pageColor; ?> csc-title"><?php _e('Page Not Found', 'csc'); ?></h1>

				<p>
					<h3><?php _e('The page you are looking for could not be found at this location.', 'csc'); ?></h2>
				</p>
				
			</div>
		</div>
		<br/><br/>
  </div> <!-- close content -->

</div> <!-- close main -->

<br/><br/>

<div id="delimiter"></div>

<?php get_footer(); ?>
