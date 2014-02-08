<?php
$base_path = get_base_path();

get_page_properties();
$props = $GLOBALS['page_properties'];
?>

<div id="sidebar-right">

  <?php if ($props->displayRightSidebar) : ?>
		<div id="csc-rightblock_<?php print $props->rightSidebarId; ?>">
			<p class="<?php print $props->pageColor; ?>">
				<?php print $props->rightSidebarText; ?>
			</p>
		</div>
	<?php elseif ($props->displayRightSidebarFront) : ?>
		<div class="csc-textblock_right" id="csc-rightblock_index">
			<div class="csc-textblock_post"> 
				<a class="csc-textblock_img csc-index_img1" href="<?php print $base_path; ?>current-news"></a>
				<h3 class="red"><a class="red" href="<?php print $base_path; ?>current-news">2013 in Action</a></h3>
				<p>
					See how we inspired a love of STEM learning in 2013.
					<span><a href="http://youtu.be/TCV-Pf4LGt4" target="blank"> WATCH</a></span>
				</p>
			</div>
			<div class="clear"></div>
			<div class="csc-textblock_post"> 
				<a class="csc-textblock_img csc-index_img2" href="<?php print $base_path; ?>donate"></a>
				<h3 class="orange">
					<a class="orange" href="<?php print $base_path; ?>donate">Support
the Museum</a>
				</h3>
				<p>
					Your generous donations will help us provide creative educational experiences for all children. 
					<span><a href="<?php print $base_path; ?>donate">READ MORE</a></span>
				</p>
			</div>
			<div class="clear"></div>
			<div class="csc-textblock_post"> 
				<a class="csc-textblock_img csc-index_img3" href="take_our_survey.html"></a>
				<h3 class="green">
					<a class="green" href="http://www.microsoftstore.com/giving">See us on TV</a>
				</h3>
				<p>
					Watch ABC 7 News profile of Children’s Science Center
					<span><a href="http://wj.la/PxhvQp" target="_blank">WATCH</a></span>
				</p>
			</div>
			<div class="clear"></div>
		</div>
  <?php endif; ?>
  
</div><!-- close sidebar-right -->
