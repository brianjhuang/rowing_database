<?php
$BoatName=$_POST['Namet'];
$Rank=$_POST['Rank'];
 ?>

<html>
<head>
<title>Process Record</title>
</head>
<body>
 <h1>Searching for information</h1>


<?php
// Create connection
$con = mysqli_connect("localhost","root","","rowers");
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 

$sql = "SELECT * FROM BOATS WHERE Namet='$BoatName'";
$sql = "SELECT * FROM BOATS WHERE Rank='$Rank'";
$result = $con->query($sql);	

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name of the Boat: " . $row["Namet"]. " <br> Club: " . $row["Clubt"]. " <br> Rank: " . $row["Rank"]. " <br> Cox: " . $row["Cox"]. " <br> Stroke: " . $row["Stroke"]. " <br> Seven: " . $row["Seven"]. " <br> Six: " . $row["Six"]. "<br> Five: " . $row["Five"]. "<br> Four: " . $row["Four"]. "<br> Three: " . $row["Three"]. "<br> Two: " . $row["Two"]. "<br> Bow: " . $row["Bow"]. "<br>";
    }
} else {
    echo "0 results";
}
$con->close();
?>
</body>
</html>
