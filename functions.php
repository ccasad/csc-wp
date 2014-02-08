<?php

add_theme_support('menus');
add_theme_support('widgets');

wp_register_script('jquery-validation', get_template_directory_uri().'/js/jquery-validation-1.11.1/dist/jquery.validate.js');
wp_register_script('csccommon', get_template_directory_uri().'/js/common.js');
    
function my_login_logo() {
	$template_path = get_bloginfo('template_directory');
	$html = <<<EOL
	<style type="text/css">
			body.login div#login h1 a {
				background-image: url({$template_path}/images/header-logo.gif);
				padding-bottom: 30px;
				background-size: 180px 220px;
				position: relative;
				top: -20px;
				height: 160px;
			}
			body.login {
				position: relative;
				top: -70px;
			}
	</style>
EOL;
	echo $html;
}
add_action('login_enqueue_scripts', 'my_login_logo');
    
$props = new PageProperties();

$GLOBALS['page_properties'] = $props;

class PageProperties {
	public $iconsActiveArr = array('kids'=>'ko','visitors'=>'vs','educators'=>'ed','exhibits'=>'ex','about'=>'au','news'=>'cn','supporters'=>'su','memberships'=>'ms','donate'=>'hd');
	public $headerCssClass = 'csc-index';
	public $leftMenuId = '';
	public $displaySecondaryMenu = true;
	public $rightSidebarId = '';
	public $rightSidebarText = '';
	public $displayRightSidebar = true;
	public $displayRightSidebarFront = false;
	public $pageColor = 'green';
	public $displayTakeVirtualTour = false;
	public $displayDonateSidebarItem = false;
	
  function __construct() {
		
  }
}

function get_base_path() {	
	return '/';
}

function get_image_path() {	
	return get_base_path() . 'wp-content/themes/csc/images/';
}

function get_resource_path() {	
	return get_base_path() . 'wp-content/themes/csc/resources/';
}

function get_page_properties() {
	global $props;
	
	// determine which page we're on and then print the appropriate left menu
	$page = $_SERVER['REQUEST_URI'];
	
	if (stristr($page, 'kids') !== FALSE) {
		$props->iconsActiveArr['kids'] = 'ko_active';
		$props->headerCssClass = 'csc-kids';
		$props->leftMenuId = 'KidsOnly';
		$props->rightSidebarId = 'kids';
		$props->rightSidebarText = '<h3><a class="orange" href="' . get_base_path() . 'kids-fun-links">Discover New Worlds!</a></h3><h3><a class="orange" href="' . get_base_path() . 'kids-activites">Experiment at Home!</a></h3>';
		$props->pageColor = 'orange';
	} else if (stristr($page, 'visitors') !== FALSE) {
		$props->iconsActiveArr['visitors'] = 'vs_active';
		$props->headerCssClass = 'csc-visitors';
		$props->leftMenuId = 'Visitors';
		$props->rightSidebarId = 'visitors';
		$props->rightSidebarText = '<strong class="violet2">Did you know?</strong><br/>"Imagination is more important than knowledge. For while knowledge defines all we currently know and understand, imagination points to all we might yet discover and create."<br/>Albert Einstein';
		$props->pageColor = 'violet2';
	} else if (stristr($page, 'educators') !== FALSE) {
		$props->iconsActiveArr['educators'] = 'ed_active';
		$props->headerCssClass = 'csc-educators';
		$props->leftMenuId = 'Educators';
		$props->rightSidebarId = 'educators';
		$props->rightSidebarText = '<strong class="violet2">Send Us Your Ideas</strong><br/>Teachers will be able to use Children\'s Science Center as an educational resource as well. We’d like to hear your ideas for exhibits that fit your curriculum; please send your comments, suggestions and thoughts to <a href="mailto:Suggestions@TheChildrensScienceCenter.org">Suggestions@TheChildrensScienceCenter.org</a>.';
		$props->pageColor = 'violet2';
	} else if (stristr($page, 'exhibits') !== FALSE) {
		$props->iconsActiveArr['exhibits'] = 'ex_active';
		$props->headerCssClass = 'csc-exhibits';
		$props->leftMenuId = 'Exhibits';
		$props->rightSidebarId = 'exhibits';
		$props->rightSidebarText = '<strong class="violet2">Send Us Your Ideas</strong><br/>Children\'s Science Center is going to be YOUR community resource. We\'d like to hear from you about what you would like to see at Children\'s Science Center. Please send your ideas, comments, and suggestions to <a href="mailto:Suggestions@TheChildrensScienceCenter.org">Suggestions@TheChildrensScienceCenter.org</a>';
		$props->pageColor = 'violet2';
	} else if (stristr($page, 'our-') !== FALSE) {
		$props->iconsActiveArr['about'] = 'au_active';
		$props->headerCssClass = 'csc-about';
		$props->leftMenuId = 'AboutUs';
		$props->rightSidebarId = 'about';
		$props->rightSidebarText = '<strong class="lblue">Our Mission</strong><br/>Children\'s Science Center is dedicated to sparking children\'s interest in science through interactive exhibits and engaging programs that encourage exploration of math and science, stimulate creativity, and inspire through active learning.';
		$props->pageColor = 'lblue';
	} else if (stristr($page, 'news') !== FALSE) {
		if (stristr($page, 'news-events') !== FALSE) {
			$props->displayRightSidebar = false;
		}
		$props->iconsActiveArr['news'] = 'cn_active';
		$props->headerCssClass = 'csc-currentnews';
		$props->leftMenuId = 'CurrentNews';
		$props->rightSidebarId = 'currentnews';
		$props->rightSidebarText = '<strong class="lblue">Media Inquiries</strong><br/>Members of the media can direct all questions and requests to <a href="mailto:Info@TheChildrensScienceCenter.org">Info@TheChildrensScienceCenter.org</a>.';
		$props->pageColor = 'lblue';
	} else if (stristr($page, 'supporters') !== FALSE) {
		$props->iconsActiveArr['supporters'] = 'su_active';
		$props->headerCssClass = 'csc-supporters';
		$props->leftMenuId = 'Supporters';
		$props->rightSidebarId = 'supporters';
		$props->rightSidebarText = '<strong class="bgreen">Get The Word Out</strong><br/>Another way to help is to spread the word! Tell your friends, relatives, and colleagues about Children\'s Science Center and encourage them to get involved. Consider organizing an information session for your schools, community and religious associations. The more people who support Children\'s Science Center, the faster we can open our doors to be the resource our families want and need. <a href="' . get_base_path() . 'supporters-tell-a-friend/">Tell A Friend</a>';
		$props->pageColor = 'bgreen';
	} else if (stristr($page, 'member') !== FALSE) {
		$props->iconsActiveArr['memberships'] = 'ms_active';
		$props->headerCssClass = 'csc-memberships';
		$props->leftMenuId = '';
		$props->displaySecondaryMenu = false;
		$props->rightSidebarId = 'memberships';
		$props->rightSidebarText = '<strong class="lblue">Send Us Your Ideas</strong><br/>Children\'s Science Center is going to be YOUR community resource. We\'d like to hear from you about what you would like to see at Children\'s Science Center. Please send your ideas, comments, and suggestions to <a href="mailto:Suggestions@TheChildrensScienceCenter.org">Suggestions@TheChildrensScienceCenter.org</a>';
		$props->pageColor = 'lblue';
		$props->displayTakeVirtualTour = true;
	} else if (stristr($page, 'donate') !== FALSE) {
		$props->iconsActiveArr['donate'] = 'hd_active';
		$props->headerCssClass = 'csc-donate';
		$props->leftMenuId = '';
		$props->displaySecondaryMenu = false;
		$props->rightSidebarId = 'donate';
		$props->rightSidebarText = '<strong class="green">Did you know?</strong><br/>Only about one-third of 4th and 8th grade students and less than 20% of 12th graders in the United States reach proficiency on mathematics and science tests.<br/><br/>National Science Foundation, 2007';
		$props->pageColor = 'green';
		$props->displayDonateSidebarItem = true;
	} else {
		$props->headerCssClass = 'csc-index';
		$props->pageColor = 'blue';
		$props->displaySecondaryMenu = false;
		$props->displayTakeVirtualTour = true;
		$props->displayRightSidebarFront = true;
		$props->displayRightSidebar = false;
	}
	
}

function get_team_members() {
	$member = new WP_Query(array('post_type' => 'CSCTeamMember', 'orderby' => 'menu_order', 'order' => 'DESC'));
	
	while ($member->have_posts()) {

		print "<p>";
		$member->the_post();

		the_content();

	}
}

?>
