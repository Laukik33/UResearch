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
    <div class="column rightlab">
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
                    <h2>LAB  DETAILS</h2>
        <h3> CREATE LABS</h3>
        <?php echo form_open('index.php/test/insert_labs');?>
         <label>LAB ID:</label>
          <input type="text" name="labid" required="required"/>
          <br>
        
          <label> LAB NAME:</label>
          <input type="text" name="labname" required="required"/>
           <br>
          
          <label> EMAIL:</label>
          <input type="email" name="email" required="required" />
           <br>
           
          <label>DIRECTOR:</label>
          <input type="text" name="director" required="required" />
           <br>
           
            <label> ADDRESS:</label>
          <textarea name="address" required="required" rows="6"> </textarea>
           <br>
          
            <label>PHONE NO:</label>
          <input type="text" name="phone_no" required="required" />
           <br>
        
            <label>WEBSITE:</label>
          <input type="text" name="website" required="required" />
           <br>
           

               <input type= "Submit" value="REGISTER"/>  <input type="Reset"  value="CANCEL"/>
       </p>
      </form>
      <hr>
      
        <h3> UPDATE LABS</h3>
        <?php echo form_open('index.php/test/update_labs');?>
         <label>LAB ID:</label>
          <input type="text" name="labid" required="required"/>
          <br>
        
          <label> LAB NAME:</label>
          <input type="text" name="labname" required="required"/>
           <br>
          
          <label> EMAIL:</label>
          <input type="email" name="email" required="required" />
           <br>
           
          <label>DIRECTOR:</label>
          <input type="text" name="director" required="required" />
           <br>
           
            <label> ADDRESS:</label>
          <textarea name="address" required="required" rows="6"> </textarea>
           <br>
          
            <label>PHONE NO:</label>
          <input type="text" name="phone_no" required="required" />
           <br>
        
            <label>WEBSITE:</label>
          <input type="text" name="website" required="required" />
           <br>
           

               <input type= "Submit" value="UPDATE"/>  <input type="Reset"  value="CANCEL"/>
       </p>
      </form>
          <hr>
        <h3> DELETE LABS</h3>
        <?php echo form_open('index.php/test/delete_labs');?>
         <label>LAB ID:</label>
          <input type="text" name="labid" required="required" />
           <br>
           

               <input type= "Submit" value="DELETE"/>  <input type="Reset"  value="CANCEL"/>
       </p>
      </form>
        
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