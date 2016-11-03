<?php
	// Edit these Variables to change the page header information
	$title = 'Content Authoring Guidelines &amp; Best Practices';
	$credit = 'MIT Alumni Association Website Style Guide';
	$description='';
	
	// Organize the Table of Contents
	// follow the instructions for each item, and make sure that the sections that follow are in the correct order.
	$number1 = '01.'; //order number next to title
	$title1 = 'Purpose of this Guide'; // title of the section
	$anchor1 = 'purpose'; // anchor tag id for the section (needs to be text.  don't use a number)
	///
	$number2 = '02.'; 
	$title2 = 'Introduction to Sections'; 
	$anchor2 = 'sections'; 
	///
	$number3 = '03.'; 
	$title3 = 'Story Pages'; 
	$anchor3 = 'stories'; 
	///
		$title3a = 'Story Page Components'; 
		$anchor3a = 'storycomponents';  
		
		$title3b = 'Featured Story'; 
		$anchor3b = 'featuredstory';
		
		$title3c = 'Visual Story'; 
		$anchor3c = 'visualstory';
		
		$title3d = 'Gallery Slideshow'; 
		$anchor3d = 'gallery';
		
		$title3e = 'Audio / Video Page'; 
		$anchor3e = 'linkedmedia';
		
				
	///
	$number4 = '04.'; 
	$title4 = 'Content Pages'; 
	$anchor4 = 'contentpages'; 
	///
		$title4a = 'Landing Pages &amp; Components'; 
		$anchor4a = 'contentpagescomponents';
		
		//$title4b = 'Landing Page'; 
		//$anchor4b = 'genericpage';
		
		$title4b = 'Article Pages &amp; Components'; 
		$anchor4b = 'contentarticles';
		
		$title4c = 'Knowledge Base Articles'; 
		$anchor4c = 'knowledgebasearticles';
		
		//$title4d = 'Class Reunions'; 
		//$anchor4d = 'classreunion';

	///
	$number5 = '05.'; 
	$title5 = 'Landing Pages'; 
	$anchor5 = 'landingpages'; 
	///
		$title5a = 'Visual Groups Landing Page'; 
		$anchor5a = 'visualgroups'; 
		
		$title5b = 'Category Landing Page'; 
		$anchor5b = 'categorylandingpage';
		
		$title5c = 'Enhanced Category Landing Page'; 
		$anchor5c = 'enhancedlanding';
		
		//$title5d = 'Content Landing Page'; 
		//$anchor5d = 'contentlanding';
		
		//$title5e = 'Knowledge Base Landing Page'; 
		//$anchor5e = 'knowledgebaselanding';
	///
	$number6 = '06.'; 
	$title6 = 'Photography Guidelines'; 
	$anchor6 = 'photoguide'; 
	///	
		//$title6a = 'Art Direction'; 
		//$anchor6a = 'artdirection'; 
		
		$title6a = 'Story Photos'; 
		$anchor6a = 'storyphotos';
		
		$title6b = 'Content Landing Photos'; 
		$anchor6b = 'contentlandingphotos';
		
		$title6c = 'Event Photos'; 
		$anchor6c = 'eventphotos'; 
	///
	/// make these variables so they can be used in lots of places
	//$photo_guide_link ='<a href="MITAA_Photo-Guide_FINAL.pdf" target="_blank">photography &amp; imagery specs guide</a>';
	$photo_guide_link ='<a href="#photoguide">photography &amp; imagery specs guide</a>';
	$copy_guide_link ='https://projects.invisionapp.com/share/GV87NKZSY#/screens/'; // add specific page after /screens/
	
?>
<?php include'inc/head.php'; // Renders the head of the document. ?>
	<?php include'inc/header.php'; //<main> open tag is inside this element ?>
		<aside class="page-nav">
			<h4><a href="index.php">MITAA Website Guidelines &amp; Documentation</a></h4>
			<ol class="contents">
				<?php if ($anchor1) { echo'<li><a href="#' . $anchor1 . '">' . $title1 . '</a></li>'; } //edit the stuff and it shows up here ?>
				<?php if ($anchor2) { echo'<li><a href="#' . $anchor2 . '">' . $title2 . '</a></li>'; } ?>
				<?php if ($anchor3)  { //this is what to use if you have sub-navigation 
					echo'<li><a href="#' . $anchor3 . '">' . $title3 . '</a>';
						echo '<ol>';
							echo'<li><a href="#' . $anchor3a . '">' . $title3a . '</a></li>';
							echo'<li><a href="#' . $anchor3b . '">' . $title3b . '</a></li>';
							echo'<li><a href="#' . $anchor3c . '">' . $title3c . '</a></li>';
							echo'<li><a href="#' . $anchor3d . '">' . $title3d . '</a></li>';
							echo'<li><a href="#' . $anchor3e . '">' . $title3e . '</a></li>';
							//echo'<li><a href="#' . $anchor3f . '">' . $title3f . '</a></li>';
						echo '</ol>';
					echo '</li>';
				} 
				if ($anchor4)  { 
					echo'<li><a href="#' . $anchor4 . '">' . $title4 . '</a>';
						echo '<ol>';
							echo'<li><a href="#' . $anchor4a . '">' . $title4a . '</a></li>';
							echo'<li><a href="#' . $anchor4b . '">' . $title4b . '</a></li>';
							echo'<li><a href="#' . $anchor4c . '">' . $title4c . '</a></li>';
							//echo'<li><a href="#' . $anchor4d . '">' . $title4d . '</a></li>';
						echo '</ol>';
					echo '</li>';
				} 				
				if ($anchor5)  { 
					echo'<li><a href="#' . $anchor5 . '">' . $title5 . '</a>';
						echo '<ol>';
							echo'<li><a href="#' . $anchor5a . '">' . $title5a . '</a></li>';
							echo'<li><a href="#' . $anchor5b . '">' . $title5b . '</a></li>';
							echo'<li><a href="#' . $anchor5c . '">' . $title5c . '</a></li>';
							//echo'<li><a href="#' . $anchor5d . '">' . $title5d . '</a></li>';
							//echo'<li><a href="#' . $anchor5e . '">' . $title5e . '</a></li>';
						echo '</ol>';
					echo '</li>';
				}
				if ($anchor6)  { 
					echo'<li><a href="#' . $anchor6 . '">' . $title6 . '</a>';
						if ($anchor6a)  { 
						echo '<ol>';
							echo'<li><a href="#' . $anchor6a . '">' . $title6a . '</a></li>';
							echo'<li><a href="#' . $anchor6b . '">' . $title6b . '</a></li>';
							echo'<li><a href="#' . $anchor6c . '">' . $title6c . '</a></li>';
							//echo'<li><a href="#' . $anchor6d . '">' . $title6d . '</a></li>';
							//echo'<li><a href="#' . $anchor6e . '">' . $title6e . '</a></li>';
						echo '</ol>';
						}
					echo '</li>';
				} ?>
			</ol>
			<section>
				<small><span class="letter optional">&#9733;</span> <i>Optional</i></small>
				<small><span class="letter">&#9733;</span> <i>Required</i></small>
			</section>
		</aside>
		<!--number1-->
		<section id="<?php echo $anchor1 ?>">
			<?php echo'<h2><span>' . $number1 . '</span> ' . $title1 . '</h2>'; // number1 Purpose of this Guide ?>
			<p>This guide was created to assist new authors of the MIT Alumni Association website in creating and currating the different types of page content within the site. These guidelines cover, in depth, the different site sections, page template types and page elements that are used.  Adherence to this guide is crucial in order to maintain the visual integrity of the Alumni Association brand and to ensure that site content is optimally authored.</p>
		</section>
		<!--number2-->
		<section id="<?php echo $anchor2 ?>">
			<?php echo'<h2><span>' . $number2 . '</span> ' . $title2 . '</h2>'; // number2 Introduction to Sections ?>
			<?php echo'<h3><a href="#' . $anchor3 . '">' . $title3 . '</a></h3>'; // Story Components and Types ?>
			<p>This section introduces the site's different story types and the context in which they are used.  It outlines the components used to create a story, and illustrates the best practices for authors to follow. Story pages are created by site authors, or content is collected from other MIT sources.</p>
			<?php echo'<h3><a href="#' . $anchor4 . '">' . $title4 . '</a></h3>'; // Content Pages ?>
			<p>This section outlines the each content page type and the components that they are comprised of. It also illustrates best practices to follow when constructing a content page. Content pages are created by site authors as well as users of the site with specific permissions.</p>
			
			<?php echo'<h3><a href="#' . $anchor5 . '">' . $title5 . '</a></h3>'; // Landing Pages ?>
			<p>This section outlines the different landing page types and the components that they are comprised of.  Landing pages are produced by site authors, or are automatically generated via currated topic tags.</p>
			
			<?php echo'<h3><a href="#' . $anchor6 . '">' . $title6 . '</a></h3>'; // Photography Guidelines ?>
			<p>This section provides site authors photography guidance for each story or content page. It defines art direction and sites specifications for photo dimensions.</p>
		</section> 
		<?php include'inc/story-pages.php'; // number3 Story Pages ?>
		<?php include'inc/content-pages.php'; // number4 Content Pages ?>
		<?php include'inc/landing-pages.php'; // number5 Landing Pages ?>
		<?php include'inc/photography.php'; // number6 Photography ?>
	<?php include'inc/footer.php'; //</main> close tag is inside this element ?>
