<?php

$Name=$_POST['Name'];
$Height=$_POST['Height'];
$Weight=$_POST['Weight'];
$School=$_POST['School'];
$Club=$_POST['Club'];
$Comments=$_POST['Comments'];
$Gender=$_POST['Gender'];
$Image=$_POST['Image'];
$BoatName=$_POST['Namet'];
$ClubName=$_POST['Clubt'];
$Rank=$_POST['Rank'];
$Cox=$_POST['Cox'];
$Stroke=$_POST['Stroke'];
$Seven=$_POST['Seven'];
$Six=$_POST['Six'];
$Five=$_POST['Five'];
$Four=$_POST['Four'];
$Three=$_POST['Three'];
$Two=$_POST['Two'];
$Bow=$_POST['Bow'];
?>

<html>
    <head>
        <title>Process Rowers </title>
    </head>
    <body>

        <h1>Rower Info Appended.</h1>

        <?php
        $con = mysqli_connect("localhost","root","mysql", "rowers");

        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

 $sql1="INSERT INTO ROWERS (Name,Height,Weight,School,Club,Comments,Gender) VALUES ('$Name','$Height','$Weight','$School','$Club','$Comments','$Gender');";
        $sql2="INSERT INTO BOATS (Namet,Clubt,Rank,Cox,Stroke,Seven,Six,Five,Four,Three,Two,Bow) VALUES ('$BoatName','$ClubName','$Rank','$Cox','$Stroke','$Seven','$Six','$Five','$Four','$Three','$Two','$Bow');";


        $result1 = mysqli_query($con, $sql1);
        if ( false===$result1 ) {
            printf("error1: %s\n", mysqli_error($con));
        }
        $result2 = mysqli_query($con, $sql2);
        if (false ===$result2){
            printf("error2: %s\n", mysqli_error($con));
        }
        else {
            echo "success";
        }
        mysqli_close($con);
        ?>
    </body>
</html>