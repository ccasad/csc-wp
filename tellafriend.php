<?php
/*
Template Name: TellAFriend
*/
?>

<?php
$base_path = get_base_path();

get_page_properties();
$props = $GLOBALS['page_properties'];

$messageDisplay = 'none';
$messageText = '';
$messageCss = 'alert-fail';

if (!isset($_POST['username']) || !strlen($_POST['username'])) {
	if (isset($_POST['tafname']) && strlen($_POST['tafname']) && isset($_POST['tafemail']) && strlen($_POST['tafemail']) && isset($_POST['taffriend1']) && strlen($_POST['taffriend1'])) {
		$sent = send_email($_POST['tafname'], $_POST['tafemail'], $_POST['taffriend1']);

		if (isset($_POST['taffriend2']) && strlen($_POST['taffriend2'])) {
			$sent = send_email($_POST['tafname'], $_POST['tafemail'], $_POST['taffriend2']);
		}

		if ($sent) {
			$messageText =  'Success! A message has been sent to your friend. <br/>Thanks for sharing!'; 
			$messageCss = 'alert-success';
		} else {
			$messageText =  'Problem! There was an issue sending a message <br/>to your friend. Please try again.';
		}
		$messageDisplay = 'block';
	}
}

function send_email($fromName, $fromEmail, $toEmail) {
	$from =  $fromName.'<'.$fromEmail.'>';
	
	$header  = 'MIME-Version: 1.0' . "\r\n";
	$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$header .= 'From:' . $from . "\r\n";
	$header .= 'Reply-To:' . $from . "\r\n";
	
	$subject = 'The Children\'s Science Center in Northern Virginia';

	$body = 'Check out this cool Web site about a new children\'s museum coming to the Northern Virginia area! http://www.thechildrenssciencecenter.org/';

	$sent = wp_mail($toEmail, $subject, $body, $header);

	return $sent;
}
?>

<?php get_header(); ?>

<div id="main">

	<?php get_sidebar('left'); ?>
	  
  <div id="content">

    <div class="csc-content">
		  <div>
		    <h1 class="<?php print $props->pageColor; ?> csc-title"><?php the_title(); ?></h1>
				
				<?php 
				if ( have_posts() ) : 
					while( have_posts() ) : 
						the_post();
						the_content();
					endwhile; 
				endif; 
				?>
				
				<div id="error" class="<?php print $messageCss; ?>" style="margin-bottom:15px;display:<?php print $messageDisplay; ?>;"><?php print $messageText; ?></div>

				<form action="<?php the_permalink(); ?>" id="tellafriendform" method="post">
				
					<ul>
						<li>
								<label for="tafname">Your Name:</label>
								<input id="tafname" name="tafname" minlength="1" type="text" required="required" class="inputboxes">
						</li>
						<li>
								<label for="tafemail">Your Email:</label>
								<input id="tafemail" name="tafemail" type="email" required="required" class="inputboxes">
						</li>
						<li>
								<label for="taffriend1">Friend Email #1:</label>
								<input id="taffriend1" name="taffriend1" type="email" required="required" class="inputboxes">
						</li>
						<li>
								<label for="taffriend2">Friend Email #2:</label>
								<input id="taffriend2" name="taffriend2" type="email" class="inputboxes">
						</li>
						<!-- fake field to fool spambots -->
						<li style="display:none;">
							<label for="username">Username</label>
							<input type="text" name="username">
						</li>
						<!-- //end -->
						<li>
								<input type="submit" class="btn-submit tellafriend" value="Submit Form">
						</li>
					</ul> 
					
				</form>
				
			</div>
		</div>
		<br/><br/>
  </div> <!-- close content -->

  <?php get_sidebar('right'); ?>

</div> <!-- close main -->

<br/><br/>

<div id="delimiter"></div>

<?php get_footer(); ?>

<script language="javascript">
(function($) {
	
	$("#tellafriendform").validate({
		onkeyup: false,
   	onclick: false,
		messages : {
			tafname: "Please enter your Name<br/>",
			tafemail: "Please enter a valid email address for Your Email<br/>",
			taffriend1: "Please enter a valid email address for Friend Email #1<br/>",
			taffriend2: "Please enter a valid email address for Friend Email #2<br/>"
		},
		errorPlacement: function(error, element) {
    	// hide the messages next to the textboxes
  	},
    invalidHandler: function(event, validator) {
	    var errors = validator.numberOfInvalids();
	    
	    if (errors) {
				var message = '';
				for (var propertyName in validator.invalid) {
					message += validator.invalid[propertyName]
				}
				$("#error").html(message);
				$("#error").show();
	    } else {
	      $("#error").hide();
	    }
	  }
	});
	
})( jQuery );

</script>


