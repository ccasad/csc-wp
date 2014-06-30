<?php

$base_path = get_base_path();

get_page_properties();
$props = $GLOBALS['page_properties'];
?>

<html>
<head>
  <title>The Children's Science Center</title>
  
  <?php wp_enqueue_script("jquery"); ?>
  <?php wp_enqueue_script('jquery-validation'); ?>
  <?php wp_enqueue_script('csccommon'); ?>
  
	<?php wp_head(); ?>
  
  <link rel="stylesheet" href="<?php print $base_path.'wp-content/themes/csc/'; ?>reset.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?v=1.1">

</head>
<body id="<?php print $props->headerCssClass; ?>">
  <div id="wrapper">
    <div id="csc-wrap">
      <div id="csc-container">
      
				<div id="header">

					<div id="csc-header">
						<div id="csc-header_left">
				
							<div>
								<a id="csc-logo" href="<?php print $base_path; ?>"></a> 
							</div>
							<div class="clear"></div>
							<div id="csc-search-div">
								
							</div>
						</div>
				
						<div class="csc-header_right" id="<?php print $props->headerCssClass; ?>">
							<div id="csc-topnav"> 
								<img src="http://delicious.com/img/logo.png" alt="Delicious" height="10" width="10">
								<a href="http://delicious.com/save" onclick="window.open('http://delicious.com/save?v=5&noui&jump=close&url='+encodeURIComponent(location.href)+'&title='+encodeURIComponent(document.title), 'delicious','toolbar=no,width=550,height=550'); return false;">
									Bookmark this on Delicious
								</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="contact-us">Contact Us</a>&nbsp;|&nbsp;
								<a href="site-map">Site Map</a>&nbsp;|&nbsp;
								<a href="<?php print $base_path; ?>">Home</a>
							</div>
							<div id="csc-nav"> 
								<a class="csc-nav_item" id="csc-<?php print $props->iconsActiveArr['donate']; ?>" href="<?php print $base_path; ?>donate"></a>
								<a class="csc-nav_item" id="csc-<?php print $props->iconsActiveArr['supporters']; ?>" href="<?php print $base_path; ?>supporters"></a>
								<div class="clear"></div>
								<a class="csc-nav_item" id="csc-<?php print $props->iconsActiveArr['kids']; ?>" href="<?php print $base_path; ?>kids-only"></a> 
								<a class="csc-nav_item" id="csc-<?php print $props->iconsActiveArr['vision']; ?>" href="<?php print $base_path; ?>our-vision"></a> 
								<a class="csc-nav_item" id="csc-<?php print $props->iconsActiveArr['programs']; ?>" href="<?php print $base_path; ?>programs"></a> 
								<a class="csc-nav_item" id="csc-<?php print $props->iconsActiveArr['exhibits']; ?>" href="<?php print $base_path; ?>exhibits"></a> 
								<a class="csc-nav_item" id="csc-<?php print $props->iconsActiveArr['about']; ?>" href="<?php print $base_path; ?>our-team"></a> 
								<a class="csc-nav_item" id="csc-<?php print $props->iconsActiveArr['volunteer']; ?>" href="<?php print $base_path; ?>volunteer-how-to"></a> 
								<a class="csc-nav_item" id="csc-<?php print $props->iconsActiveArr['news']; ?>" href="<?php print $base_path; ?>current-news"></a> 
							</div>
						</div>
				
					</div>
			
					<!-- end #csc-header -->
					<div class="clear"></div>
		

				</div> <!-- close header -->
