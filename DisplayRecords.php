<?php
$Name=$_POST['Name'];
$Club=$_POST['Club'];
 ?>

<html>
<head>
<title>Process Record</title>
</head>
<body>
 <h1>Searching for information</h1>


<?php
//$servername = "localhost";
//$username = "username";
//$password = "password";
//$dbname = "myDB";
// Create connection
$con = mysqli_connect("localhost","root","","rowers");
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 

$sql = "SELECT * FROM ROWERS WHERE Name='$Name'";
$result = $con->query($sql);	

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name of the Rower: " . $row["Name"]. " <br> Height: " . $row["Height"]. " <br> Weight: " . $row["Weight"]. " <br> School: " . $row["School"]. " <br> Club: " . $row["Club"]. " <br> Comments: " . $row["Comments"]. "<br> Gender: " . $row["Gender"]. "<br>";
    }
} else {
    echo "0 results";
}
$con->close();
?>
</body>
</html>