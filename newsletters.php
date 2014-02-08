<?php
/*
Template Name: Newsletters
*/
?>

<?php
$base_path = get_base_path();

get_page_properties();
$props = $GLOBALS['page_properties'];

require_once '/home/cscwebmaster/thechildrenssciencecenter.dreamhosters.com/wp-content/custom/php-sdk-constant-contact/src/Ctct/autoload.php';

use Ctct\ConstantContact;
use Ctct\Components\Contacts\Contact;
use Ctct\Components\Contacts\ContactList;
use Ctct\Components\Contacts\EmailAddress;
use Ctct\Exceptions\CtctException;

define("APIKEY", "2k2ww3pdmd9fdrk6nmq2pp6t");
define("ACCESS_TOKEN", "da0b39ca-9142-44a2-87dc-86f1a2d84316");

$cc = new ConstantContact(APIKEY);

$messageDisplay = 'none';
$messageText = '';
$messageCss = 'alert-fail';

if (!isset($_POST['username']) || !strlen($_POST['username'])) {
	if (isset($_POST['nlfirstname']) && strlen($_POST['nlfirstname']) && isset($_POST['nllastname']) && strlen($_POST['nllastname']) && isset($_POST['nlemail']) && strlen($_POST['nlemail'])) {
		$first_name = $_POST['nlfirstname'];
		$last_name = $_POST['nllastname'];
		$email = $_POST['nlemail'];

    try {
        // check to see if a contact with the email addess already exists in the account
        $response = $cc->getContactByEmail(ACCESS_TOKEN, $_POST['nlemail']);

        // create a new contact if one does not exist
        if (empty($response->results)) {
            $action = "Creating Contact";

            $contact = new Contact();
            $contact->addEmail($_POST['nlemail']);
            $contact->addList('44');
            $contact->first_name = $_POST['nlfirstname'];
            $contact->last_name = $_POST['nllastname'];
            $returnContact = $cc->addContact(ACCESS_TOKEN, $contact); 
						
        // update the existing contact if address already existed
        } else {
	        //print_r($response);
        }
        
        $to = "tedescos@earthlink.net,jillmcnabb@comcast.net,jessica.dzara@hotmail.com,ccasad@gmail.com";
				$headers = "From: CSC_Newsletter@thechildrenssciencecenter.org\r\n" . "X-Mailer: php";
				$subject = "Interest in CSC Newsletter";
				$body = "The following person was added to the Children's Science Center Newsletter:\n\n" . "First Name: " . $_POST['nlfirstname'] . "\nLast Name: " . $_POST['nllastname'] . "\nEmail: " . $_POST['nlemail'];
				
				$status = mail($to, $subject, $body, $headers);
				if ($status) {
					$messageCss = 'alert-success';
					$messageText = "<strong>You have been added to our newsletter listing.  <br/>Thank you.</strong>";
				} else {
					$messageText = "<strong>There was an issue submitting your request.  Please try again.</strong>";
				}	
				$messageDisplay = 'block';
				
    // catch any exceptions thrown during the process and print the errors to screen
    } catch (CtctException $ex) {
        $messageText = "<strong>There was an issue submitting your request.  Please try again.</strong>";
        $messageDisplay = 'block';
    }
	}
}
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
				if ( have_posts() ) : 
					while( have_posts() ) : 
						the_post();
						the_content();
					endwhile; 
				endif; 
				?>

				<div id="error" class="<?php print $messageCss; ?>" style="margin-bottom:15px;display:<?php print $messageDisplay; ?>;"><?php print $messageText; ?></div>

				<form action="<?php the_permalink(); ?>" id="subscriberform" method="post">
				
					<ul style="margin-top:30px;">
						<li>
								<label for="nlfirstname">First Name:</label>
								<input id="nlfirstname" name="nlfirstname" minlength="1" type="text" required="required" class="inputboxes">
						</li>
						<li>
								<label for="nllastname">Last Name:</label>
								<input id="nllastname" name="nllastname" minlength="1" type="text" required="required" class="inputboxes">
						</li>
						<li>
								<label for="nlemail">Email:</label>
								<input id="nlemail" name="nlemail" type="email" required="required" class="inputboxes">
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
				
				</p>
				
				<div style="clear:both;"></div>
				
				<p>
				<ul>
				<?php 
				wp_list_bookmarks(array('category_name' => 'Newsletters', 
																'orderby' => 'notes', 
																'order' => 'DESC',
																'categorize' => '0',
																'title_li' => '',
																'posts_per_page' => -1));
				?>
				</ul>
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

<script language="javascript">
(function($) {
	
	$("#subscriberform").validate({
		onkeyup: false,
   	onclick: false,
		messages : {
			nlfirstname: "Please enter your First Name<br/>",
			nllastname: "Please enter your Last Name<br/>",
			nlemail: "Please enter a valid Email address<br/>"
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
