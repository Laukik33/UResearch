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
	

	<div class="clearfix">
		
		<div class="column leftlogin">
            	<body bgcolor="ivory">

	

	<div class = "logoimage">
		<img src = "<?php echo base_url('assets/Images/utalogin.jpg')?>">
	</div><br>

	<p>Required fields are marked with an asterik &#42;.</p><br>
	<?php echo form_open('index.php/test/login_data');?>

	<label for="Name">*UTA ID:</label>
	<input type="text" name="utaid" id="Name"
	required="required">
	<br>

	<label for="myName">*Password:</label>
	<input type="text" name="password" id="myName"
	required="required">
	<br>

	<input type="submit" value="Login" name="Login">
	<br><hr>
</form>

	<p>Required fields are marked with an asterik &#42;.</p>

	<?php echo form_open('index.php/test/create_user');?>

	<label for="FirstName">*First Name:</label>
	<input type="text" name="myfName" 
	required="required">
	<br>

	<label for="LastName">*Last Name:</label>
	<input type="text" name="mylName" 
	required="required">
	<br>

	<label for="myEmail">*E-mail:</label>
	<input type="email" name="myEmail"
	required="required">
	<br>


	<label for="myPhone">*Phone:</label>
	<input type="text" name="myPhone" 
	required="required">
	<br>


	<label for="password">Password:</label>
	<input type="password" name="password" >
	<br>

	<label for="UTA ID">UTA ID:</label>
	<input type="text" name="utaid" >
	<br>

	<input type="radio" name="user" value="Faculty"> Faculty
	<input type="radio" name="user" value="Student"> Student 
	<br>

	<input type="Submit" value="Register">
    <input type="Reset" value="Cancel" >
    </form>

</p>
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