<?php
	$server = "localhost";
	$username = "S0245819";
	$password = "Nguyen1992";
	$database = "S0245819";

	$db = new mysqli($server,$username,$password,$database);
	if ($db -> connect_error) die ("Connection Failed");
	//echo "Connected ";

		//$name = $_POST['playerOrTeamName'];
			//echo $name;
	
		$query =("SELECT * FROM Challenger");
		
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
		

		
	<div>
	<form action="PlayerStat.php" method="GET">
	<p>Select your Player: </p>
		<button name="playerName" type="sumbit" value="19887289"><img src = "Imaqtpie.jpg" width = "150" height = "150" /><BR>Imaqtpie</button> 
		<button name="playerName" type="submit" value="5908"><img src = "Dyrus.jpg" width = "150" height = "150" /><BR>Dyrus</button>
		<button name="playerName" type="submit" value="20132258"><img src = "Doublelift.jpg" width = "150" height = "150" /><BR>Doublelift</button>
		<button name="playerName" type="submit" value="51405"><img src = "Sneaky.jpg" width = "150" height = "150" /><BR>C9 Sneaky</button>
		<button name="playerName" type="submit" value="492066"><img src = "Hai.jpg" width = "150" height = "150" /><BR>C9 Hai</button> <br><br>
		<button name="playerName" type="submit" value="20823651"><img src = "Smoothie.jpg" width = "150" height = "150" /><BR>C9 Smoothie</button>
		<button name="playerName" type="submit" value="77179274"><img src = "Ray.jpg" width = "150" height = "150" /><BR>C9 Ray</button>
		<button name="playerName" type="submit" value="34287847"><img src = "Fabby.png" width = "150" height = "150" /><BR>Liquid fabbbyyy</button>
		<button name="playerName" type="submit" value="10077"><img src = "Scarra.jpg" width = "150" height = "150" /><BR>scarra</button>
		<button name="playerName" type="submit" value="49159160"><img src = "Bjerg.jpg" width = "150" height = "150" /><BR>Soren Bjerg</button> <br><br>
		<button name="playerName" type="submit" value="73759385"><img src = "Stixxay.jpg" width = "150" height = "150" /><BR>Stixxay</button>		
		<button name="playerName" type="submit" value="22696988"><img src = "TheOddOrange.jpg" width = "150" height = "150" /><BR>TheOddOrange</button> 
		<button name="playerName" type="submit" value="19967304"><img src = "Shiphtur.jpg" width = "150" height = "150" /><BR>Shiphtur</button>
		<button name="playerName" type="submit" value="2648"><img src = "Pobelter.jpg" width = "150" height = "150" /><BR>Pobelter</button>
		<button name="playerName" type="submit" value="77432783"><img src = "Shynon.jpg" width = "150" height = "150" /><BR>FOX Shynon</button> <br><br>
		<button name="playerName" type="submit" value="77629935"><img src = "Brandini.jpg" width = "150" height = "150" /><BR>FOX Brandini</button> 
		<button name="playerName" type="submit" value="79420232"><img src = "Akaadian.jpg" width = "150" height = "150" /><BR>FOX Akaadian</button> 
		<button name="playerName" type="submit" value="32672912"><img src = "Damonte.jpg" width = "150" height = "150" /><BR>Damonte</button> 		
		<button name="playerName" type="submit" value="61542283"><img src = "Huhi.jpg" width = "150" height = "150" /><BR>Huhi</button>		
		<button name="playerName" type="submit" value="42060215"><img src = "Turtle.jpg" width = "150" height = "150" /><BR>FZ3R0</button> <br><br>	
		<button name="playerName" type="submit" value="83179090"><img src = "Ryu.jpg" width = "150" height = "150" /><BR>League of Ryu</button> 
		<button name="playerName" type="submit" value="83339085"><img src = "Arrow.jpg" width = "150" height = "150" /><BR>League Of Arrow</button>		
		<button name="playerName" type="submit" value="19787999"><img src = "Zig.jpg" width = "150" height = "150" /><BR>P1 zig</button>
		<button name="playerName" type="submit" value="42762376"><img src = "Altec.jpg" width = "150" height = "150" /><BR>FLY ALTEC</button>
		<button name="playerName" type="submit" value="70011915"><img src = "Moon.jpg" width = "150" height = "150" /><BR>FLY MOON</button>
		
</form>
	</div>
	
	
	<H2> Player Page </H2>
	<table>
            <tr>
               <th>Player Name</th>
			   
                    
                </tr>
					<!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($result)):?>
                <tr>
                    <td><?php echo $row['playerOrTeamName'];?></td>
                   
                </tr>
                <?php endwhile;?> 
         
		 </table>
	
	
	</BODY>


</HTML>