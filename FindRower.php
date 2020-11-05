<html>
	<head>
		<title>Rowing Database</title>
	</head>
	<body>
		<h1>Rowers in the Central Region</h1>
		<h2> <id="date">
<p id="demo"></p>

<script>
document.getElementById("demo").innerHTML = Date();
</script>
			<br />
		</h2>
		
        <form method="post" action="processrowers.php">
            <table border="0">
				
				                <hr>
				                <br>
					            </table>
					        </form>
									<h2>Find Rower Information</h2>
							<form method="post" action="DisplayRecords.php">
								<table border="0">
								<tr>
									<td>Name:</td>
									<td><input type="VARCHAR(104)" name="Name" size="30"/></td>
								</tr>
								<tr>
									<td>Club:</td>
									<td><input type="VARCHAR(104)" name="Club" size="30"/></td>
								</tr>
								<tr>
									<td colspan="2"><input type="submit" value="Submit to find rower information"/></td>
								</tr>
								</table>
							
							<br></br>
							<a href="rowing.html">Homepage</a>
				        </form>
				    </body>
				</html>
				