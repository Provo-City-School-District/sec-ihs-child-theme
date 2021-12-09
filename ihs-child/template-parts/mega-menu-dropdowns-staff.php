<div class="dropDownColumn">
	
	<?php 
		//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
		if(is_page( 'our-teachers-staff' ) || in_array( 16049, get_post_ancestors($post))){
			?>
			<h2><img src="https://independence.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-info.svg" alt="" />Teachers</h2>
			<?php	
		} else {
			?>
			<h3><img src="https://independence.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-info.svg" alt="" />Teachers</h3>
			<?php
		}	
	?>
	
		<ul>
			<li class="int"><a href="https://independence.provo.edu/teachers-staff/teacher-course-directory/">Find Your Teacher</a></li>
			<li class="int"><a href="https://canvas.provo.edu">Canvas Login</a></li>
			<li class="int"><a href="https://independence.provo.edu/teachers-staff/teacher-license-information/">Teacher License Information</a></li>
			<!-- <li class="int"><a href="">School Supply List</a></li> -->
		</ul>
</div>
<div class="dropDownColumn">
	<?php 
		//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
		if(is_page( 'our-teachers-staff' ) || in_array( 16049, get_post_ancestors($post))){
			?>
			<h2><img src="https://independence.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-info.svg" alt="" />Staff</h2>
			<?php	
		} else {
			?>
			<h3><img src="https://independence.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-info.svg" alt="" />Staff</h3>
			<?php
		}	
	?>
	
		<ul>
			<li class="int"><a href="https://independence.provo.edu/faculty-staff/main-office-administration/">Administration &amp; Main Office</a></li>
		<!--	<li class="int"><a href="https://independence.provo.edu/faculty-staff/counseling-staff/">Find Your Counselor</a></li> -->
			<li class="int"><a href="https://independence.provo.edu/faculty-staff/education-support-professionals/">Education Support Professionals</a></li>
		</ul>
</div>
