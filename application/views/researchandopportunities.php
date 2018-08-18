<!DOCTYPE html>
<html>

<!-- <head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Research At UTA</title>
	<link rel="stylesheet" type="text/css" href="css\researchatuta.css">
     
</head>
 -->
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
		<div class="column rightresearchopportunities">
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

			<img src = "<?php echo base_url('assets/Images/research1.jpeg')?>">

            	<h2> Research Projects <h2>

				<?php echo form_open('index.php/test/search_query');?>
				  <!--<input id="area" type="text" size="30" name="faculty_name" onfocus="this.value=''" onblur="if(this.value == '') { this.value='Enter Faculty Name'}"  value="Enter Faculty Name">
				  <!--<input id="area" type="text" name="faculty_lname" onfocus="this.value=''" value="Enter Faculty Last Name"> -->
				  <!--<input id="area" type="text" name="areaofexpertise" onfocus="this.value=''" onblur="if(this.value == '') { this.value='Enter Area of Research'} 
				  " value="Enter Area of Research" required="required">-->

				  <select name="faculty_name" id="faculty_name">
						<option value="">Select Faculty</option>
						<option value="Gautam Das">Gautam Das</option>
						<option value="Aditya">Aditya</option>
						<option value="Dr. M. K. RAJA">Dr. M. K. RAJA</option>
						<option value="Cathy Geller">Cathy Geller</option>
						<option value="Jessica Pearson">Jessica Pearson</option>
					</select>

					<select name="areaofexpertise" id="areaofexpertise">
						<option value="">Select Research</option>
						<option value="Machine Learning">Machine Learning</option>
						<option value="Automation & Intelligent Systems">Automation & Intelligent Systems</option>
						<option value="Computer Architecture">Computer Architecture</option>
						<option value="Agile Development Methods">Agile Development Methods</option>
						<option value="Social Network Analytics">Social Network Analytics</option>
					</select><br>
				  <input id="area"  type="Submit" name="submit"  value="Search">
				</form>

				<h3> Research Opportunities </h3>
				
					<h5> STEM  TUITION  FELLOWSHIP </h5>
					<p> Select Engineering and Science graduate students are eligible to participate in the STEM Fellowship program, designed for doctoral degree seeking students, which will afford them significantly reduced tuition and a graduate assistantship. Fellowship includes monthly stipend, 75% tuition coverage and in-state tuition rate. Requirements include enrollment in a doctoral or doctoral-bound Engineering or Science program, 50% assistantship, full-time enrollment, unconditional admission and academic good standing. New students in either a doctoral or doctoral-bound program may hold the fellowship for up to five years. Interested students should contact their department for more information.
					</p>
					
					<h5> GRADUATE  DEAN  DISSERTATION  FELLOWSHIP </h5>
					<p> This fellowship is intended to support doctoral students in the final stage of completing their doctoral dissertations. Fellowship includes a stipend and tuition at the in-state rate. Requirements include doctoral or doctoral-bound summer enrollment, good academic standing, and being at the final stage of dissertation work. These awards will be offered to doctoral students with approved dissertation proposals or prospectuses who have completed all or most of the research needed to complete their dissertations. These students’ efforts should therefore be focused largely on writing their dissertations. Award recipients may not hold any other forms of employment during fellowship term. Interested students must apply through their college or school, and not directly to the Office of Graduate Studies
					</p>
        
	</div>


     
      
	</div><!-- 
 <footer>
      <ul id="list">
                        <li id="social" ><a  href="https://www.facebook.com/utarlington/" class="fa fa-facebook"></a></li>
                        <li id="social"><a  href="https://twitter.com/utarlington?lang=en" class="fa fa-twitter"></a></li>
                        <li id="social"><a  href="https://www.linkedin.com/school/university-of-texas-at-arlington/" class="fa fa-linkedin"></a></li>
                  </ul>
            <p>Copyright &copy; Research@UTA</p> 
                  <a href="mailto:research@uta.com">research@uta.com</a>
            </footer> -->
	</body>
	</html>