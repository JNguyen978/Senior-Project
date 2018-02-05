<?php
	$server = "localhost";
	$username = "S0245819";
	$password = "Nguyen1992";
	$database = "S0245819";

	$db = new mysqli($server,$username,$password,$database);
	if ($db -> connect_error) die ("Connection Failed");
	 //echo "Connected ";

		$PlayerId = $_GET['playerName'];
			//echo $name;
		
		$query =(" 
			SELECT DISTINCT
				c.playerOrTeamName AS Player,
				champ.name AS Champion,
				it0.name AS item0, 
				it1.name AS item1, 
				it2.name AS item2, 
				it3.name AS item3, 
				it4.name AS item4, 
				it5.name AS item5,
				it6.name AS item6,
				spell1.name AS spell1,
				spell2.name AS spell2,
                g.championsKilled AS Kills,
                g.numDeaths AS Deaths,
                g.assists AS Assists,
                g.gameId AS GameId
			FROM 
				GameStat AS g
					JOIN
                GameId AS gi ON gi.gameId = g.gameId
                	JOIN
				Challenger AS c ON c.playerOrTeamId = g.summonerId
					JOIN
				Champion AS champ ON champ.id = g.championId
					JOIN 
				RiotItems it0 ON g.item0 = it0.id
					JOIN
				RiotItems it1 ON g.item1 = it1.id
					JOIN
				RiotItems it2 ON g.item2 = it2.id
					JOIN
				RiotItems it3 ON g.item3 = it3.id
					JOIN
				RiotItems it4 ON g.item4 = it4.id
					JOIN
				RiotItems it5 ON g.item5 = it5.id
					JOIN
				RiotItems it6 ON g.item6 = it6.id
					JOIN 
				SummonerSpells spell1 ON g.spell1 = spell1.id
					JOIN
				SummonerSpells spell2 ON g.spell2 = spell2.id
              
			WHERE 
				c.playerOrTeamId = '$PlayerId'
			ORDER BY GameId DESC
			LIMIT 10");
			//echo $query;
		
		$result = $db -> query ($query);
		if (!$result) die ("bad select");

	mysqli_close();
			// SAME AS CHAMP DISPLAY ONE  PLAYER WITH DIFFERENT OR SAME CHAMP PLAYED.
			// https://www.w3schools.com/tags/att_button_value.asp
			//https://www.w3schools.com/tags/att_input_value.asp
?>


<!DOCTYPE HTML>
<HTML>
	<HEAD> 
		<TITLE> League of Climbs </TITLE>
		<link href="Style.css" rel="stylesheet" type="text/css" />
	</HEAD>

	<BODY>
	<header>
	<H1> Welcome to The League of Climbs </H1>
	</header>
	<ul>
		<li><a href="index.php">Home Page</a></li>
    	<li><a href="Champions.php">Champions</a></li>
		<li><a href="Players.php">Players</a></li>
		<li><a href="Items.php">Items</a></li>
	</ul>
		<br><form action="PlayerResult.php" method="post">
			<!-- type = using Text type | Name = what is typed in is considered as a variable | placeholder = text in box  -->
            <input type="text" name="playerOrTeamName" placeholder="Enter GameId #">
            <input type="submit" name="submit" value="Enter">
        </form> 
	
	
		<br><H2> Player Builds </H2><br>
	<table>
            <tr>
			   <th>Players Name</th>
			   <th>Champion Name</th>
			   <th>Item1</th>
			   <th>Item2</th>
			   <th>Item3</th>
			   <th>Item4</th>
			   <th>Item5</th>
			   <th>Item6</th>
			   <th>Item7</th>
			   <th>Spell1</th>
			   <th>Spell2</th>
			   <th>Kills</th>
			   <th>Deaths</th>
			   <th>Assists</th>
			   <th>GameId</th>
			   
                    
                </tr>
					<!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($result)):?>
                <tr>
					<td><?php echo $row['Player'];?></td>
                    <td><?php echo $row['Champion'];?></td>            
					<td><?php echo $row['item0'];?></td>
					<td><?php echo $row['item1'];?></td>
					<td><?php echo $row['item2'];?></td>
					<td><?php echo $row['item3'];?></td>
					<td><?php echo $row['item4'];?></td>
					<td><?php echo $row['item5'];?></td>
					<td><?php echo $row['item6'];?></td>
					<td><?php echo $row['spell1'];?></td>
					<td><?php echo $row['spell2'];?></td>
					<td><?php echo $row['Kills'];?></td>
					<td><?php echo $row['Deaths'];?></td>
					<td><?php echo $row['Assists'];?></td>
					<td><?php echo $row['GameId'];?></td>
                </tr>
                <?php endwhile;?> 
         
		 </table>
	
	
	</BODY>


</HTML>