<?PHP
if (isset($_POST['hidden'])) {
    $cname=$_POST['cname'];
    $username=$_POST['username'];
    $sign=$_POST['sign'];
    $file="";
    
    $db = mysqli_connect('localhost', 'betaform', 'prem@123', 'betaform'); //This is actual connection to database

    // $db = mysqli_connect('localhost','root','','betaform'); // this is localhost connection to database

    $file=$_FILES['file']['name'];
    $file_result= "";
          
    if($_FILES["file"]["error"]>0){
        $file_result .="no file upload";
        $file_result .="error code upload";
    }
    else{
        move_uploaded_file($_FILES['file']['tmp_name'], "SoPs/" . $_FILES["file"]["name"]);
        $file_result .="success";
    }
  
    if ($cname!='noselect') {
        $query = "INSERT INTO profectus2k19IAFsign (roll, cname, sign) 
        VALUES('$username','$cname','$sign')";
        mysqli_query($db, $query);
        echo "Succesfully ".$sign."ed"."<br>";
    }
    else {
        echo " --- ERROR ---"."<br>"."Please select name of the company you want to sign for."."<br>";
    }    
}
else{
    echo " --- ERROR --- "."<br>";
    // header('location: index.php');
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
     <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
</head>
<body>
  <a href="index.php" style="text-align: center;">Go Back?</a>
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