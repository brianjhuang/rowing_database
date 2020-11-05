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
                <tr>
                    <td>Boat Name:</td>
                    <td><input type="VARCHAR(255)" name="Namet" size="30"/></td>
                </tr>
                <tr>
                    <td>Club Name:</td>
                    <td>
                        <select name="Clubt">
							<option type="VARCHAR(255)" value=""></option>
                            <option type="VARCHAR(255)" value="Austin Rowing Club">Austin Rowing Club</option>
                            <option type="VARCHAR(255)" value="Cambridge Crew">Cambridge Crew</option>
                            <option type="VARCHAR(255)" value="Colorado Jr. Crew">Colorado Jr. Crew</option>
                            <option type="VARCHAR(255)" value="Dallas Rowing Club">Dallas Rowing Club</option>
                            <option type="VARCHAR(255)" value="Dallas United Crew Inc.">Dallas United Crew Inc.</option>
                            <option type="VARCHAR(255)" value="Episcopal School of Dallas">Episcopal School of Dallas</option>
                            <option type="VARCHAR(255)" value="Fort Collins Rowing Association">Fort Collins Rowing Association</option>
                            <option type="VARCHAR(255)" value="Founders Rowing Club">Founders Rowing Club</option>
                            <option type="VARCHAR(255)" value="Jesuit College Prep of Dallas">Jesuit College Prep of Dallas</option>
  							<option type="VARCHAR(255)" value="Kansas City Boat Club">Kansas City Boat Club</option>
                            <option type="VARCHAR(255)" value="Kansas State Rowing Association">Kansas State Rowing Association</option>
  							<option type="VARCHAR(255)"value="Mile High Rowing Club">Mile High Rowing Club</option>
  							<option type="VARCHAR(255)" value="OKC Riversport">OKC Riversport</option>
  							<option type="VARCHAR(255)" value="Parati Competitive Rowing">Parati Competitive Rowing</option>
  							<option type="VARCHAR(255)" value="RowAmerica North Little Rock">RowAmerica North Little Rock</option>
  							<option type="VARCHAR(255)" value="Rowing Club of the Woodlands">Rowing Club of the Woodlands</option>
  							<option type="VARCHAR(255)" value="St. Mark's School of Texas">St. Mark's School of Texas</option>
  							<option type="VARCHAR(255)" value="Texas Rowing Center">Texas Rowing Center</option>
  							<option type="VARCHAR(255)" value="The Hockaday School">The Hockaday School</option>
  							<option type="VARCHAR(255)" value="Tulsa Youth Rowing Association">Tulsa Youth Rowing Association</option>
  							<option type="VARCHAR(255)" value="Unaffiliated (USA)">Unaffiliated (USA)</option>
  							<option type="VARCHAR(255)" value="Ursuline Academy of Dallas">Ursuline Academy of Dallas</option>
  							<option type="VARCHAR(255)" value="White Rock Boathouse, Inc.">White Rock Boathouse, Inc.</option>
                          </select>
                    </td>
                </tr>
                <tr>
                    <td>Rank:</td>
                    <td><input type="VARCHAR(120)" name="Rank" size="30"/></td>
                </tr>
                <tr>
                    <td>Cox:</td>
                    <td><input type="VARCHAR(120)" name="Cox" size="30"/></td>
                </tr>
                <tr>
                    <td>Stroke:</td>
                    <td><input type="VARCHAR(120)" name="Stroke" size="30"/></td>
                </tr>
                <tr>
                    <td>Seven:</td>
                    <td><input type="VARCHAR(120)" name="Seven" size="30"/></td>
                </tr>
                <tr>
                    <td>Six:</td>
                    <td><input type="VARCHAR(120)" name="Six" size="30"/></td>
                </tr>
                <tr>
                    <td>Five:</td>
                    <td><input type="VARCHAR(120)" name="Five" size="30"/></td>
                </tr>
                <tr>
                    <td>Four:</td>
                    <td><input type="VARCHAR(120)" name="Four" size="30"/></td>
                </tr>
                <tr>
                    <td>Three:</td>
                    <td><input type="VARCHAR(120)" name="Three" size="30"/></td>
                </tr>
                <tr>
                    <td>Two:</td>
                    <td><input type="VARCHAR(120)" name="Two" size="30"/></td>
                </tr>
                <tr>
                    <td>Bow:</td>
                    <td><input type="VARCHAR(120)" name="Bow" size="30"/></td>
                </tr>
				<tr>
					<td colspan="2"><input type="submit" value="Submit to find line up information"/></td>
				</tr>
				<br></br>


				<a href="rowing.html">Homepage</a>
				        </form>
				    </body>
				</html>
				