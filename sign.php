<?php
session_start();
$roll=$_SESSION['username'];
if(empty($roll))
{
header('location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Abhyuday</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo1.png" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Convergence|Pathway+Gothic+One|Rosario" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    <div id="heading" style="margin-top: 2px;">
        <img id="logo4" src="logo.png" />
        <p id="mainheading"><b>PROFECTUS 2020-2021</b></p>
        <p id="subheading">FELLOWSHIP PROGRAM OF ABHYUDAY IIT BOMBAY</p>
 
        <?php  if (isset($_SESSION['username'])) : ?>
        <div style="padding-bottom:20px">
            <div style="float:left">
                Welcome <strong><?php echo $_SESSION['username']; ?></strong>
            </div>
            <div style="float:right">
                <a href="index.php" style="color: white; margin-right: 2vw;">Home</a>
                <a href="index.php?logout='1'" style="color:white;">logout</a>
            </div>
        </div>
        <?php endif ?>
    </div>

    <div id="input-group" style="margin-top: 10px;">
        <form action="sign_1.php" method="post" class ="form" enctype="multipart/form-data"><br>
            <input type="hidden" value="<?php echo $_SESSION['username'];?>" name="username">
            <div id="input-group">
                <label>Company : </label>
                <select name="cname">
                    <option value="noselect"><-- Select Company Name --></option>
                    <option value="Silver Inning Foundation, Mumbai">Silver Inning Foundation, Mumbai - Social Media Intern</option>
                    <option value="AAN CHARITABLE TRUST">AAN CHARITABLE TRUST - Public Relations Intern</option>
                    <option value="Saheli HIV AIDS Karyakarta Sangh">Saheli HIV AIDS Karyakarta Sangh</option>
                    <option value="Aadhar Bahuudeshiy Sevabhavi Pratishthan - PW">Aadhar Bahuudeshiy Sevabhavi Pratishthan - Proposal Writing Intern</option>
                    <option value="Aadhar Bahuudeshiy Sevabhavi Pratishthan - WD">Aadhar Bahuudeshiy Sevabhavi Pratishthan - Web Development Intern</option>
                    <option value="CRY - Child Rights And You - CW">CRY - Child Rights And You - Content Development Intern</option>
                    <option value="Ankur Pratishthan">Ankur Pratishthan - Intern</option>
                    <option value="Ankur Pratishthan - AD">Ankur Pratishthan - App Dev Intern</option>
                    <option value="ACORN FOUNDATION, Project: Compound 13 Lab">ACORN FOUNDATION, Project: Compound 13 Lab - Intern</option>
                    <option value="Pranyas Development Foundation - DM">Pranyas Development Foundation - Digital Marketing Intern</option>
                    <option value="Pranyas Development Foundation - WD">Pranyas Development Foundation - Web Development Intern</option>
                    <option value="Pranyas Development Foundation - GDI">Pranyas Development Foundation - Graphic Designing Intern</option>
                    <option value="Pranyas Development Foundation - CW">Pranyas Development Foundation - Content Writing Intern</option>
                    <option value="Pranyas Development Foundation - GVDI">Pranyas Development Foundation - Graphic Video Designing Intern</option>
                    <option value="SAHER(Society for Awareness,Harmony and Equal Rights)">SAHER(Society for Awareness,Harmony and Equal Rights) - Intern</option>
                    <option value="Samagra Foundation">Samagra Foundation</option>
                    <option value="YOUTH FOR UNITY AND VOLUNTARY ACTION ( YUVA)">YOUTH FOR UNITY AND VOLUNTARY ACTION ( YUVA)</option>
                    <option value="Confederation of Empowerment Initiatives (CEI) - DM">Confederation of Empowerment Initiatives (CEI) - Digital Marketing</option>
                    <option value="Yuva Parivartan - CW">Yuva Parivartan - Content Writing Intern</option>
                    <option value="A Hundred Hand - GD">A Hundred Hand - Graphic Design Intern</option>
                    <option value="A Hundred Hand - DC">A Hundred Hand - Data Collection Intern</option>
                    <option value="A Hundred Hand - CW">A Hundred Hand - Content Writing Intern</option>
                    <option value="A Hundred Hand - DM">A Hundred Hand - Marketing Intern</option>
                    <option value="Navjyoti India Foundation - DM">Navjyoti India Foundation - Marketing Intern</option>
                    <option value="AWOO Foundation">AWOO Foundation</option>
                    <option value="UNICEF India">UNICEF India</option>
                
                </select>
            </div>
            <br>
            <p id="input-group">
                <input type="radio" name="sign" value="sign" checked> Sign<br>
                <input type="radio" name="sign" value="unsign" > Unsign<br>   
            </p> 
            <div class="input-group" style="display:none;">
                <label>Upload SoP</label>
                <p style="font-size:15px;">file name must be Your_RollNumber.pdf/doc (eg.150020037.pdf/doc)</p>
                <input type="file" name="file">
            </div>
            <br>
            <input type="hidden" name="hidden" value="1">
            <!-- <button type="submit" class="btn">Submit</button> -->
            <button type="button" class="btn">Submit</button>
        </form>

    </div>
    <style>
    #logo4{
    width:20%;
    }
    #mainheading{
    margin-top:-30px;
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
     }
      
    #subheading{
     font-size:16px;
     }
     #sub{
     font-size:60px;
      
     }
     
    }
    </style>
</body>
</html>