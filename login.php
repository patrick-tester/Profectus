<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>FELLOWSHIP PROGRAM OF ABHYUDAY IIT BOMBAY</title>
	<link rel="shortcut icon" type="image/x-icon" href="img/logo1.png" />
	<link rel="stylesheet" type="text/css" href="style.css">
	 <link href="https://fonts.googleapis.com/css?family=Convergence|Pathway+Gothic+One|Rosario" rel="stylesheet">
	 <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
	 
	<style>
	#logo4{
	width:20%;
	}
	#mainheading{
	margin-top:-30px;
	font-family: 'Arial';
	}
	@media screen and (max-width:1280px) {
	
	#logo4{
	width:60%;
	}
	#mainheading{
	margin-top:-20px;
	}
	
	#mainheading{
	 font-size:70px;
	 }
	 
	#member{
	font-size:40px;
	}
	#mainheading{
	 font-size:50px;
	 font-family: 'Arial';
	 }
	 
	#subheading{
	 font-size:16px;
	 }
	 #sub{
	 font-size:60px;
	 
	 }
	
	}
	.formwidth{width: 30%;}
	@media screen and (max-width: 1280px ){
		.formwidth{width: 90%;}
	}
	</style>
</head>
<body>
    
     <div id="heading" >
     <img id="logo4" src="logo.png" />
     
     <p id="mainheading"><b>PROFECTUS 2020-2021</b></p>
      <p id="subheading">FELLOWSHIP PROGRAM OF ABHYUDAY IIT BOMBAY</p>
      </div>
      
        <div class="content1">
         
          <p>The fellowship program of Abhyuday which gives youth the opportunity to engage themselves in social work by working with NGOs, social        startups and alumni of IIT Bombay working in this field. Fellowships focuses on providing an insight into various sectors in the field of 
           social work 
          whilst providing a valuable output for the society. The work students do in their fellowships ranges hugely. It includes communication, impact 
          analysis, fundraising, planning and organizing support groups, work with coalition groups, help with grant writing and other profiles which are 
          important in socially impactful organisation. Fellows work under the direct supervision of professional social workers or social leaders who have extensive experience in the field.</p>
          </div>

	<div class="header formwidth">
		<h3 id="sub" style="letter-spacing: 1px;">LOGIN</h3>
	</div>
	
	<form method="post" action="login.php" class="formwidth">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" placeholder="Username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password" placeholder="Password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<!-- <button type="button" class="btn" name="login_user">Login</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
			<button type="reset"  class="btn" name="">Reset</button>
		</div>
		<p id="member">
			Haven't registered yet? <a href="register.php">Sign up</a>
		</p>
	</form>

<br>
<div class="content1" style="background: #5F9EA0;color:white;">
 for more details, contact<br><br>
Shivani Bagri<br>9326981828<br>shivani.abhyuday@gmail.com<br>
<br>Dhanpat Singh Meena<br>7400352076<br>dhanpat.abhyuday@gmail.com<br><br>
Events and Fellowships Managers,
Abhyuday, IIT Bombay</div>
<br>
</body>
</html>