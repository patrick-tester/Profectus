<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	
	<link rel="shortcut icon" type="image/x-icon" href="img/logo1.png" />
	
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Convergence|Pathway+Gothic+One|Rosario" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	
	<style>
	#logo4{
	width:20%;
	}
	#sop{
	padding-left:120px;
	}
	#format{
	 font-size:15px;
	}
	#reg1{
	margin-top:-40px;
	}
	
	@media screen and (max-width: 1280px){
        #reg{font-size: 60px;}
    }
    .col-md-6{width: 50%; float: left;}
    @media screen and (max-width: 1280px){
    	.col-xs-12{width: 100%;}
    }
	</style>    
</head>
<body>
    <div class="header">
        <img id="logo4" src="logo.png" />
		<h2 style="letter-spacing: 1px;" id="reg1" >REGISTER</h2>
		<p style="font-size:15px;"><b>Please go through the following guidelines before registration</b></p>
	</div>
	<br>
	<div class="col-md-6 col-xs-12">
		<div class="guidediv" style="margin-top: 50px;">
			<p ><i class="fa fa-check-circle" aria-hidden="true"></i> This fellowship program is for IIT Bombay students only.</p>
		</div>
       	<br>
       	<div class="guidediv">
       		<h4>REGISTRATION</h4>
			<p><i class="fa fa-check-circle" aria-hidden="true"></i> Candidates should upload their one page resume.</p>
	 		<p ><i class="fa fa-check-circle" aria-hidden="true"></i> Candidate must upload their one page resume in the pdf format. </p>
          	<p><i class="fa fa-check-circle" aria-hidden="true"></i> File name must be <b>Roll_Number.pdf </b> where 'Roll_Number' is your IIT Bombay enrolled roll number.</p>
		</div>
       	<br>
		<div  class="guidediv">
        	<h4>PENALTY</h4>
			<p><i class="fa fa-check-circle" aria-hidden="true"></i> A report of each fellow would be submitted to the Dean of student affairs at the end of their fellowship tenure. 
        	</p><br>
	 		<p >If the candidate is found to be- </p>
          	<p>involved in any misconduct during the fellowship duration/
            have quit the fellowship any time before his/her fellowship duration ends/rejected the fellowship once accepted</p><br>
            <p><b>It would lead to bad remarks being noted in his/her final report sent to the dean of student affairs and candidate would be further penalized. </b></p>
		</div>
	</div>
   	
   	<div class="col-md-6 col-xs-12">
   		<div class="header">
			<h2 style="letter-spacing: 1px;" id="reg" >REGISTER</h2>
		</div>
	
		<form method="post" action="register.php" enctype="multipart/form-data">
			<?php include('errors.php'); ?>
			<div class="input-group">
				<label>Firstname</label>
				<input type="text" name="firstname" value="<?php echo $firstname; ?>">
			</div>

			<div class="input-group">
				<label>Lastname</label>
				<input type="text" name="lastname" value="<?php echo $lastname; ?>">
			</div>

			<div class="input-group">
				<label>Phone</label>
				<input type="text" name="phone" value="<?php echo $phone; ?>">
			</div>

			<div class="input-group">
				<label>Email</label>
				<input type="email" name="email" value="<?php echo $email; ?>">
			</div>
		
			<div class="input-group">
				<label>IITB Roll No</label>
				<input type="text" name="roll" value="<?php echo $roll; ?>">
			</div>
	
	      	<div class="input-group">
                <label>Department</label>
                <select name="department" >
                    <option value="Aerospace Engineering">Aerospace Engineering</option>
                    <option value="Biosciences and Bioengineering">Biosciences and Bioengineering</option>
                    <option value="Centre of Studies in Resources Engineering (CSRE)">Centre of Studies in Resources Engineering (CSRE)</option>
                    <option value="Chemical Engineering">Chemical Engineering</option>
                    <option value="Chemistry">Chemistry</option>                          
                    <option value="Civil Engineering">Civil Engineering</option>
                    <option value="Computer Science & Engineering">Computer Science & Engineering</option>
                    <option value="Earth Sciences">Earth Sciences</option>
                    <option value="Electrical Engineering">Electrical Engineering</option>
                    <option value="Energy Science and Engineering">Energy Science and Engineering</option>
                    <option value="Environmental Science and Engineering">Environmental Science and Engineering</option>
                    <option value="Humanities & Social Science">Humanities & Social Science</option>
                    <option value="Industrial Design Centre">Industrial Design Centre</option>
                    <option value="Industrial Engineering and Operations Research(IEOR)">Industrial Engineering and Operations Research(IEOR)</option>
                    <option value="Mathematics">Mathematics</option>
                    <option value="Mechanical Engineering">Mechanical Engineering</option>
                    <option value="Metallurgical Engineering & Materials Science">Metallurgical Engineering & Materials Science</option>
                    <option value="System and Control Engineering">System and Control Engineering</option>
                    <option value="Physics">Physics</option>
                    <option value="Shailesh J. Mehta School of Managemen">Shailesh J. Mehta School of Managemen</option>
                </select>
         	</div>
           	
           	<div class="input-group">
               	<label>Graduation</label>
                <select name="year">
                    <option value="Undergraduate(UG)">Undergraduate(UG) </option>
                    <option value="Postgraduate(PG)">Postgraduate(PG)</option>
                    <option value="Doctorate(PhD)">Doctorate(PhD)</option>
                </select>
        	</div>

			<div class="input-group">
				<label>Username</label>
				<input type="text" name="username" value="<?php echo $username; ?>">
			</div>
		
			<div class="input-group">
				<label>Password</label>
				<input type="password" name="password_1">
			</div>
			
			<div class="input-group">
				<label>Confirm password</label>
				<input type="password" name="password_2">
			</div>
		
			<div class="input-group">
				<label>Upload Resume</label>
				<p style="font-size:15px;">file name must be YourRollNumber.pdf (eg.150020037.pdf)</p>
				<input type="file" name="file">
				<p style="font-size:15px;">If you don't have a resume, refer to these <a href="https://docs.google.com/document/d/1TRY77T1vGTVPygFkr3t3m6dY8mjAURvBTVNa-iTmXzM/edit?usp=sharing"><b>guidelines</b></a> and fill up the <a href="https://docs.google.com/document/d/1ObH1m9bmnqXbTH_-ZQJAEc5FEBKeiVE52XMuvvf1Toc/edit?usp=drivesdk"><b>template</b></a></p>
				<p style="font-size:15px;">Click for <a href="template_Resume.pdf" download="sample_resume">sample resume</a></p>
			</div>
            
            <div class="input-group">
				<!-- <button type="submit" class="btn" name="reg_user">Register</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
				<button type="button" class="btn" name="reg_user">Register</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<button type="reset"  class="btn" name="">Reset</button>
			</div>
			<p>
				Already registered? <a href="login.php">Sign in</a>
			</p>
		</form>
		<br>
		<br>
   	</div>
	</body>
</html>