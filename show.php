<!DOCTYPE html>
<html>
<head>
<title>Abhyuday</title>
<style>

table, th, td {
    border: 2px solid green;
    padding: 0.5em;
}
</style>
</head>
<body>
    <style>
    h2{
     text-align: center;  
     color: green; 
    }
    </style>
<h2>Abhyuday</h2>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "abhyuday";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT roll, cname, sign FROM sign";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Roll No. </th><th>Company </th><th>Sign Status</tr></th>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["roll"]."</td><td>".$row["cname"]." </td><td> ".$row["sign"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?> 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Abhyuday</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<br>
<button onclick="myFunction()">Print</button>

<script>
function myFunction() {
    window.print();
}
</script>
</body>
</html>
