<?php 
    // session_start(); 

    // if (!isset($_SESSION['username'])) {
    //     $_SESSION['msg'] = "You must log in first";
    //     header('location: login.php');
    // }

    // if (isset($_GET['logout'])) {
    //     session_destroy();
    //     unset($_SESSION['username']);
    //     header("location: login.php");
    // }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
     <link rel="shortcut icon" type="image/x-icon" href="img/logo1.png" />
    <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="table.css">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
        <script type="text/javascript" src="app.js"></script>
       <link href="https://fonts.googleapis.com/css?family=Convergence|Pathway+Gothic+One|Rosario" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
       
        <style>
        #logo4{
	width:40%;
	}
	#phome{
	margin-top:-40px;}
        .date{
         font-family: 'Arial';
         }
         caption{
          padding-bottom:25px;
          }
          
          
          .cente{
           text-align:center;
           }
        </style>
</head>

<body ng-app="myApp" ng-controller="orderCtrl">
<div class="header">
    <img id="logo4" src="logo.png" style="width: 20%;" />
    <h2 id="phome">Home Page</h2>
</div>
<div class="content">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
    <div class="error success" >
        <h3>
            <?php 
                echo $_SESSION['success']; 
                unset($_SESSION['success']);
            ?>
        </h3>
    </div>
    <?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    <div style="padding-bottom:20px">
        <div style="float:left">
            Welcome <strong><?php echo $_SESSION['username']; ?></strong>
        </div>
        <div style="float:right">
            <a href="index.php?logout='1'" style="color:red;">logout</a>
        </div>
    </div>
    <?php endif ?>
</div>
     
<div ng-show="tab==0" >
    <table class="bordered" ng-show="i==0">
        <thead>
            <tr>
                <th style="text-align:center">Sr.No.</th>        
                <th style="text-align:center">Company Name</th>
                <th style="text-align:center">JAF</th>
                <th style="text-align:center">Closes on</th>
                <th style="text-align:center">Detail</th>
            </tr>
        </thead>
        <tr>
            <td style="text-align:center" class="date">1</td>        
            <td style="text-align:center">Silver Inning Foundation, Mumbai</td>
            <td style="text-align:center"><a href="" ng-click="tab=1" >Social Media Intern</td>
            <td style="text-align:center" class="date">21/06/20</td>  
            <td style="text-align:center"><a href="sign.php" >Click here to sign/unsign</a></td>
        </tr>
        <tr>
            <td style="text-align:center" class="date">2</td>        
            <td style="text-align:center">AAN CHARITABLE TRUST</td>
            <td style="text-align:center"><a href="" ng-click="tab=2" >Public Relations Intern</td>
            <td style="text-align:center" class="date">21/06/20</td>  
            <td style="text-align:center"><a href="sign.php" >Click here to sign/unsign</a></td>
        </tr>
        <tr>
            <td style="text-align:center" class="date">3</td>        
            <td style="text-align:center">Saheli HIV AIDS Karyakarta Sangh</td>
            <td style="text-align:center"><a href="" ng-click="tab=3" >Intern</td>
            <td style="text-align:center" class="date">21/06/20</td>  
            <td style="text-align:center"><a href="sign.php" >Click here to sign/unsign</a></td>
        </tr>
        <tr>
            <td style="text-align:center" class="date">4</td>        
            <td style="text-align:center">Aadhar Bahuudeshiy Sevabhavi Pratishthan</td>
            <td style="text-align:center"><a href="" ng-click="tab=4" >Proposal Writing Intern</td>
            <td style="text-align:center" class="date">21/06/20</td>  
            <td style="text-align:center"><a href="sign.php" >Click here to sign/unsign</a></td>
        </tr>

         <tr>
            <td style="text-align:center" class="date">5</td>        
            <td style="text-align:center">Aadhar Bahuudeshiy Sevabhavi Pratishthan</td>
            <td style="text-align:center"><a href="" ng-click="tab=5" >Web Development Intern</td>
            <td style="text-align:center" class="date">21/06/20</td>  
            <td style="text-align:center"><a href="sign.php" >Click here to sign/unsign</a></td>
        </tr>
         <tr>
            <td style="text-align:center" class="date">6</td>        
            <td style="text-align:center">CRY - Child Rights And You</td>
            <td style="text-align:center"><a href="" ng-click="tab=6" >Content Development Intern</td>
            <td style="text-align:center" class="date">21/06/20</td>  
            <td style="text-align:center"><a href="sign.php" >Click here to sign/unsign</a></td>
        </tr>

        <tr>
            <td style="text-align:center" class="date">7</td>        
            <td style="text-align:center">Ankur Pratishthan</td>
            <td style="text-align:center"><a href="" ng-click="tab=7" >Intern</td>
            <td style="text-align:center" class="date">21/06/20</td>  
            <td style="text-align:center"><a href="sign.php" >Click here to sign/unsign</a></td>
        </tr>
        
        <tr>
            <td style="text-align:center" class="date">8</td>        
            <td style="text-align:center">Ankur Pratishthan</td>
            <td style="text-align:center"><a href="" ng-click="tab=8" >App Dev Intern</td>
            <td style="text-align:center" class="date">21/06/20</td>  
            <td style="text-align:center"><a href="sign.php" >Click here to sign/unsign</a></td>
        </tr>



        <tr>
            <td style="text-align:center" class="date">9</td>        
            <td style="text-align:center">ACORN FOUNDATION, Project: Compound 13 Lab</td>
            <td style="text-align:center"><a href="" ng-click="tab=9" >Intern</td>
            <td style="text-align:center" class="date">21/06/20</td>  
            <td style="text-align:center"><a href="sign.php" >Click here to sign/unsign</a></td>
        </tr>

        <tr>
            <td style="text-align:center" class="date">10</td>        
            <td style="text-align:center">Pranyas Development Foundation</td>
            <td style="text-align:center"><a href="" ng-click="tab=10" >Digital Marketing Intern</td>
            <td style="text-align:center" class="date">21/06/20</td>  
            <td style="text-align:center"><a href="sign.php" >Click here to sign/unsign</a></td>
        </tr>

        <tr>
            <td style="text-align:center" class="date">11</td>        
            <td style="text-align:center">Pranyas Development Foundation</td>
            <td style="text-align:center"><a href="" ng-click="tab=11" >Web Development Intern</td>
            <td style="text-align:center" class="date">21/06/20</td>  
            <td style="text-align:center"><a href="sign.php" >Click here to sign/unsign</a></td>
        </tr>       

         <tr>
            <td style="text-align:center" class="date">12</td>        
            <td style="text-align:center">Pranyas Development Foundation</td>
            <td style="text-align:center"><a href="" ng-click="tab=12" >Graphic Designing Intern</td>
            <td style="text-align:center" class="date">21/06/20</td>  
            <td style="text-align:center"><a href="sign.php" >Click here to sign/unsign</a></td>
        </tr>        

        <tr>
            <td style="text-align:center" class="date">13</td>        
            <td style="text-align:center">Pranyas Development Foundation</td>
            <td style="text-align:center"><a href="" ng-click="tab=13" >Content Writing Intern</td>
            <td style="text-align:center" class="date">21/06/20</td>  
            <td style="text-align:center"><a href="sign.php" >Click here to sign/unsign</a></td>
        </tr>        

        <tr>
            <td style="text-align:center" class="date">14</td>        
            <td style="text-align:center">Pranyas Development Foundation</td>
            <td style="text-align:center"><a href="" ng-click="tab=14" >Graphic Video Designing Intern</td>
            <td style="text-align:center" class="date">21/06/20</td>  
            <td style="text-align:center"><a href="sign.php" >Click here to sign/unsign</a></td>
        </tr>

        <tr>
            <td style="text-align:center" class="date">15</td>        
            <td style="text-align:center">SAHER(Society for Awareness,Harmony and Equal Rights)</td>
            <td style="text-align:center"><a href="" ng-click="tab=15" >Intern</td>
            <td style="text-align:center" class="date">21/06/20</td>  
            <td style="text-align:center"><a href="sign.php" >Click here to sign/unsign</a></td>
        </tr>

        <tr>
            <td style="text-align:center" class="date">16</td>        
            <td style="text-align:center">Samagra Foundation</td>
            <td style="text-align:center"><a href="" ng-click="tab=16" >Intern</td>
            <td style="text-align:center" class="date">21/06/20</td>  
            <td style="text-align:center"><a href="sign.php" >Click here to sign/unsign</a></td>
        </tr>

        <tr>
            <td style="text-align:center" class="date">17</td>        
            <td style="text-align:center">YOUTH FOR UNITY AND VOLUNTARY ACTION ( YUVA)</td>
            <td style="text-align:center"><a href="" ng-click="tab=17" >Intern</td>
            <td style="text-align:center" class="date">21/06/20</td>  
            <td style="text-align:center"><a href="sign.php" >Click here to sign/unsign</a></td>
        </tr>

        <tr>
            <td style="text-align:center" class="date">18</td>        
            <td style="text-align:center">Confederation of Empowerment Initiatives (CEI)</td>
            <td style="text-align:center"><a href="" ng-click="tab=18" >Digital Marketing Intern</td>
            <td style="text-align:center" class="date">21/06/20</td>  
            <td style="text-align:center"><a href="sign.php" >Click here to sign/unsign</a></td>
        </tr>

        <tr>
            <td style="text-align:center" class="date">19</td>        
            <td style="text-align:center">Yuva Parivartan, A Project of Kherwadi Social Welfare Association</td>
            <td style="text-align:center"><a href="" ng-click="tab=19" >Content Writing Intern</td>
            <td style="text-align:center" class="date">21/06/20</td>  
            <td style="text-align:center"><a href="sign.php" >Click here to sign/unsign</a></td>
        </tr>

        <tr>
            <td style="text-align:center" class="date">20</td>        
            <td style="text-align:center">A Hundred Hand</td>
            <td style="text-align:center"><a href="" ng-click="tab=20" >Graphic Design Intern</td>
            <td style="text-align:center" class="date">21/06/20</td>  
            <td style="text-align:center"><a href="sign.php" >Click here to sign/unsign</a></td>
        </tr>

        <tr>
            <td style="text-align:center" class="date">21</td>        
            <td style="text-align:center">A Hundred Hand</td>
            <td style="text-align:center"><a href="" ng-click="tab=21" >Data Collection Intern</td>
            <td style="text-align:center" class="date">21/06/20</td>  
            <td style="text-align:center"><a href="sign.php" >Click here to sign/unsign</a></td>
        </tr>

        <tr>
            <td style="text-align:center" class="date">22</td>        
            <td style="text-align:center">A Hundred Hand</td>
            <td style="text-align:center"><a href="" ng-click="tab=22" >Content Writing Intern</td>
            <td style="text-align:center" class="date">21/06/20</td>  
            <td style="text-align:center"><a href="sign.php" >Click here to sign/unsign</a></td>
        </tr>

        <tr>
            <td style="text-align:center" class="date">23</td>        
            <td style="text-align:center">A Hundred Hand</td>
            <td style="text-align:center"><a href="" ng-click="tab=23" >Marketing Intern</td>
            <td style="text-align:center" class="date">21/06/20</td>  
            <td style="text-align:center"><a href="sign.php" >Click here to sign/unsign</a></td>
        </tr>

        <tr>
            <td style="text-align:center" class="date">24</td>        
            <td style="text-align:center">Navjyoti India Foundation</td>
            <td style="text-align:center"><a href="" ng-click="tab=24" >Digital Marketing Intern</td>
            <td style="text-align:center" class="date">21/06/20</td>  
            <td style="text-align:center"><a href="sign.php" >Click here to sign/unsign</a></td>
        </tr>
        
        <tr>
            <td style="text-align:center" class="date">25</td>        
            <td style="text-align:center">AWOO Foundation</td>
            <td style="text-align:center"><a href="" ng-click="tab=25" >Intern</td>
            <td style="text-align:center" class="date">21/06/20</td>  
            <td style="text-align:center"><a href="sign.php" >Click here to sign/unsign</a></td>
        </tr>

        <tr>
            <td style="text-align:center" class="date">26</td>        
            <td style="text-align:center">UNICEF India</td>
            <td style="text-align:center"><a href="" ng-click="tab=26" >Intern</td>
            <td style="text-align:center" class="date">21/06/20</td>  
            <td style="text-align:center"><a href="sign.php" >Click here to sign/unsign</a></td>
        </tr>

<!-- -------- -->
    </table>
</div>

<div ng-show="tab==1">
    <div style="margin-left: 5vw; margin-top:2vh;">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div> 
    <table class="bordered">
        <caption ><b>JAF of Silver Inning Foundation, Mumbai</b></caption>
    
        <tr>
            <td class="lables"><b>Website</b></td>
            <td><a href="http://silverinnings.in/" target="_blank" >http://silverinnings.in/</a></td>
        </tr> 
        <tr>
            <td class="lables"><b>About</b></td>
            <td>Silver Innings since 2008 is working towards creating Elder Friendly World where Ageing becomes a Positive and Rewarding Experience.</td>
        </tr>
        <tr>
            <td class="lables"><b>Stipend/month</b></td>
            <td class="date">INR 3000</td>
        </tr>
          
    </table>
    <div style="text-align:center">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div>
</div>








<div ng-show="tab==2">
    <div style="margin-left: 5vw; margin-top:2vh;">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div> 
    <table class="bordered">
        <caption ><b>JAF of AAN CHARITABLE TRUST</b></caption>
    
        <tr>
            <td class="lables"><b>Website</b></td>
            <td><a href="http://aanindia.in/aan/" target="_blank" >hhttp://aanindia.in/aan/</a></td>
        </tr> 
        <tr>
            <td class="lables"><b>About</b></td>
            <td>NON PROFIT ORGANISATION</td>
        </tr>
        <tr>
            <td class="lables"><b>Job Description</b></td>
            <td>Communications, Impact analysis, fundraising, Planning and organizing support groups, work with coalition groups, grant writing etc
            </td>
        </tr>  
        <tr>
            <td class="lables"><b>Departments</b></td>
            <td>Open for All</td>
        </tr> 
        <tr>
            <td class="lables"><b>Accommodation</b></td>
            <td>Not Provided</td>
        </tr>
        <tr>
            <td class="lables"><b>Stipend/month</b></td>
            <td class="date">INR 5000</td>
        </tr>
        <tr>
            <td class="lables"><b>Place of Posting</b></td>
            <td>WFH</td>
        </tr> 
        <tr>
            <td class="lables"><b>Duration</b></td>
            <td class="date">1 month</td>
        </tr>
        <tr>
            <td class="lables"><b>Selection Procedure</b></td>
            <td>resume shortlist and telephonic interview</td>
        </tr>
        <tr>
            <td class="lables"><b>Additional Information</b></td>
            <td>-
            </td>
        </tr>
    </table>
    <div style="text-align:center">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div>
</div>







<div ng-show="tab==3">
    <div style="margin-left: 5vw; margin-top:2vh;">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div> 
    <table class="bordered">
        <caption ><b>JAF of Saheli HIV AIDS Karyakarta Sangh </b></caption>
    
        <tr>
            <td class="lables"><b>Website</b></td>
            <td><a href="http://www.sahelisangh.org/
" target="_blank" >http://www.sahelisangh.org/
</a></td>
        </tr> 
        <tr>
            <td class="lables"><b>About</b></td>
            <td>Saheli Sangh is the only sex worker's collective working in Pune working for thier rights and health isuues.</td>
        </tr>
        <tr>
            <td class="lables"><b>Job Description</b></td>
            <td>Legal Research,Draft project proposals,Fundraising.

            </td>
        </tr>  
        <tr>
            <td class="lables"><b>Departments</b></td>
            <td>Open for All</td>
        </tr> 
        <tr>
            <td class="lables"><b>Accommodation</b></td>
            <td>Not Provided</td>
        </tr>
        <tr>
            <td class="lables"><b>Stipend/month</b></td>
            <td class="date">INR 3500</td>
        </tr>
        <tr>
            <td class="lables"><b>Place of Posting</b></td>
            <td>WFH</td>
        </tr> 
        <tr>
            <td class="lables"><b>Duration</b></td>
            <td class="date">1 month</td>
        </tr>
        <tr>
            <td class="lables"><b>Selection Procedure</b></td>
            <td>resume shortlist and telephonic interview</td>
        </tr>
        <tr>
            <td class="lables"><b>Additional Information</b></td>
            <td>-</td>
        </tr>
    </table>
    <div style="text-align:center">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div>
</div>









<div ng-show="tab==4">
    <div style="margin-left: 5vw; margin-top:2vh;">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div> 
    <table class="bordered">
        <caption ><b>JAF of Aadhar Bahuudeshiy Sevabhavi Pratishthan</b></caption>
    
       <!--  <tr>
            <td class="lables"><b>Website</b></td>
            <td><a href="http://www.abmsps.org/" target="_blank" >http://www.abmsps.org/</a></td>
        </tr>  -->
        <tr>
            <td class="lables"><b>About</b></td>
            <td>With the aim to enhance the standard of living of the rural people of Nanded district, Gram Aadhar Bahuudeshiy Sevabhavi Pratishthan was registered in 2006 under society’s registration act 1860 and Bombay public trust act 1950. The organization has its interventions in the field of education, women empowerment, environment, elderly, animal husbandry and skill development etc. Under these programs the organization has implemented variety of activities like providing tailoring training to adolescent girls, computer training to youth. It also runs an old age home with around 10 elderly inmates and also a community library with more than 400 books. For women empowerment the organization forms self-help groups of women and organizes different camps of SHG women and make them aware about their rights and duties. As a result of these camps, problems of drinking water and hygiene were solved with the initiative taken by SHGs. Mission Statement Education Education is an empowering tool every child must be equipped with. It plays a vital role in overall development of an individual, family and the society at large. Livelihood We aspire to make women from slums financially independent by building on their capacity to earn livelihood for their family. Alongside we provide vocational education programs to make youths employable. Causes Education Children Environment Skill Building Healthcare Equality Women Differently Abled Wellbeing & Mental Health Arts & Culture Seniors Peace & Justice Cities & Infrastructure</td>
        </tr>
        <tr>
            <td class="lables"><b>Job Description</b></td>
            <td>Proposal Writing
            </td>
        </tr>  
        <tr>
            <td class="lables"><b>Departments</b></td>
            <td>Open for All</td>
        </tr> 
        <tr>
            <td class="lables"><b>Accommodation</b></td>
            <td>Not Provided</td>
        </tr>
        <tr>
            <td class="lables"><b>Stipend/month</b></td>
            <td class="date">INR 1000</td>
        </tr>
        <tr>
            <td class="lables"><b>Place of Posting</b></td>
            <td>WFH</td>
        </tr> 
        <tr>
            <td class="lables"><b>Duration</b></td>
            <td class="date">1 month</td>
        </tr>
        <tr>
            <td class="lables"><b>Selection Procedure</b></td>
            <td>resume shortlist and telephonic interview</td>
        </tr>
        <tr>
            <td class="lables"><b>Additional Information</b></td>
            <td>-</td>
        </tr>
    </table>
    <div style="text-align:center">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div>
</div>










<div ng-show="tab==5">
    <div style="margin-left: 5vw; margin-top:2vh;">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div> 
    <table class="bordered">
        <caption ><b>JAF of Aadhar Bahuudeshiy Sevabhavi Pratishthan</b></caption>
    
       <!--  <tr>
            <td class="lables"><b>Website</b></td>
            <td><a href="http://www.abmsps.org/" target="_blank" >http://www.abmsps.org/</a></td>
        </tr>  -->
        <tr>
            <td class="lables"><b>About</b></td>
            <td>With the aim to enhance the standard of living of the rural people of Nanded district, Gram Aadhar Bahuudeshiy Sevabhavi Pratishthan was registered in 2006 under society’s registration act 1860 and Bombay public trust act 1950. The organization has its interventions in the field of education, women empowerment, environment, elderly, animal husbandry and skill development etc. Under these programs the organization has implemented variety of activities like providing tailoring training to adolescent girls, computer training to youth. It also runs an old age home with around 10 elderly inmates and also a community library with more than 400 books. For women empowerment the organization forms self-help groups of women and organizes different camps of SHG women and make them aware about their rights and duties. As a result of these camps, problems of drinking water and hygiene were solved with the initiative taken by SHGs. Mission Statement Education Education is an empowering tool every child must be equipped with. It plays a vital role in overall development of an individual, family and the society at large. Livelihood We aspire to make women from slums financially independent by building on their capacity to earn livelihood for their family. Alongside we provide vocational education programs to make youths employable. Causes Education Children Environment Skill Building Healthcare Equality Women Differently Abled Wellbeing & Mental Health Arts & Culture Seniors Peace & Justice Cities & Infrastructure</td>
        </tr>
        <tr>
            <td class="lables"><b>Job Description</b></td>
            <td>Web Development
            </td>
        </tr>  
        <tr>
            <td class="lables"><b>Departments</b></td>
            <td>Open for All</td>
        </tr> 
        <tr>
            <td class="lables"><b>Accommodation</b></td>
            <td>Not Provided</td>
        </tr>
        <tr>
            <td class="lables"><b>Stipend/month</b></td>
            <td class="date">INR 3000</td>
        </tr>
        <tr>
            <td class="lables"><b>Place of Posting</b></td>
            <td>WFH</td>
        </tr> 
        <tr>
            <td class="lables"><b>Duration</b></td>
            <td class="date">1 month</td>
        </tr>
        <tr>
            <td class="lables"><b>Selection Procedure</b></td>
            <td>resume shortlist and telephonic interview</td>
        </tr>
        <tr>
            <td class="lables"><b>Additional Information</b></td>
            <td>-</td>
        </tr>
    </table>
    <div style="text-align:center">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div>
</div>








<div ng-show="tab==6">
    <div style="margin-left: 5vw; margin-top:2vh;">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div> 
    <table class="bordered">
        <caption ><b>JAF of CRY - Child Rights And You</b></caption>
    
        <tr>
            <td class="lables"><b>Website</b></td>
            <td><a href="https://www.cry.org/
" target="_blank" >https://www.cry.org/
</a></td>
        </tr> 
        <!-- <tr>
            <td class="lables"><b>About</b></td>
            <td>We are solar micro grid company focusing rural regions focusing UN's SDG 7 goal</td>
        </tr> -->
        <tr>
            <td class="lables"><b>Job Description</b></td>
            <td>We need IIT students to work on fun learning model/ design game based learning model for govt school children std 1st to 8th. Educationalist will be working along with students. We need IIT students expertise in designing games.
            </td>
        </tr>  
        <tr>
            <td class="lables"><b>Departments</b></td>
            <td>Open for All</td>
        </tr> 
        <tr>
            <td class="lables"><b>Accommodation</b></td>
            <td>WFH</td>
        </tr>
        <tr>
            <td class="lables"><b>Stipend/month</b></td>
            <td class="date">NA</td>
        </tr>
        <tr>
            <td class="lables"><b>Place of Posting</b></td>
            <td>WFH</td>
        </tr> 
        <tr>
            <td class="lables"><b>Duration</b></td>
            <td class="date">1 month</td>
        </tr>
        <!-- <tr>
            <td class="lables"><b>Selection Procedure</b></td>
            <td>resume shortlist and skype interview</td>
        </tr> -->
        <tr>
            <td class="lables"><b>Additional Information</b></td>
            <td>-</td>
        </tr>
    </table>
    <div style="text-align:center">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div>
</div>





<div ng-show="tab==7">
    <div style="margin-left: 5vw; margin-top:2vh;">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div> 
    <table class="bordered">
        <caption ><b>JAF of Ankur Pratishthan</b></caption>
    
        <tr>
            <td class="lables"><b>Website</b></td>
            <td><a href="http://www.ankurpratishthan.org/" target="_blank" >http://www.ankurpratishthan.org/ </a></td>
        </tr> 
        <tr>
            <td class="lables"><b>About</b></td>
            <td>Ankur Pratishthan is a diverse collective of individuals from various professional backgrounds strung together through similar ideas and passion for making a catalytic change in the lives of destitute children. Over the last decade, Ankur has actively been developing continuously evolving indigenous programs to address the collective mission of the organisation – to forward the cause of skill-based development of orphans along with their holistic development – and to successfully help them integrate into the mainstream job market and thereby provide the country with enabled, energetic and evolved youth.</td>
        </tr>
        <tr>
            <td class="lables"><b>Job Description</b></td>
            <td>Academic Modules Developer(Number of fellows : 2, Stipend : Rs 5000 each) We are focused on conceptual understanding of topics from academics throgh different activities/techniques. The Academic Module Developer will design the module in such a way that it covers the important topics from syllabus in an interesting way. I. Should contribute in module/syllabus development for subjects like maths and science for varied age group. (6 - 14 years). II. Assignments for each module should be developed. III. Examples for the topics should be relevant to day to day activities. IV. Module development for special workshops like "Robotics and AI for kids" 
            </td>
        </tr>  
        <tr>
            <td class="lables"><b>Departments</b></td>
            <td>Open for All</td>
        </tr> 
        <tr>
            <td class="lables"><b>Accommodation</b></td>
            <td>WFH</td>
        </tr>
        <tr>
            <td class="lables"><b>Stipend/month</b></td>
            <td class="date">INR 5000</td>
        </tr>
        <tr>
            <td class="lables"><b>Place of Posting</b></td>
            <td>WFH</td>
        </tr> 
        <tr>
            <td class="lables"><b>Duration</b></td>
            <td class="date">1 month</td>
        </tr>
        <tr>
            <td class="lables"><b>Selection Procedure</b></td>
            <td>resume shortlist and skype interview</td>
        </tr>
        <tr>
            <td class="lables"><b>Additional Information</b></td>
            <td></td>
        </tr>
    </table>
    <div style="text-align:center">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div>
</div>



<div ng-show="tab==8">
    <div style="margin-left: 5vw; margin-top:2vh;">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div> 
    <table class="bordered">
        <caption ><b>JAF of Ankur Pratishthan</b></caption>
    
        <tr>
            <td class="lables"><b>Website</b></td>
            <td><a href="http://www.ankurpratishthan.org/" target="_blank" >http://www.ankurpratishthan.org/ </a></td>
        </tr> 
        <tr>
            <td class="lables"><b>About</b></td>
            <td>Ankur Pratishthan is a diverse collective of individuals from various professional backgrounds strung together through similar ideas and passion for making a catalytic change in the lives of destitute children. Over the last decade, Ankur has actively been developing continuously evolving indigenous programs to address the collective mission of the organisation – to forward the cause of skill-based development of orphans along with their holistic development – and to successfully help them integrate into the mainstream job market and thereby provide the country with enabled, energetic and evolved youth.</td>
        </tr>
        <tr>
            <td class="lables"><b>Job Description</b></td>
            <td>App Developer (Number of fellows : 1, Stipend: Rs 7000) I. App Development for Project Vikas. ‘Project Vikas’ aims at developing skillset and offering the real life exposure from different streams to the children from Child Care Institutions (CCI’s). Under this programme we facilitate the development of the skillsets through several institutional tie-ups and professional assistance. Ankur Pratishthan takes care of training, logistics and competitive exposure to the beneficiary children. II. The App for project Vikas will help us in tracking the activities from different Child Care Institutions. These activities included tracking attendance of students and caretakers and volunteers, Progress of Children in various activities.

            </td>
        </tr>  
        <tr>
            <td class="lables"><b>Departments</b></td>
            <td>Open for All</td>
        </tr> 
        <tr>
            <td class="lables"><b>Accommodation</b></td>
            <td>WFH</td>
        </tr>
        <tr>
            <td class="lables"><b>Stipend/month</b></td>
            <td class="date">INR 7000</td>
        </tr>
        <tr>
            <td class="lables"><b>Place of Posting</b></td>
            <td>WFH</td>
        </tr> 
        <tr>
            <td class="lables"><b>Duration</b></td>
            <td class="date">1 month</td>
        </tr>
        <tr>
            <td class="lables"><b>Selection Procedure</b></td>
            <td>resume shortlist and skype interview</td>
        </tr>
        <tr>
            <td class="lables"><b>Additional Information</b></td>
            <td></td>
        </tr>
    </table>
    <div style="text-align:center">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div>
</div>



<div ng-show="tab==9">
    <div style="margin-left: 5vw; margin-top:2vh;">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div> 
    <table class="bordered">
        <caption ><b>JAF of ACORN FOUNDATION, Project: Compound 13 Lab</b></caption>
    
        <tr>
            <td class="lables"><b>Website</b></td>
            <td><a href="http://www.dharaviproject.org/intro.html
" target="_blank" >http://www.dharaviproject.org/intro.html</a></td>
        </tr> 
        <tr>
            <td class="lables"><b>About</b></td>
            <td>Ankur Pratishthan is a diverse collective of individuals from various professional backgrounds strung together through similar ideas and passion for making a catalytic change in the lives of destitute children. Over the last decade, Ankur has actively been developing continuously evolving indigenous programs to address the collective mission of the organisation – to forward the cause of skill-based development of orphans along with their holistic development – and to successfully help them integrate into the mainstream job market and thereby provide the country with enabled, energetic and evolved youth.</td>
        </tr>
        <tr>
            <td class="lables"><b>Job Description</b></td>
            <td>In the duration of the fellowship program, candidates must manage Acorn foundation’s social media accounts on Twitter and Facebook. Web design is an essential skill for candidate has they will be expected to undertake the renovation of the Acorn website. Responsibilities This will involve managing the posting and reposting of content regarding projects undertaken by Acorn Foundation. Candidates must also have writing and documentation skills. Candidate must provide a report of their work at Acorn foundation before the end of the fellowship program. Language requirements: • English (Required) • Tamil, Marathi, Gujarati, Hindi (Desirable)


            </td>
        </tr>  
        <tr>
            <td class="lables"><b>Departments</b></td>
            <td>Open for All</td>
        </tr> 
        <tr>
            <td class="lables"><b>Accommodation</b></td>
            <td>WFH</td>
        </tr>
        <tr>
            <td class="lables"><b>Stipend/month</b></td>
            <td class="date">INR 5000</td>
        </tr>
        <tr>
            <td class="lables"><b>Place of Posting</b></td>
            <td>WFH</td>
        </tr> 
        <tr>
            <td class="lables"><b>Duration</b></td>
            <td class="date">1 month</td>
        </tr>
        <tr>
            <td class="lables"><b>Selection Procedure</b></td>
            <td>resume shortlist and skype interview</td>
        </tr>
        <tr>
            <td class="lables"><b>Additional Information</b></td>
            <td></td>
        </tr>
    </table>
    <div style="text-align:center">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div>
</div>




<div ng-show="tab==10">
    <div style="margin-left: 5vw; margin-top:2vh;">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div> 
    <table class="bordered">
        <caption ><b>JAF of Pranyas Development Foundation</b></caption>
    
        <tr>
            <td class="lables"><b>Website</b></td>
            <td><a href="http://pranyas.org/
" target="_blank" >http://pranyas.org/</a></td>
        </tr> 
        <tr>
            <td class="lables"><b>About</b></td>
            <td>Pranyas (प्रन्यास) in hindi means faith/ belief. We at Pranyas Development Foundation have a firm belief that one day we could achieve a stage of No hunger, Education opportunity to everyone and equal Legal right to every person in our society. At this time of global inequality, where the gap between rich and poor is reaching new extremes, we are trying to build a bridge of Trust between privilege(who can help) and underprivileged(who needs help).Pranyas is a team of young and dynamic people who do not just think but believe in bringing changes. Pranyas Volunteers came together from different cities, states and professions but with a single ideology that every person should get the opportunity to study, rise and to protect themselves. We have initiated this through three mediums : 1) Child Development 2) Women Empowerment 3) Legal rights protection We are a section 8 company. We have 1200+ volunteers across India.</td>
        </tr>
        <tr>
            <td class="lables"><b>Job Description</b></td>
            <td>Digital Marketing
            </td>
        </tr>  
        <tr>
            <td class="lables"><b>Departments</b></td>
            <td>Open for All</td>
        </tr> 
        <tr>
            <td class="lables"><b>Accommodation</b></td>
            <td>WFH</td>
        </tr>
        <tr>
            <td class="lables"><b>Stipend/month</b></td>
            <td class="date">INR 5000-10000</td>
        </tr>
        <tr>
            <td class="lables"><b>Place of Posting</b></td>
            <td>WFH</td>
        </tr> 
        <tr>
            <td class="lables"><b>Duration</b></td>
            <td class="date">1 month</td>
        </tr>
        <tr>
            <td class="lables"><b>Selection Procedure</b></td>
            <td>resume shortlist and skype interview</td>
        </tr>
        <tr>
            <td class="lables"><b>Additional Information</b></td>
            <td></td>
        </tr>
    </table>
    <div style="text-align:center">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div>
</div>



<div ng-show="tab==11">
    <div style="margin-left: 5vw; margin-top:2vh;">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div> 
    <table class="bordered">
        <caption ><b>JAF of Pranyas Development Foundation</b></caption>
    
        <tr>
            <td class="lables"><b>Website</b></td>
            <td><a href="http://pranyas.org/
" target="_blank" >http://pranyas.org/</a></td>
        </tr> 
        <tr>
            <td class="lables"><b>About</b></td>
            <td>Pranyas (प्रन्यास) in hindi means faith/ belief. We at Pranyas Development Foundation have a firm belief that one day we could achieve a stage of No hunger, Education opportunity to everyone and equal Legal right to every person in our society. At this time of global inequality, where the gap between rich and poor is reaching new extremes, we are trying to build a bridge of Trust between privilege(who can help) and underprivileged(who needs help).Pranyas is a team of young and dynamic people who do not just think but believe in bringing changes. Pranyas Volunteers came together from different cities, states and professions but with a single ideology that every person should get the opportunity to study, rise and to protect themselves. We have initiated this through three mediums : 1) Child Development 2) Women Empowerment 3) Legal rights protection We are a section 8 company. We have 1200+ volunteers across India.</td>
        </tr>
        <tr>
            <td class="lables"><b>Job Description</b></td>
            <td>Website Development
            </td>
        </tr>  
        <tr>
            <td class="lables"><b>Departments</b></td>
            <td>Open for All</td>
        </tr> 
        <tr>
            <td class="lables"><b>Accommodation</b></td>
            <td>WFH</td>
        </tr>
        <tr>
            <td class="lables"><b>Stipend/month</b></td>
            <td class="date">INR 5000-10000</td>
        </tr>
        <tr>
            <td class="lables"><b>Place of Posting</b></td>
            <td>WFH</td>
        </tr> 
        <tr>
            <td class="lables"><b>Duration</b></td>
            <td class="date">1 month</td>
        </tr>
        <tr>
            <td class="lables"><b>Selection Procedure</b></td>
            <td>resume shortlist and skype interview</td>
        </tr>
        <tr>
            <td class="lables"><b>Additional Information</b></td>
            <td></td>
        </tr>
    </table>
    <div style="text-align:center">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div>
</div>
<div ng-show="tab==12">
    <div style="margin-left: 5vw; margin-top:2vh;">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div> 
    <table class="bordered">
        <caption ><b>JAF of Pranyas Development Foundation</b></caption>
    
        <tr>
            <td class="lables"><b>Website</b></td>
            <td><a href="http://pranyas.org/
" target="_blank" >http://pranyas.org/</a></td>
        </tr> 
        <tr>
            <td class="lables"><b>About</b></td>
            <td>Pranyas (प्रन्यास) in hindi means faith/ belief. We at Pranyas Development Foundation have a firm belief that one day we could achieve a stage of No hunger, Education opportunity to everyone and equal Legal right to every person in our society. At this time of global inequality, where the gap between rich and poor is reaching new extremes, we are trying to build a bridge of Trust between privilege(who can help) and underprivileged(who needs help).Pranyas is a team of young and dynamic people who do not just think but believe in bringing changes. Pranyas Volunteers came together from different cities, states and professions but with a single ideology that every person should get the opportunity to study, rise and to protect themselves. We have initiated this through three mediums : 1) Child Development 2) Women Empowerment 3) Legal rights protection We are a section 8 company. We have 1200+ volunteers across India.</td>
        </tr>
        <tr>
            <td class="lables"><b>Job Description</b></td>
            <td>Graphic Design
            </td>
        </tr>  
        <tr>
            <td class="lables"><b>Departments</b></td>
            <td>Open for All</td>
        </tr> 
        <tr>
            <td class="lables"><b>Accommodation</b></td>
            <td>WFH</td>
        </tr>
        <tr>
            <td class="lables"><b>Stipend/month</b></td>
            <td class="date">INR 5000-10000</td>
        </tr>
        <tr>
            <td class="lables"><b>Place of Posting</b></td>
            <td>WFH</td>
        </tr> 
        <tr>
            <td class="lables"><b>Duration</b></td>
            <td class="date">1 month</td>
        </tr>
        <tr>
            <td class="lables"><b>Selection Procedure</b></td>
            <td>resume shortlist and skype interview</td>
        </tr>
        <tr>
            <td class="lables"><b>Additional Information</b></td>
            <td></td>
        </tr>
    </table>
    <div style="text-align:center">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div>
</div>
<div ng-show="tab==13">
    <div style="margin-left: 5vw; margin-top:2vh;">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div> 
    <table class="bordered">
        <caption ><b>JAF of Pranyas Development Foundation</b></caption>
    
        <tr>
            <td class="lables"><b>Website</b></td>
            <td><a href="http://pranyas.org/
" target="_blank" >http://pranyas.org/</a></td>
        </tr> 
        <tr>
            <td class="lables"><b>About</b></td>
            <td>Pranyas (प्रन्यास) in hindi means faith/ belief. We at Pranyas Development Foundation have a firm belief that one day we could achieve a stage of No hunger, Education opportunity to everyone and equal Legal right to every person in our society. At this time of global inequality, where the gap between rich and poor is reaching new extremes, we are trying to build a bridge of Trust between privilege(who can help) and underprivileged(who needs help).Pranyas is a team of young and dynamic people who do not just think but believe in bringing changes. Pranyas Volunteers came together from different cities, states and professions but with a single ideology that every person should get the opportunity to study, rise and to protect themselves. We have initiated this through three mediums : 1) Child Development 2) Women Empowerment 3) Legal rights protection We are a section 8 company. We have 1200+ volunteers across India.</td>
        </tr>
        <tr>
            <td class="lables"><b>Job Description</b></td>
            <td>Content Writing
            </td>
        </tr>  
        <tr>
            <td class="lables"><b>Departments</b></td>
            <td>Open for All</td>
        </tr> 
        <tr>
            <td class="lables"><b>Accommodation</b></td>
            <td>WFH</td>
        </tr>
        <tr>
            <td class="lables"><b>Stipend/month</b></td>
            <td class="date">INR 5000-10000</td>
        </tr>
        <tr>
            <td class="lables"><b>Place of Posting</b></td>
            <td>WFH</td>
        </tr> 
        <tr>
            <td class="lables"><b>Duration</b></td>
            <td class="date">1 month</td>
        </tr>
        <tr>
            <td class="lables"><b>Selection Procedure</b></td>
            <td>resume shortlist and skype interview</td>
        </tr>
        <tr>
            <td class="lables"><b>Additional Information</b></td>
            <td></td>
        </tr>
    </table>
    <div style="text-align:center">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div>
</div>


<div ng-show="tab==14">
    <div style="margin-left: 5vw; margin-top:2vh;">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div> 
    <table class="bordered">
        <caption ><b>JAF of Pranyas Development Foundation</b></caption>
    
        <tr>
            <td class="lables"><b>Website</b></td>
            <td><a href="http://pranyas.org/
" target="_blank" >http://pranyas.org/</a></td>
        </tr> 
        <tr>
            <td class="lables"><b>About</b></td>
            <td>Pranyas (प्रन्यास) in hindi means faith/ belief. We at Pranyas Development Foundation have a firm belief that one day we could achieve a stage of No hunger, Education opportunity to everyone and equal Legal right to every person in our society. At this time of global inequality, where the gap between rich and poor is reaching new extremes, we are trying to build a bridge of Trust between privilege(who can help) and underprivileged(who needs help).Pranyas is a team of young and dynamic people who do not just think but believe in bringing changes. Pranyas Volunteers came together from different cities, states and professions but with a single ideology that every person should get the opportunity to study, rise and to protect themselves. We have initiated this through three mediums : 1) Child Development 2) Women Empowerment 3) Legal rights protection We are a section 8 company. We have 1200+ volunteers across India.</td>
        </tr>
        <tr>
            <td class="lables"><b>Job Description</b></td>
            <td>Graphic Video designing
            </td>
        </tr>  
        <tr>
            <td class="lables"><b>Departments</b></td>
            <td>Open for All</td>
        </tr> 
        <tr>
            <td class="lables"><b>Accommodation</b></td>
            <td>WFH</td>
        </tr>
        <tr>
            <td class="lables"><b>Stipend/month</b></td>
            <td class="date">INR 5000-10000</td>
        </tr>
        <tr>
            <td class="lables"><b>Place of Posting</b></td>
            <td>WFH</td>
        </tr> 
        <tr>
            <td class="lables"><b>Duration</b></td>
            <td class="date">1 month</td>
        </tr>
        <tr>
            <td class="lables"><b>Selection Procedure</b></td>
            <td>resume shortlist and skype interview</td>
        </tr>
        <tr>
            <td class="lables"><b>Additional Information</b></td>
            <td></td>
        </tr>
    </table>
    <div style="text-align:center">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div>
</div>



<div ng-show="tab==15">
    <div style="margin-left: 5vw; margin-top:2vh;">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div> 
    <table class="bordered">
        <caption ><b>JAF of SAHER(Society for Awareness,Harmony and Equal Rights)
</b></caption>
    
        <tr>
            <td class="lables"><b>Website</b></td>
            <td><a href="https://saherindia.org/
" target="_blank" >https://saherindia.org/</a></td>
        </tr> 
        <tr>
            <td class="lables"><b>About</b></td>
            <td>Founded in 1997 as an interfaith cricket club, SAHER (SOCIETY FOR AWARENESS, HARMONY AND EQUAL RIGHTS) shaped up into an organization addressing communal conflict and rebuilding faith between people. Registered in 2005, SAHER’s work started in Jogeshwari, Mumbai where settlement patterns, even otherwise demarcated across communal lines, were completely ghettoized after the ’92-93 communal violence. Some of its key youth programs were incubated with Changelooms support. SAHER realizes that growing up in segregated communal settlements has not equipped young people to develop competencies to operate in a diverse world. SAHER works towards empowering communities, by enabling people to aspire, lead and contribute in bringing meaningful changes in the society, effecting a shift from social conflict to a just and equitable society.</td>
        </tr>
        <tr>
            <td class="lables"><b>Job Description</b></td>
            <td>Volunteer for Fundraising
            </td>
        </tr>  
        <tr>
            <td class="lables"><b>Departments</b></td>
            <td>Open for All</td>
        </tr> 
        <tr>
            <td class="lables"><b>Accommodation</b></td>
            <td>WFH</td>
        </tr>
        <tr>
            <td class="lables"><b>Stipend/month</b></td>
            <td class="date">5% of funds raised</td>
        </tr>
        <tr>
            <td class="lables"><b>Place of Posting</b></td>
            <td>WFH</td>
        </tr> 
        <tr>
            <td class="lables"><b>Duration</b></td>
            <td class="date">1 month</td>
        </tr>
        <tr>
            <td class="lables"><b>Selection Procedure</b></td>
            <td>resume shortlist and skype interview</td>
        </tr>
        <tr>
            <td class="lables"><b>Additional Information</b></td>
            <td></td>
        </tr>
    </table>
    <div style="text-align:center">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div>
</div>


<div ng-show="tab==16">
    <div style="margin-left: 5vw; margin-top:2vh;">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div> 
    <table class="bordered">
        <caption ><b>JAF of Samagra Foundation</b></caption>
    
        <tr>
            <td class="lables"><b>Website</b></td>
            <td><a href="https://samagrafoundation.com/IN" target="_blank" >https://samagrafoundation.com/IN</a></td>
        </tr> 
        <tr>
            <td class="lables"><b>About</b></td>
            <td>Samagra foundation is founded in June 2016 , established in July 2018, Nashik. Uplifting the community left behind such as specially abled, third gender and women by educating and empowering also fighting against malnutrition.</td>
        </tr>
        <tr>
            <td class="lables"><b>Job Description</b></td>
            <td>Volunteer for Fundraising
            </td>
        </tr>  
        <tr>
            <td class="lables"><b>Departments</b></td>
            <td>Open for All</td>
        </tr> 
        <tr>
            <td class="lables"><b>Accommodation</b></td>
            <td>WFH</td>
        </tr>
        <tr>
            <td class="lables"><b>Stipend/month</b></td>
            <td class="date">INR 1000 - 20000/-(Based on Performance)</td>
        </tr>
        <tr>
            <td class="lables"><b>Place of Posting</b></td>
            <td>WFH</td>
        </tr> 
        <tr>
            <td class="lables"><b>Duration</b></td>
            <td class="date">1 month</td>
        </tr>
        <tr>
            <td class="lables"><b>Selection Procedure</b></td>
            <td>resume shortlist and skype interview</td>
        </tr>
        <tr>
            <td class="lables"><b>Additional Information</b></td>
            <td> - </td>
        </tr>
    </table>
    <div style="text-align:center">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div>
</div>



<div ng-show="tab==17">
    <div style="margin-left: 5vw; margin-top:2vh;">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div> 
    <table class="bordered">
        <caption ><b>JAF of YOUTH FOR UNITY AND VOLUNTARY ACTION ( YUVA)</b></caption>
    
        <tr>
            <td class="lables"><b>Website</b></td>
            <td><a href="https://yuvaindia.org/" target="_blank" >https://yuvaindia.org/</a></td>
        </tr> 
        <tr>
            <td class="lables"><b>About</b></td>
            <td>Youth for Unity and Voluntary Organisation (YUVA), is a non-government organization registered in 1984.It is a national organisation that works with marginalised communities (women, men, youth and children) in 5 states of India with a focus on urban and rural poverty. YUVA works through strategies of support for services, community organising, networking, campaigning and research for policies and governance that empower urban poor.Since its inception, YUVA has empowered adults, children and youth with the knowledge and skills to participate in shaping their lives. YUVA employs a360-degree approach primarily through building capacities of people to address the issues that most affect them. Our work with women is rooted in their living environment. It includes access to healthcare, enabling safe spaces, developing leadership, participation in governance, access to livelihood and socio-political education</td>
        </tr>
        <tr>
            <td class="lables"><b>Job Description</b></td>
            <td>To Design Monitoring and Evalution system : YUVA has several projects, beneficiaries, partnerships and collaborations which creates multi levels of impact But due to lack of a robust M & E system : 1) useful data on the performance of various critical parameters project wise is not quickly available due to this monitoring and self-correction , improving controllability and operational efficiency of the organization, becomes a challenge 2) Lack of an effective tool for long-term decision-making and improving the overall productivity of the organization. 3) Though each project maintains an excel sheet for their MIS there exists incompatibilities and inconsistencies in different formats/procedures used in different projects and/or at different times and there is need to bring in compatibility and standardization of formats/procedures. 4) YUVA works on multiple projects which are completely varied from each other, while we define project specific parameters, it is also important that common parameters for evaluation be defined across all projects which helps in presenting a holistic picture of the Organisations
            </td>
        </tr>  
        <tr>
            <td class="lables"><b>Departments</b></td>
            <td>Open for All</td>
        </tr> 
        <tr>
            <td class="lables"><b>Accommodation</b></td>
            <td>WFH</td>
        </tr>
        <tr>
            <td class="lables"><b>Stipend/month</b></td>
            <td class="date">NA</td>
        </tr>
        <tr>
            <td class="lables"><b>Place of Posting</b></td>
            <td>WFH</td>
        </tr> 
        <tr>
            <td class="lables"><b>Duration</b></td>
            <td class="date">1 month</td>
        </tr>
        <tr>
            <td class="lables"><b>Selection Procedure</b></td>
            <td>resume shortlist and skype interview</td>
        </tr>
        <tr>
            <td class="lables"><b>Additional Information</b></td>
            <td> - </td>
        </tr>
    </table>
    <div style="text-align:center">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div>
</div>


<div ng-show="tab==18">
    <div style="margin-left: 5vw; margin-top:2vh;">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div> 
    <table class="bordered">
        <caption ><b>JAF of Confederation of Empowerment Initiatives (CEI)</b></caption>
    
        <tr>
            <td class="lables"><b>Website</b></td>
            <td><a href="https://ceiempowers.org/" target="_blank" >https://ceiempowers.org/</a></td>
        </tr> 
        <tr>
            <td class="lables"><b>About</b></td>
            <td>Confederation of Empowerment Initiatives (CEI) is a Not-for-Profit International Development Agency (IDA) known for its Unique and Niche ‘Resiliency Solutions’ and ‘Development Economy Solutions’. We lay emphasis on Holistic Empowerment of the most disenfranchised sections of society through Market-linked Entrepreneurship Development and Institution Building. We work in collaboration with various educational institutes, government bodies, corporates, individuals and subject-matter experts in order to create an ecology that truly empowers the rural and tribal communities. Furthermore, CEI is implementing Resiliency & Development Economy Solutions for developing economies of the world especially in South East Asia, furthering the UN Sustainable Development Goals (SDGs). Since its inception, CEI has brought about the Holistic Empowerment and 360 Degree Transformation of the backward, rural and tribal communities across India and South Asia, impacting millions of lives.</td>
        </tr>
        <tr>
            <td class="lables"><b>Job Description</b></td>
            <td>The intern will participate in a cutting-edge Social Entrepreneurship, Digital Marketing and Resiliency Project. The intern will be mentored by Top Corporate Leaders, Entrepreneurs and Venture Capitalists during the entire span of the Internship Programme. Upon successful completion across all the Project Parameters, the Intern will be eligible to receive various degrees of Certificates of Completion / Distinction / Excellence. If the intern truly excels in the Internship Programme, he/she may even get a letter of recommendation.
            </td>
        </tr>  
        <tr>
            <td class="lables"><b>Departments</b></td>
            <td>Open for All</td>
        </tr> 
        <tr>
            <td class="lables"><b>Accommodation</b></td>
            <td>WFH</td>
        </tr>
        <tr>
            <td class="lables"><b>Stipend/month</b></td>
            <td class="date">Perks</td>
        </tr>
        <tr>
            <td class="lables"><b>Place of Posting</b></td>
            <td>WFH</td>
        </tr> 
        <tr>
            <td class="lables"><b>Duration</b></td>
            <td class="date">1 month</td>
        </tr>
        <tr>
            <td class="lables"><b>Selection Procedure</b></td>
            <td>resume shortlist and skype interview</td>
        </tr>
        <tr>
            <td class="lables"><b>Additional Information</b></td>
            <td> - </td>
        </tr>
    </table>
    <div style="text-align:center">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div>
</div>



<div ng-show="tab==19">
    <div style="margin-left: 5vw; margin-top:2vh;">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div> 
    <table class="bordered">
        <caption ><b>JAF of Yuva Parivartan, A Project of Kherwadi Social Welfare Association</b></caption>
    
        <tr>
            <td class="lables"><b>Website</b></td>
            <td><a href="https://www.yuvaparivartan.org" target="_blank" >https://www.yuvaparivartan.org</a></td>
        </tr> 
        <tr>
            <td class="lables"><b>About</b></td>
            <td>As one of the largest NGOs in the livelihood space in India that works for the "out of school" youth, we strongly believe that the nation's strength and future lies in the hands of its youth. Unlike the developed countries where 90% youth opt for some or the other sort of vocational training, less than 5% undergo vocational training in our country despite the fact that India is a country with the largest youth population. From 100 students to more than 6,50,000 students, from 1 centre to more than 650 centres, from the violence affected tribal areas of Maharashtra to the hostile snow-clad terrain of Kashmir, Yuva Parivartan has expanded its horizons to become a national movement. At Yuva Parivartan, we run the only inclusive program in India. The key features of the program are: Admission to anyone who can read and write with no formal education Focus on hands on vocational training (70% practical & 30% theory) Soch Ka Parivartan (SKP) - a proprietary program for attitudinal change and life skills such as decision making, time management, money management, values & perception, health & hygiene, work readiness etc. Community Engagement, Counselling and Mentoring Job placements and assistance for self-employment We adopt a holistic approach of enhancing the less fortunate youth with vocational skills, guidance, counselling and financial assistance. Annually, we empower more than 1,00,000 youth of which over 60% are gainfully employed including those that take a bigger leap of becoming an entrepreneur. At Yuva Parivartan, we aim to continue growing and mentoring other local NGOs and like-minded organizations to deliver the YP model of livelihood training to achieve a Pan India presence. Kamaai.org, a livelihood portal enabling job placement. Yuva Kaushal, Mobile E-learning app for Any Time Anywhere learning.</td>
        </tr>
        <tr>
            <td class="lables"><b>Job Description</b></td>
            <td>Content development for E-commerce course for rural audience.
            </td>
        </tr>  
        <tr>
            <td class="lables"><b>Departments</b></td>
            <td>Open for All</td>
        </tr> 
        <tr>
            <td class="lables"><b>Accommodation</b></td>
            <td>WFH</td>
        </tr>
        <tr>
            <td class="lables"><b>Stipend/month</b></td>
            <td class="date">INR 5000/-</td>
        </tr>
        <tr>
            <td class="lables"><b>Place of Posting</b></td>
            <td>WFH</td>
        </tr> 
        <tr>
            <td class="lables"><b>Duration</b></td>
            <td class="date">1 month</td>
        </tr>
        <tr>
            <td class="lables"><b>Selection Procedure</b></td>
            <td>resume shortlist and skype interview</td>
        </tr>
        <tr>
            <td class="lables"><b>Additional Information</b></td>
            <td> - </td>
        </tr>
    </table>
    <div style="text-align:center">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div>
</div>




<div ng-show="tab==20">
    <div style="margin-left: 5vw; margin-top:2vh;">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div> 
    <table class="bordered">
        <caption ><b>JAF of A Hundred Hand</b></caption>
    
        <tr>
            <td class="lables"><b>Website</b></td>
            <td><a href="http://ahundredhands.com/" target="_blank" >http://ahundredhands.com/</a></td>
        </tr> 
        <tr>
            <td class="lables"><b>About</b></td>
            <td>"A Hundred Hands is a multi faceted programme that revitalizes handmade and builds traditional Indian skills; in order to do three things essentially:
1.  Unearth the incredible potential of traditional crafts and artisans in India- to help preserve crafts and economic viability.
2. Create meaningful economic tasks that need motor skills to rehabilitate or offer therapy to vulnerable groups.
3. Create a platform where modern India has a sensible and practical way to learn working with ones hands and old Indian skills, while giving back to society. 
We set up 10 years ago, are strictly not for profit and are delighted with the progress which we have made in this period as measured by the artisans lives we have improved, therapeutic effects of handmade and enabling communities to earn from handmade along with outreach programmes in Corporates and communities."</td>
        </tr>
        <tr>
            <td class="lables"><b>Job Description</b></td>
            <td>Graphic Design folk who can create Artisan Portfolios both still and video portfolios. From existing footage
            </td>
        </tr>  
        <tr>
            <td class="lables"><b>Departments</b></td>
            <td>Open for All</td>
        </tr> 
        <tr>
            <td class="lables"><b>Accommodation</b></td>
            <td>WFH</td>
        </tr>
        <tr>
            <td class="lables"><b>Stipend/month</b></td>
            <td class="date">INR 5000/-</td>
        </tr>
        <tr>
            <td class="lables"><b>Place of Posting</b></td>
            <td>WFH</td>
        </tr> 
        <tr>
            <td class="lables"><b>Duration</b></td>
            <td class="date">1 month</td>
        </tr>
        <tr>
            <td class="lables"><b>Selection Procedure</b></td>
            <td>resume shortlist and skype interview</td>
        </tr>
        <tr>
            <td class="lables"><b>Additional Information</b></td>
            <td> - </td>
        </tr>
    </table>
    <div style="text-align:center">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div>
</div>




<div ng-show="tab==21">
    <div style="margin-left: 5vw; margin-top:2vh;">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div> 
    <table class="bordered">
        <caption ><b>JAF of A Hundred Hand</b></caption>
    
        <tr>
            <td class="lables"><b>Website</b></td>
            <td><a href="http://ahundredhands.com/" target="_blank" >http://ahundredhands.com/</a></td>
        </tr> 
        <tr>
            <td class="lables"><b>About</b></td>
            <td>"A Hundred Hands is a multi faceted programme that revitalizes handmade and builds traditional Indian skills; in order to do three things essentially:
1.  Unearth the incredible potential of traditional crafts and artisans in India- to help preserve crafts and economic viability.
2. Create meaningful economic tasks that need motor skills to rehabilitate or offer therapy to vulnerable groups.
3. Create a platform where modern India has a sensible and practical way to learn working with ones hands and old Indian skills, while giving back to society. 
We set up 10 years ago, are strictly not for profit and are delighted with the progress which we have made in this period as measured by the artisans lives we have improved, therapeutic effects of handmade and enabling communities to earn from handmade along with outreach programmes in Corporates and communities."</td>
        </tr>
        <tr>
            <td class="lables"><b>Job Description</b></td>
            <td>Technically Savvy Researchers who can do desk research and collate and verify data from various sources.
            </td>
        </tr>  
        <tr>
            <td class="lables"><b>Departments</b></td>
            <td>Open for All</td>
        </tr> 
        <tr>
            <td class="lables"><b>Accommodation</b></td>
            <td>WFH</td>
        </tr>
        <tr>
            <td class="lables"><b>Stipend/month</b></td>
            <td class="date">INR 5000/-</td>
        </tr>
        <tr>
            <td class="lables"><b>Place of Posting</b></td>
            <td>WFH</td>
        </tr> 
        <tr>
            <td class="lables"><b>Duration</b></td>
            <td class="date">1 month</td>
        </tr>
        <tr>
            <td class="lables"><b>Selection Procedure</b></td>
            <td>resume shortlist and skype interview</td>
        </tr>
        <tr>
            <td class="lables"><b>Additional Information</b></td>
            <td> - </td>
        </tr>
    </table>
    <div style="text-align:center">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div>
</div>






<div ng-show="tab==22">
    <div style="margin-left: 5vw; margin-top:2vh;">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div> 
    <table class="bordered">
        <caption ><b>JAF of A Hundred Hand</b></caption>
    
        <tr>
            <td class="lables"><b>Website</b></td>
            <td><a href="http://ahundredhands.com/" target="_blank" >http://ahundredhands.com/</a></td>
        </tr> 
        <tr>
            <td class="lables"><b>About</b></td>
            <td>"A Hundred Hands is a multi faceted programme that revitalizes handmade and builds traditional Indian skills; in order to do three things essentially:
1.  Unearth the incredible potential of traditional crafts and artisans in India- to help preserve crafts and economic viability.
2. Create meaningful economic tasks that need motor skills to rehabilitate or offer therapy to vulnerable groups.
3. Create a platform where modern India has a sensible and practical way to learn working with ones hands and old Indian skills, while giving back to society. 
We set up 10 years ago, are strictly not for profit and are delighted with the progress which we have made in this period as measured by the artisans lives we have improved, therapeutic effects of handmade and enabling communities to earn from handmade along with outreach programmes in Corporates and communities."</td>
        </tr>
        <tr>
            <td class="lables"><b>Job Description</b></td>
            <td>Writers who have an inclination about the arts and can also speak to the artisan base we have and coordinate with them to share their processes and stories.
            </td>
        </tr>  
        <tr>
            <td class="lables"><b>Departments</b></td>
            <td>Open for All</td>
        </tr> 
        <tr>
            <td class="lables"><b>Accommodation</b></td>
            <td>WFH</td>
        </tr>
        <tr>
            <td class="lables"><b>Stipend/month</b></td>
            <td class="date">INR 5000/-</td>
        </tr>
        <tr>
            <td class="lables"><b>Place of Posting</b></td>
            <td>WFH</td>
        </tr> 
        <tr>
            <td class="lables"><b>Duration</b></td>
            <td class="date">1 month</td>
        </tr>
        <tr>
            <td class="lables"><b>Selection Procedure</b></td>
            <td>resume shortlist and skype interview</td>
        </tr>
        <tr>
            <td class="lables"><b>Additional Information</b></td>
            <td> - </td>
        </tr>
    </table>
    <div style="text-align:center">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div>
</div>







<div ng-show="tab==23">
    <div style="margin-left: 5vw; margin-top:2vh;">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div> 
    <table class="bordered">
        <caption ><b>JAF of A Hundred Hand</b></caption>
    
        <tr>
            <td class="lables"><b>Website</b></td>
            <td><a href="http://ahundredhands.com/" target="_blank" >http://ahundredhands.com/</a></td>
        </tr> 
        <tr>
            <td class="lables"><b>About</b></td>
            <td>"A Hundred Hands is a multi faceted programme that revitalizes handmade and builds traditional Indian skills; in order to do three things essentially:
1.  Unearth the incredible potential of traditional crafts and artisans in India- to help preserve crafts and economic viability.
2. Create meaningful economic tasks that need motor skills to rehabilitate or offer therapy to vulnerable groups.
3. Create a platform where modern India has a sensible and practical way to learn working with ones hands and old Indian skills, while giving back to society. 
We set up 10 years ago, are strictly not for profit and are delighted with the progress which we have made in this period as measured by the artisans lives we have improved, therapeutic effects of handmade and enabling communities to earn from handmade along with outreach programmes in Corporates and communities."</td>
        </tr>
        <tr>
            <td class="lables"><b>Job Description</b></td>
            <td>Marketing minds : who can help with a strategy to drive traffic , collaborations which can help the artisan groups. 
            </td>
        </tr>  
        <tr>
            <td class="lables"><b>Departments</b></td>
            <td>Open for All</td>
        </tr> 
        <tr>
            <td class="lables"><b>Accommodation</b></td>
            <td>WFH</td>
        </tr>
        <tr>
            <td class="lables"><b>Stipend/month</b></td>
            <td class="date">INR 5000/-</td>
        </tr>
        <tr>
            <td class="lables"><b>Place of Posting</b></td>
            <td>WFH</td>
        </tr> 
        <tr>
            <td class="lables"><b>Duration</b></td>
            <td class="date">1 month</td>
        </tr>
        <tr>
            <td class="lables"><b>Selection Procedure</b></td>
            <td>resume shortlist and skype interview</td>
        </tr>
        <tr>
            <td class="lables"><b>Additional Information</b></td>
            <td> - </td>
        </tr>
    </table>
    <div style="text-align:center">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div>
</div>


<div ng-show="tab==24">
    <div style="margin-left: 5vw; margin-top:2vh;">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div> 
    <table class="bordered">
        <caption ><b>JAF of Navjyoti India Foundation</b></caption>
    
        <!-- <tr>
            <td class="lables"><b>Website</b></td>
            <td><a href="http://ahundredhands.com/" target="_blank" >http://ahundredhands.com/</a></td>
        </tr>  -->
        <tr>
            <td class="lables"><b>About</b></td>
            <td> - </td>
        </tr>
        <tr>
            <td class="lables"><b>Job Description</b></td>
            <td>Project Unnati 1. Online marketing - Designing of social media posts and online campaigns for marketing and promotion of handcrafted products made by rural women to provide livelihood opportunities to women thereby raising funds through the sale of products or any other strategies. The product range can be viewed on the online portal www.unnati.org.in. 2. Research and entrepreneurial model - The profile also entails the development of an entrepreneurial model to sustain the project. Simultaneously research will be done to identify competitors in this sector and document a comparative study proposing recommendations. 3. Collate content for training in stitching - Work in coordination with Coordinator to research, download, and collate relevant online content that can be used to train women in stitching using tabs. Identify the gaps in the content and propose recommendations on areas of improvement. 4. Training rural women on IT - Train 50 Unnati members who are rural women to use M S Team and youtube for skills up-gradation.
            </td>
        </tr>  
        <tr>
            <td class="lables"><b>Departments</b></td>
            <td>Open for All</td>
        </tr> 
        <tr>
            <td class="lables"><b>Accommodation</b></td>
            <td>WFH</td>
        </tr>
        <tr>
            <td class="lables"><b>Stipend/month</b></td>
            <td class="date">NA</td>
        </tr>
        <tr>
            <td class="lables"><b>Place of Posting</b></td>
            <td>WFH</td>
        </tr> 
        <tr>
            <td class="lables"><b>Duration</b></td>
            <td class="date">1 month</td>
        </tr>
        <tr>
            <td class="lables"><b>Selection Procedure</b></td>
            <td>resume shortlist and skype interview</td>
        </tr>
        <tr>
            <td class="lables"><b>Additional Information</b></td>
            <td> - </td>
        </tr>
    </table>
    <div style="text-align:center">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div>
</div>




<div ng-show="tab==25">
    <div style="margin-left: 5vw; margin-top:2vh;">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div> 
    <table class="bordered">
        <caption ><b>JAF of AWOO Foundation</b></caption>
    
        <tr>
            <td class="lables"><b>Website</b></td>
            <td><a href="awoofoundation.org" target="_blank" >awoofoundation.org</a></td>
        </tr> 
        <tr>
            <td class="lables"><b>About</b></td>
            <td>Established in 2013, AWOO Foundation is a registered charitable trust that supports deserving students from economically weaker sections of society. We at AWOO believe that education is the most critical component to sustain socio-economic change. Deserving students from low income backgrounds who get an opportunity to realize their potential through higher education, are not only improving the quality of their life, they are adding to the talent pool of India which is fast emerging as a major contributor to the global workforce. Our vision is to develop quality human capital by making educational opportunities more accessible to the talented and needy. Keeping this in mind, AWOO aims to provide scholarships to needy and deserving students for professional courses with an aim to increase their employment opportunities. The scholarship is offered at both, the undergraduate and postgraduate levels, for professional and livelihood-focused courses.</td>
        </tr>
        <tr>
            <td class="lables"><b>Job Description</b></td>
            <td>"project title:-Communication/ Collateral Design for AWOO Give Back Program (FY 2020-21)
project deliverables:-1.Capturing data from AWOO Scholars with an end to create short and engaging stories
2.Content creation and finalization (Stories/ Videos)
3.Designing Creatives to run the entire AWOO Give Back Campaign (Mailers, Posters, Videos, Standees)"
            </td>
        </tr>  
        <tr>
            <td class="lables"><b>Departments</b></td>
            <td>Open for All</td>
        </tr> 
        <tr>
            <td class="lables"><b>Accommodation</b></td>
            <td>WFH</td>
        </tr>
        <tr>
            <td class="lables"><b>Stipend/month</b></td>
            <td class="date">INR 7000/-</td>
        </tr>
        <tr>
            <td class="lables"><b>Place of Posting</b></td>
            <td>WFH</td>
        </tr> 
        <tr>
            <td class="lables"><b>Duration</b></td>
            <td class="date">1 month</td>
        </tr>
        <tr>
            <td class="lables"><b>Selection Procedure</b></td>
            <td>resume shortlist and skype interview</td>
        </tr>
        <tr>
            <td class="lables"><b>Additional Information</b></td>
            <td> - </td>
        </tr>
    </table>
    <div style="text-align:center">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div>
</div>

<!-- ----------------- -->


<div ng-show="tab==26">
    <div style="margin-left: 5vw; margin-top:2vh;">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div> 
    <table class="bordered">
        <caption ><b>JAF of UNICEF India</b></caption>
    
        <tr>
            <td class="lables"><b>Website</b></td>
            <td><a href="www.unicef.org/india" target="_blank" >www.unicef.org/india</a></td>
        </tr> 
        <tr>
            <td class="lables"><b>About</b></td>
            <td>The United Nations Children's Fund is a United Nations agency responsible for providing humanitarian and developmental aid to children worldwide..UNICEF works in over 190 countries and territories to save children's lives, to defend their rights, and to help them fulfil their potential, from early childhood through adolescence.</td>
        </tr>
        <tr>
            <td class="lables"><b>Job Description</b></td>
            <td> - </td>
        </tr>  
        <tr>
            <td class="lables"><b>Departments</b></td>
            <td>Open for All</td>
        </tr> 
        <tr>
            <td class="lables"><b>Accommodation</b></td>
            <td>WFH</td>
        </tr>
        <tr>
            <td class="lables"><b>Stipend/month</b></td>
            <td class="date">NA</td>
        </tr>
        <tr>
            <td class="lables"><b>Place of Posting</b></td>
            <td>WFH</td>
        </tr> 
        <tr>
            <td class="lables"><b>Duration</b></td>
            <td class="date">1 month</td>
        </tr>
        <tr>
            <td class="lables"><b>Selection Procedure</b></td>
            <td>resume shortlist and skype interview</td>
        </tr>
        <tr>
            <td class="lables"><b>Additional Information</b></td>
            <td> - </td>
        </tr>
    </table>
    <div style="text-align:center">
        <a href="" ng-click="tab=0">Go to JAF</a>
    </div>
</div>

<br><br><br>       
</body>
</html>