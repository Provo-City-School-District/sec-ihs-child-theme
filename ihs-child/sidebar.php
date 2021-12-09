<aside id="mainSidebar">
			
			<section>
				<h1>Welcome to Independence</h1>
					<video controls> 
						<source src="https://independence.provo.edu/wp-content/uploads/videos/2018-welcomeToIHS-720.mp4" type="video/mp4">   
							Your browser doesn't support HTML5 video. Here is a <a href="http://independence.provo.edu/wp-content/uploads/videos/2018-welcomeToIHS-720.mp4">link to the Welcome video</a> instead.
					</video>				
			</section>
				<?php
					$my_query = new WP_Query( array('showposts' => $posts_to_show, 'post_type'  => 'principals_message', 'posts_per_page' => 1));
				   			while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
				   				<article class="post">
							   		<a href="<?php the_permalink(); ?>">
								   		<header class="postmeta">
											<h1>Principal's Message</h1>
											<h2><?php the_title(); ?></h2>
										</header>
										<img src="<?php echo get_theme_file_uri(); ?>/assets/images/principal-message.jpg" alt="Admin photo" class="left" />
							   		</a>
							   		<?php the_excerpt(); ?>
							   		<p class="readmore"><a href="<?php the_permalink(); ?>">Read More</a></p>
							   	</article>
							<?php endwhile;
					wp_reset_query();
				?>

			
			<section class="calendar-agenda">	
				<h1>Today’s Events</h1>
				<?php echo do_shortcode('[calendar id="15986"]'); ?>
				<a href="<?php echo get_home_url(); ?>/school-information/calendar/">View All Events Calendar</a>
			</section>
			<section>
				<h1>Student Essentials</h1>
				<ul class="imagelist">
					<li>
						<a href="https://grades.provo.edu/public/">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/power-school.png" alt="" />
							<span>PowerSchool (Grades & Attendance)</span>
						</a>
					</li>
					<li>
						<a href="https://canvas.provo.edu">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/pcsd-canvas-logo-white.png" alt="" />
							<span>Canvas Login</span>
						</a>
					</li>
					<li>
						<a href="<?php echo get_home_url(); ?>/our-teachers-staff/teacher-course-directory/">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/find-your-teacher.svg" alt="" />
							<span>Find Your Teacher</span>
						</a>
					</li>
					<li>
						<a href="https://provo.aliohost.net:7443/AlioFeePay_PSD/Account/Login">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/pay-meals.svg" alt="" />
							<span>Pay School Fees</span>
						</a>
					</li>
					<li>
						<a href="<?php echo get_home_url(); ?>/school-information/bell-schedule/">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/bell-schedule.svg" alt="" />
							<span>Bell Schedule</span>
						</a>
					</li>
					<?php
					//calls in the child nutrition sidebar menu
					$cnmenuhandle = curl_init();
					$cnmenuurl = "https://globalassets.provo.edu/globalpages/childNutritionMenu-sidebar.php";
					// Set the url
					curl_setopt($cnmenuhandle, CURLOPT_URL, $cnmenuurl);
					// Set the result output to be a string.
					curl_setopt($cnmenuhandle, CURLOPT_RETURNTRANSFER, true);
					$cnmenuoutput = curl_exec($cnmenuhandle);
					// close the curl connection
					curl_close($cnmenuhandle); 
					echo $cnmenuoutput;
					//end child nutrition sidebar menu
					?>
					<li>
						<a href="http://www.infofinderi.com/ifi/?cid=PCSD1CX16HAYK">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/bus-routes.svg" alt="" />
							<span>Bus Routes</span>
						</a>
					</li>
				</ul>
				<a href="https://www.peachjar.com/index.php?region=33081&a=28&b=138"><img src="https://timpview.provo.edu/wp-content/uploads/2019/05/button-orange-eflyers_202x46.png" alt="Link to PeachJar Fliers"></a>
				<a href="https://safeut.med.utah.edu/"><img src="https://timpview.provo.edu/wp-content/uploads/2019/03/safeUTcrisisline.jpg" alt="Link to SafeUT information"></a>
				<a href="https://www.saferoutesutahmap.com/organization/schools/map"><img src="https://provo.edu/wp-content/uploads/2020/03/saferoutesutah.jpg" alt="Link to Safe Routes UT information"></a>
			</section>
		</aside>