<!DOCTYPE html>
<html>
<!-- 
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Research At UTA</title>  
	 <link rel="stylesheet" href="<?php echo base_url('assets/CSS/researchatuta.css')?>" type="text/css" >
 
      
	</head> -->

	<body> 
		<div id ="wrapper">
			<div class = "header">
				<p class = "heading">UResearch</p>
				<p class = "tagline">Ideas & Innovations!</p>
			</div>
			<div id="navtop">
				<ul>
					<li><a href="home">Home</a></li> 
					<li><a href="researchandopportunities">Research and Opportunities</a></li>
					<li><a href="researchlabs">Research Labs</a></li>
					<li><a href="researchreports">Research Reports</a></li>
					<li><a href="accolades">Accolades</a></li>
					<li><a href="newscenter">News Center</a></li>
					<li><a href="aboutus">About Us</a></li>
					<li><a href="contactus">Contact Us</a></li>
				</ul>
			</div>


			<div class="clearfix">
				<div class="column righthome">
					<nav>	
						<ul>

							<li><span class="r2"><a href="profilesettings">Profile Settings</a></span></li> 
							<li><span class="r2"><a href="https://elearn.uta.edu/">BlackBoard</a></span></li>
							<li><span class="r2"><a href="https://www.uta.edu/mymav/">MyMav</a></span></li> 
							<li><span class="r2"><a href="https://login.microsoftonline.com/common/oauth2/authorize?client_id=00000002-0000-0ff1-ce00-000000000000&redirect_uri=https%3a%2f%2foutlook.office.com%2fowa%2f&resource=00000002-0000-0ff1-ce00-000000000000&response_mode=form_post&response_type=code+id_token&scope=openid&msafed=0&client-request-id=720d58cd-cf11-4fab-9bb3-735baa48f674&protectedtoken=true&domain_hint=mavs.uta.edu&nonce=636588350122190021.c1477592-a2f4-4c10-9161-5e8b98a41659&state=DctNDsIgEEBhsHdxYQKdofzNovEO3mCkYzSxMUHQ65fF93ZPK6Wm4TRoGFEpLjHkvARA55AAHNqCPqVAzrB7eOMLgiGMaILkO2X2GAPp8V7mz5_naxV-7-vOv6_tja1s_cy9PW-yvaqUtrba5QA">Email</a></span></li>	
							<li><span class="r2"><a href="sitemap">SiteMap</a></li>	
							</ul>
						</nav>
					</div>
					<div class="column left">
						<div class="slideshow-container">

							<div class="mySlides fade">
								<div class="numbertext">1 / 3</div>
								<img src="<?php echo base_url('assets/Images/utalogin.jpg')?>" style="width:100%">
							</div>

							<div class="mySlides fade">
								<div class="numbertext">2 / 3</div>
								<img src="<?php echo base_url('assets/Images/UTA1.jpeg')?>" style="width:100%">
							</div>

							<div class="mySlides fade">
								<div class="numbertext">3 / 3</div>
								<img src="<?php echo base_url('assets/Images/UTA3.jpeg')?>" style="width:100%">
							</div>

							<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
							<a class="next" onclick="plusSlides(1)">&#10095;</a>

						</div>
						<br>

						<div style="text-align:center">
							<span class="dot" onclick="currentSlide(1)"></span> 
							<span class="dot" onclick="currentSlide(2)"></span> 
							<span class="dot" onclick="currentSlide(3)"></span> 
						</div>

						<script>
							var slideIndex = 1;
							showSlides(slideIndex);

							function plusSlides(n) {
								showSlides(slideIndex += n);
							}

							function currentSlide(n) {
								showSlides(slideIndex = n);
							}

							function showSlides(n) {
								var i;
								var slides = document.getElementsByClassName("mySlides");
								var dots = document.getElementsByClassName("dot");
								if (n > slides.length) {slideIndex = 1}    
									if (n < 1) {slideIndex = slides.length}
										for (i = 0; i < slides.length; i++) {
											slides[i].style.display = "none";  
										}
										for (i = 0; i < dots.length; i++) {
											dots[i].className = dots[i].className.replace(" active", "");
										}
										slides[slideIndex-1].style.display = "block";  
										dots[slideIndex-1].className += " active";
									}
								</script>

								<p>UTA is the model 21st century urban research university, with activities focused around our four key guiding themes: Health and the Human Condition; Sustainable Urban Communities; Global Environmental Impact and Data-Driven Discovery.</p><br>


								<p>We seek out the untested boundaries of knowledge with research centers in every discipline. We partner with local businesses to commercialize discoveries. Our Center for Bilingual and ESL Education finds the best ways to educate across cultural divides. Our Amphibian and Reptile Diversity Research Center illuminates creatures like the rarely seen Mexican mole lizard. And those are just a few examples.</p><br>
								<p>
								Our efforts have earned us the classification as a R1: Highest Research activity university, according to the Carnegie Classification of Institutions of Higher Education. With this new classification, UTA joins a distinguished group of 115 institutions including Harvard, MIT and Johns Hopkins in the “highest research” or R-1 category.</p>
								<p>
								See what research means to us. And what our research means to the world.</p>

								<p>
								Our efforts have earned us the classification as a R1: Doctoral University- Highest Research Activity from the Carnegie Classification of Institutions for Higher Education. Funding for our burgeoning research enterprise continues to grow year after year.</p><br>

								<p>
								See what research means to us. And what our research means to the world.</p><br>
								<br>

							</div>




						</div>
 <!--  <footer>
      <ul id="list">
                        <li id="social" ><a  href="https://www.facebook.com/utarlington/" class="fa fa-facebook"></a></li>
                        <li id="social"><a  href="https://twitter.com/utarlington?lang=en" class="fa fa-twitter"></a></li>
                        <li id="social"><a  href="https://www.linkedin.com/school/university-of-texas-at-arlington/" class="fa fa-linkedin"></a></li>
                  </ul>
            <p>Copyright &copy; Research@UTA</p> 
                  <a href="mailto:research@uta.com">research@uta.com</a>
            </footer>
        -->	</body>
        </html>