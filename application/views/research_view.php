<!DOCTYPE html>
<html>
<!-- 
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Research At UTA</title>
	<link rel="stylesheet" type="text/css" href="css\researchatuta.css">
      
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
		<div class="column rightresearch_view">
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

			<img src = "<?php echo base_url('assets/Images/research.jpg')?>">

            	<h2> Research Projects <h2>

				<br>
				<table>
    <thead>
        <tr>
            <th><b>Project Name</b></th>
            <th><b>Faculty Name</b></th>
            <th><b>Technology</b></th>
            <th><b>Area Of Research</b></th>
            <th><b>Lab Name</b></th>
            <th><b>Grants</b></th>
        </tr>
    </thead>
    <tbody>
        <!--Use a while loop to make a table row for every DB row-->
       <?php  
       foreach($details as $value){?>
        <tr>
            <!--Each table column is echoed in to a td cell-->
            <td><?php echo $value->proj_name;?></td>
            <td><?php echo $value->faculty_name;?></td>
            <td><?php echo $value->technology;?></td>
            <td><?php echo $value->area_of_research;?></td>
            <td><?php echo $value->lab_name;?></td>
            <td><?php echo $value->grants;?></td>
        </tr>
   	<?php }?> 
		       
    </tbody>
</table>
        
	</div>


     
      
	</div>
 <!-- <footer>
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