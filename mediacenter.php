<?php
/*
Template Name: MediaCenterItems
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
				<a href="#pr">Press Releases</a> | <a href="#mc">Media Coverage</a> | <a href="#pk">Press Kit</a>
				</p>
				<br/>
				<p>
				<a name="pr" class="our-team-sub-heading">Press Releases</a>
				</p>
				<p>
				<?php 
				$items = new WP_Query(array('post_type' => 'cscmediacenteritems', 'orderby' => 'menu_order', 'order' => 'DESC', 'posts_per_page' => -1));

				if ($items->have_posts()) : 
					while($items->have_posts()) : 
						$items->the_post();
						the_content();
											
						if (get_field('media_type') === '1') :
							$prDate = get_field('media_date');
						
							$year = substr($prDate, 0, 4);
							$month = substr($prDate, 4, 2);
							$day = substr($prDate, 6, 2);
						
							$d = new DateTime($year . "-" . $month . "-" . $day); 
							$date = $d->format("F d, Y");

							$link = get_field('media_link_url');
							if (!strlen($link)) :
								$link = get_field('media_link_file');
							endif;
						
							print '<p>' . $date . ' <a href="' . $link . '">' . get_the_title() . '</a> ' . get_field('additional_info') . '</p>';
						endif;
					endwhile; 
				endif; 
				?>
				</p>
				<br/>
				<p>
				<a name="mc" class="our-team-sub-heading">Media Coverage</a>
				</p>
				<p>
				<?php 
				$items = new WP_Query(array('post_type' => 'cscmediacenteritems', 'orderby' => 'menu_order', 'order' => 'DESC', 'posts_per_page' => -1));

				if ($items->have_posts()) : 
					while($items->have_posts()) : 
						$items->the_post();
						the_content();
											
						if (get_field('media_type') === '2') :
							$prDate = get_field('media_date');
						
							$year = substr($prDate, 0, 4);
							$month = substr($prDate, 4, 2);
							$day = substr($prDate, 6, 2);
						
							$d = new DateTime($year . "-" . $month . "-" . $day); 
							$date = $d->format("F d, Y");

							$link = get_field('media_link_url');
							if (!strlen($link)) :
								$link = get_field('media_link_file');
							endif;
						
							print '<p>' . $date . ' <a href="' . $link . '">' . get_the_title() . '</a> ' . get_field('additional_info') . '</p>';
						endif;
					endwhile; 
				endif; 
				?>
				</p>
				<br/>
				<p>
				<a name="pk" class="our-team-sub-heading">Press Kit</a>
				</p>
				<p>
				<strong>Photographs</strong>
				<?php 
				$items = new WP_Query(array('post_type' => 'cscmediacenteritems', 'orderby' => 'menu_order', 'order' => 'DESC', 'posts_per_page' => -1));

				if ($items->have_posts()) : 
					while($items->have_posts()) : 
						$items->the_post();
						the_content();
											
						if (get_field('media_type') === '3') :
							$photo = get_field('photo');
							$info = get_field('additional_info');
				?>
							<div>
								<img src="<?php print $photo['sizes']['medium']; ?>" height="150" style="float:left; padding-right:10px;"> 
								<div style="font-size:9px;"><?php print $info; ?></div>
								<div class="clear"></div>		
							</div>
							<br/>
				<?php
						endif;
/*
						print '<br>'.get_the_title();
						print '<br>'.get_field('media_date');
						print '<br>'.get_field('media_type');
						print '<br>'.get_field('media_link_file');
						print '<br>'.get_field('media_link_url');
						print '<br>'.get_field('additional_info');
						print '<br>'.get_field('photo');
*/
					endwhile; 
				endif; 
				?>
				</p>
				
				<p>Download our <a href="http://childsci.org/wp-content/uploads/2013/07/2014_Childrens-Science-Center-Fact-Sheet_FINAL.pdf">Fact Sheet</a></p>
				
			</div>
		</div>
		<br/><br/>
  </div> <!-- close content -->

  <?php get_sidebar('right'); ?>

</div> <!-- close main -->

<br/><br/>

<div id="delimiter"></div>

<?php get_footer(); ?>
