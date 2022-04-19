<aside id="mainSidebar">
	
	<?php
		//logic to remove the form on the ESP listing because Rob requested "-- Remove the search field because there are only 2 staff listed on that page" 09-11-2020
		if(!is_page(184)){
			?>
	<section>
		<label for="dsearch" class="hidden" id="directorySearch">Directory Search: </label>
		<input type="text" name="dsearch" class="text-input" aria-labelledby="directorySearch" id="sidebar-filter" value="" placeholder="<?php if(is_page($post = '40')){echo 'Search Administration & Main Office';}elseif(is_page($post = '42744')){ echo 'Search Counseling Staff'; }elseif(is_page($post = '72')){ echo 'Search Teachers'; }else{ echo 'Search our Staff...';} ?>" />
		<img class="directorySearchIcon" src="//globalassets.provo.edu/image/icons/search-lt.svg" alt="" />
	</section>		
			<?php
		}	
	?>
	<section>
		<h1>Teachers &amp; Staff</h1>
			<?php echo do_shortcode( '[facultyMenu]' ); ?>
	</section>
	<?php
		//ID 42740 is Admin Directory. 42744 is the Counseling Directory. 42746 is the ESP directory
		if(!is_page(array(42740, 42744, 42746))) {
			?>
	<section>
		<h1>Find Your Teacher by Category</h1>
			<ul>
				<li class="int"><a href="<?php echo get_home_url(); ?>/our-teachers-staff/teacher-course-directory/career-technical-education/">Career & Technical Education</a></li>
				<li class="int"><a href="<?php echo get_home_url(); ?>/our-teachers-staff/teacher-course-directory/elective/">Elective</a></li>
				<li class="int"><a href="<?php echo get_home_url(); ?>/our-teachers-staff/teacher-course-directory/english/">English</a></li>
				<li class="int"><a href="<?php echo get_home_url(); ?>/our-teachers-staff/teacher-course-directory/math/">Math</a></li>
				<li class="int"><a href="<?php echo get_home_url(); ?>/our-teachers-staff/teacher-course-directory/physical-education/">Physical Education</a></li>
				<li class="int"><a href="<?php echo get_home_url(); ?>/our-teachers-staff/teacher-course-directory/science/">Science</a></li>
				<li class="int"><a href="<?php echo get_home_url(); ?>/our-teachers-staff/teacher-course-directory/social-studies/">Social Studies</a></li>
				<li class="int"><a href="<?php echo get_home_url(); ?>/our-teachers-staff/teacher-course-directory/special-education/">Special Education</a></li>
			</ul>
	</section>		
			<?php
		}	
	?>
</aside>