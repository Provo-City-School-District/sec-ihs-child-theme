<footer id="mainFooter">
			<section id="teacherAccess">
				<h1 class="teacherActivate"><a href="https://independence.provo.edu/teacher-access/">Teacher Access</a></h1>

				<ul class="imagelist">
				 	<li><a href="https://independence.provo.edu/wp-login.php"><img src="https://timpview.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/web-page-login.svg" alt="" />Teacher Web Page Login</a></li>
				 	
				 	<li><a href="https://helpdesk.provo.edu:8443/helpdesk/WebObjects/Helpdesk.woa"><img src="https://timpview.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/work-order.svg" alt="" />Open a work order</a></li>
				 	<li><a href="http://mail.google.com"><img src="https://timpview.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/email.svg" alt="" />Email Access</a></li>
				 	<li><a href="https://login.frontlineeducation.com/login?signin=c4f172530351d39768e7d4ddf134db58&productId=ABSMGMT&clientId=ABSMGMT#/login"><img src="https://timpview.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/find-a-substitute.svg" alt="" />How to Schedule a Substitute</a></li>
				 	<li><a href="https://grades.provo.edu/teachers/pw.html"><img src="https://timpview.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/power-school.png" alt="" />PowerTeacher Login</a></li>
				 	<li><a href="https://provo.instructure.com/login/saml/13"><img src="https://timpview.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/file-white.svg" alt="" />Canvas Login</a></li>
				 	<li class="employeelink"><a href="https://employee.provo.edu/"><img src="https://timpview.provo.edu/wp-content/uploads/2017/12/pcsd-logo-website-header-branding.png" alt="" />Employee Support Website</a></li>
				 	
				</ul>
			</section>
			<?php
		// create a new cURL resource
		$globalfooter = curl_init();
		// set URL and other appropriate options
		curl_setopt($globalfooter, CURLOPT_URL, 'https://globalassets.provo.edu/globalpages/ada-footer.php');
		curl_setopt($globalfooter, CURLOPT_HEADER, 0);
		// grab URL and pass it to the browser
		curl_exec($globalfooter);
		// close cURL resource, and free up system resources
		curl_close($globalfooter);
	?>
			
		</footer>
		<?php wp_footer(); ?>
		<script type="text/javascript" src="//customer.cludo.com/scripts/bundles/search-script.min.js"></script>
		<script>
		var CludoSearch;
		(function () {
		    var cludoSettings = {
		        customerId: 10000352,
		        engineId: 10000520,
		        searchUrl: 'https://independence.provo.edu/search-results/',
		        language: 'en',
		        searchInputs: ['cludo-search-form'],
		        template: 'StandardInlineImages',
		        type: 'inline',
		        initFacets: { "Category": ["Independence High"] }     
		    };
		CludoSearch= new Cludo(cludoSettings);
		CludoSearch.init();
		})();
		</script>
		<!--[if lte IE 9]>
		<script src="https://api.cludo.com/scripts/xdomain.js" slave="https://api.cludo.com/proxy.html" type="text/javascript"></script>
		<![endif]-->
</body>
</html>