<html>
	<head>
		<title>Rowing Database</title>
	</head>
	<body>
		<h1>Lineups in the Central Region</h1>
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
									<h2>Find Lineup Information</h2>
							<form method="post" action="DisplayRecordst.php">
								<table border="0">
								<tr>
									<td>Boat Name:</td>
									<td><input type="VARCHAR(104)" name="Namet" size="30"/></td>
								</tr>
								<tr>
									<td>Rank:</td>
									<td><input type="VARCHAR(104)" name="Rank" size="30"/></td>
								</tr>
								<tr>
									<td colspan="2"><input type="submit" value="Submit to find lineup information"/></td>
								</tr>
								</table>
								<a href="rowing.html">Homepage</a>
							
				        </form>
				    </body>
				</html>
				