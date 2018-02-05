<?php
	$server = "localhost";
	$username = "S0245819";
	$password = "Nguyen1992";
	$database = "S0245819";

	$db = new mysqli($server,$username,$password,$database);
	if ($db -> connect_error) die ("Connection Failed");
	//echo "Connected ";

		$ChampName = $_POST['ChampName'];
			//echo $name;
		
		$query =("SELECT name,title FROM Champion WHERE name = '$ChampName'");
		
		$result = $db -> query ($query);
		if (!$result) die ("bad select");

	mysqli_close();
								// THIS PAGE SHOULD ALLOW SEARCH ALL SPECIFIC CHAMPION PLAYED IN A GAME - DISPLAY ONE CHAMP WITH DIFFERENT OR SAME PLAYERS 
?>

<!DOCTYPE html>
<html>

	<head>
        <title>League of Climbs</title> <!-- Title for Tab -->
		<link href="Style.css" rel="stylesheet" type="text/css" />
       
    </head>

	<body>
		<header>
				<H1> Welcome to The League of Climbs </H1>
		</header>		
			<ul>
				<li><a href="index.php">Home Page</a></li>
    				<li><a href="Champions.php">Champions</a></li>
				<li><a href="Players.php">Players</a></li>
			</ul>
				
		<table><br>
            <tr>
               <th>Name</th>
               <th>Title</th>
			  			
                    
                </tr>
					<!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($result)):?>
				<br><tr>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['title'];?></td>
                  
                </tr>
                <?php endwhile;?>
         
		 </table>
	</body>
</html>