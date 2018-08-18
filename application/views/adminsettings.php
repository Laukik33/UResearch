<!DOCTYPE html>
<html>
<!-- 
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Research At UTA</title>
	<link rel="stylesheet" type="text/css" href="css/researchatuta.css">
      
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
		<div class="column rightadmin">
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
            	<h2 class="admin">ADMINISTRATOR PRIVILEGES</h2>

        <h3 class="admin">GRANTS</h3>
        
        <?php echo form_open('index.php/test/view_grants');?>

        <p class="admin">CREATE, UPDATE and DELETE the grants of any research project on the campus.
          
           </p>
           <br>
           <input class="button" type= "Submit" value="GRANTS"/> </form>

        <h3 class="admin">LAB</h3>
        <?php echo form_open('index.php/test/view_labs');?>

        <p class="admin">CREATE, UPDATE and DELETE the lab of any research housing on campus.
          
           </p>
           <br>
           <input class="button" type= "Submit" value="LABS"/></form>


        <h3 class="admin">FACULTY</h3>
        <?php echo form_open('index.php/test/view_faculty');?>
        <p class="admin">CREATE, UPDATE and DELETE the details of any faculty working on campus.
          
           </p>
           <br>
           <input class="button" type= "Submit" value="FACULTY"/></form>

        <h3 class="admin">STUDENT</h3>
        <?php echo form_open('index.php/test/view_students');?>
        <p class="admin">CREATE, UPDATE and DELETE the details of any student working/studying on campus.
         
          </p>
           <br>
           <input class="button" type= "Submit" value="STUDENT"/></form>

        <h3 class="admin">RESEARCH PROJECT</h3>
        <?php echo form_open('index.php/test/view_projects');?>
        <p class="admin">CREATE, UPDATE and DELETE the details of any project taking place on the campus.
          
           </p>
           <br>
           <input class="button" type= "Submit" value="RESEARCH"/></form>
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