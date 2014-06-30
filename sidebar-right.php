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
				<a class="csc-textblock_img csc-index_img1" href="<?php print $base_path; ?>overview-video"></a>
				<h3 class="red"><a class="red" href="<?php print $base_path; ?>overview-video">Video Overview</a></h3>
				<p>
					Learn more about us in this video.
					<span><a href="<?php print $base_path; ?>overview-video"> WATCH</a></span>
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
				<a class="csc-textblock_img csc-index_img3" style="background-size: cover; background: transparent url(http://childsci.org/firefly/images/fireflylogo2.png) no-repeat right top;" href="http://www.childsci.org/firefly"><img src="http://childsci.org/firefly/images/fireflylogo2.png" style="height:70px;"></a>
				<h3 class="green">
					<a class="green" href="http://www.childsci.org/firefly">Be a Citizen Scientist!</a>
				</h3>
				<p>
					Help track fireflies this summer as part of Operation Firefly<br>
					<span><a href="http://www.childsci.org/firefly">LEARN MORE</a></span>
				</p>
			</div>
			<!-- style="background-size: cover; background: transparent url(http://childsci.org/wp-content/uploads/2014/06/icecream.png) no-repeat right top;" -->
			<div class="csc-textblock_post"> 
				<a class="csc-textblock_img"  href="http://childsci.org/wp-content/uploads/2014/06/CSC_IceCreamScienceInfoSheet.pdf"><img src="http://childsci.org/wp-content/uploads/2014/06/icecream.png" style="height:70px;"></a>
				<h3 class="blue">
					<a class="blue" href="http://childsci.org/wp-content/uploads/2014/06/CSC_IceCreamScienceInfoSheet.pdf" target="_blank">Ice Cream Science</a>
				</h3>
				<p>
					Make ice cream like you saw on Let's Talk Live on News Channel 8<br>
					<span><a href="http://childsci.org/wp-content/uploads/2014/06/CSC_IceCreamScienceInfoSheet.pdf" target="_blank">TRY IT</a></span>
				</p>
			</div>
			
			<!--
			<div class="csc-textblock_post"> 
				<a class="csc-textblock_img csc-index_img3" href="http://wj.la/PxhvQp"></a>
				<h3 class="green">
					<a class="green" href="http://wj.la/PxhvQp">See us on TV</a>
				</h3>
				<p>
					Watch ABC 7 News profile of Children’s Science Center
					<span><a href="http://wj.la/PxhvQp" target="_blank">WATCH</a></span>
				</p>
			</div>
			-->
			<div class="clear"></div>
		</div>
  <?php endif; ?>
  
</div><!-- close sidebar-right -->
