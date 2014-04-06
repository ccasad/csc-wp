<?php
$base_path = get_base_path();


?>

				<div id="footer">

					<div class="csc-footer" id="csc-findex">
						<div class="csc-footer-in">
							<hr>
							<ul>
								<li><a href="<?php print $base_path; ?>privacy-policy">Privacy Policy</a></li>
								<li>&nbsp;&nbsp;|&nbsp;&nbsp;</li>
								<li><a href="<?php print $base_path; ?>our-vision">About Us</a></li>
								<li>&nbsp;&nbsp;|&nbsp;&nbsp;</li>
								<li><a href="<?php print $base_path; ?>contact-us">Contact Us</a> </li>
								<li>&nbsp;&nbsp;|&nbsp;&nbsp;</li>
								<li><a href="<?php print $base_path; ?>newsletters">eNewsletter Signup</a> </li>
								<li class="csc-stayconn-text">Stay connected: &nbsp; </li>
								<li class="csc-stayconn-img"><a href="http://www.facebook.com/ChildrensScienceCenter"><img src="<?php print $base_path; ?>wp-content/themes/csc/images/social_fb.png" alt="facebook image" title="Facebook"></a> &nbsp; </li>
								<li class="csc-stayconn-img"><a href="http://www.twitter.com/SciCenter"><img src="<?php print $base_path; ?>wp-content/themes/csc/images/social_tw.png" alt="twitter image" title="Twitter"></a> &nbsp; </li>
								<li class="csc-stayconn-img"><a href="mailto:info@thechildrenssciencecenter.org"><img src="<?php print $base_path; ?>wp-content/themes/csc/images/social_ml.png" alt="email image" title="E-mail"></a> &nbsp; </li>
								<li class="csc-stayconn-img"><a href="http://www.linkedin.com/company/children's-science-center"><img src="<?php print $base_path; ?>wp-content/themes/csc/images/social_li.png" alt="linkedin image" title="LinkedIn"></a> &nbsp; </li>
							</ul>
	
							<span>Copyright &copy; 2013 Children's Science Center.<br/> All Rights Reserved.<br>
							<span class="csc-footer_hinge">Web Design: 
							<?php if ($wp_query->get_queried_object()->ID == '5') : ?>
								<a href="http://www.hingemarketing.com" target="_blank">Hinge</a>
							<?php else : ?>
								Hinge
							<?php endif; ?>
							</span></span>
						<!-- end #footer-in --> 
						</div>
					<!-- end #footer -->
					</div>

				</div> <!-- close footer -->

			</div> <!-- close csc-container (from header.php) -->
    </div> <!-- close csc-wrap (from header.php) -->
  </div> <!-- close wrapper (from header.php) -->

  <?php wp_footer(); ?>

</body>
</html>

<style>
#form9 .wdform_page_navigation {
	display: none !important;
}
</style>


  
