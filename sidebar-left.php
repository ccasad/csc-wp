<?php
$base_path = get_base_path();

get_page_properties();
$props = $GLOBALS['page_properties'];
?>

<div id="sidebar-left">
  
  <?php 
  if ($props->leftMenuId) {
  	print wp_nav_menu(array('menu' => $props->leftMenuId, 'container_class' => 'csc-left-menu'));
  }
  
  if ($props->displaySecondaryMenu) {
		print '<br/><hr/><br/>';
		print wp_nav_menu(array('menu' => 'SecondarySidebarMenu', 'container_class' => 'csc-left-menu2'));
	}
	?>
	
	<?php if ($props->displayTakeVirtualTour) : ?>
		<div class="csc-column">
			<div>
				<div class="csc-column-in">
					<div class="csc-column-in2">
						<strong class="green">Take a Virtual Tour</strong>
							<p><span style="color:rgb(51, 51, 51)">Join us for an exciting look at the Children's Science Center at one of our upcoming Virtual Tours in Herndon. &nbsp;<a href="<?php print $base_path; ?>news-virtual-tours">READ MORE</a></span></p>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
  
  <?php if ($props->displayDonateSidebarItem) : ?>
  	<div class="csc-column">
			<div id="csc-column-donate">
				<form name="PrePage" method="post" action="https://Simplecheckout.authorize.net/payment/CatalogPayment.aspx"> 
					<input type="hidden" name="LinkId" value ="4c530103-4313-4e4a-a602-8b8c38ac4b26" /> 
					<input type="image" src="//content.authorize.net/images/donate-blue.gif" style="width:135px; height:38px; position:relative; top:-15px; left:-65px; border:none;"/> 
				</form>
				
				<!--
				<form action="https://checkout.google.com/cws/v2/Donations/510986365490407/checkoutForm" id="BB_BuyButtonForm" method="post" name="BB_BuyButtonForm" onsubmit="return csc_validate_google_checkout_amount(this.item_price_1)">
					<input name="item_name_1" type="hidden" value="Donate to the Children's Science Center Today!">
					<input name="item_description_1" type="hidden" value="Help fund the Children's Science Center">
					<input name="item_quantity_1" type="hidden" value="1">
					<input name="item_currency_1" type="hidden" value="USD">
					<input name="item_is_modifiable_1" type="hidden" value="true">
					<input name="item_min_price_1" type="hidden" value="0.01">
					<input name="item_max_price_1" type="hidden" value="25000.0">
					<input name="_charset_" type="hidden" value="utf-8">
					<div id="csc-donate-outer-div">
						<div id="csc-donate-textbox-div">$ <input id="item_price_1" class="csc-donate-textbox" name="item_price_1" onfocus="this.value='';" size="11" type="text" value="Enter Amount"></div>
						<div> &nbsp;<input alt="Donate" src="<?php print get_image_path(); ?>donate.gif" type="image" class="google-donate-image"></div>
					</div>
				</form>	
				-->
			</div>
		</div>
	<?php endif; ?>
	
</div><!-- close sidebar-left -->
