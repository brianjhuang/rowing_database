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
                <tr>
                    <td>Rower Name:</td>
                    <td><input type="VARCHAR(255)" name="Name" size="30"/></td>
                </tr>
                <tr>
                    <td>Height:</td>
                    <td><input type="INT(11)" name="Height" size="30"/></td>
                </tr>
                <tr>
                    <td>Weight:</td>
                    <td><input type="INT(11)" name="Weight" size="30"/></td>
                </tr>
                <tr>
                    <td>School:</td>
                    <td><input type="VARCHAR(255)" name="School" size="30"/></td>
                </tr>
                <tr>
                    <td>Club:</td>
                    <td>
                        <select name="Club">
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
                    <td colspan="2">Give a brief description of the rower and what you think his/her strengths and weaknesses are:</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <textarea name="Comments" cols="50" rows="3"></textarea>
                    </td>
                </tr>
				<tr>
                    <td>Gender:</td>
                    <td><input type="radio" name="Gender" value="Male"/>Male
                    <input type="radio"
                    name="Gender" value="Female"/>Female
                </tr>
				
				
				
				                <hr>
				                <br>
								
					


				                <tr>
				                    <td colspan="2"><input type="Submit" value="Submit Response"/></td>
				                </tr>
								<a href="rowing.html">Homepage</a>

				        </form>
				    </body>
				</html>
				