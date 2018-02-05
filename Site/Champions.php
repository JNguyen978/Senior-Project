<?php
	$server = "localhost";
	$username = "S0245819";
	$password = "Nguyen1992";
	$database = "S0245819";

	$db = new mysqli($server,$username,$password,$database);
	if ($db -> connect_error) die ("Connection Failed");
	//echo "Connected ";

		//$name = $_POST['ChampName'];
			//echo $name;
		
		//$query =("SELECT * FROM Champion");
		
		//$result = $db -> query ($query);
		//if (!$result) die ("bad select");

	//mysqli_close();
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
	<form action="ChampStat.php" method="GET">
	
	<p>Select your Champion: </p>

		<button class="button button1" name="ChampName" type="submit" value="266"><img src = "Aatrox.png" width = "120" height = "120" /><BR>Aatrox</button>
		<button class="button button1" name="ChampName" type="submit" value="103"><img src = "Ahri.png" width = "120" height = "120" /><BR>Ahri</button>
		<button class="button button1" name="ChampName" type="submit" value="84"><img src = "Akali.png" width = "120" height = "120" /><BR>Akali</button>
		<button class="button button1" name="ChampName" type="submit" value="12"><img src = "Alistar.png" width = "120" height = "120" /><BR>Alistar</button>
		<button class="button button1" name="ChampName" type="submit" value="32"><img src = "Amumu.png" width = "120" height = "120" /><BR>Amumu</button>
		<button class="button button1" name="ChampName" type="submit" value="34"><img src = "Anivia.png" width = "120" height = "120" /><BR>Anivia</button>
<br><br><button class="button button1" name="ChampName" type="sumbit" value="1"><img src = "Annie.jpg" width = "120" height = "120" /><BR>Annie</button>
		<button class="button button1" name="ChampName" type="submit" value="22"><img src = "Ashe.png" width = "120" height = "120" /><BR>Ashe</button>
		<button class="button button1" name="ChampName" type="submit" value="136"><img src = "Aurelion_Sol.png" width = "120" height = "120" /><BR>Aurelion Sol</button>
		<button class="button button1" name="ChampName" type="submit" value="268"><img src = "Azir.png" width = "120" height = "120" /><BR>Azir</button>
		<button class="button button1" name="ChampName" type="submit" value="432"><img src = "Bard.png" width = "120" height = "120" /><BR>Bard</button>
		<button class="button button1" name="ChampName" type="submit" value="53"><img src = "Blitzcrank.png" width = "120" height = "120" /><BR>Blitzcrank</button>
<br><br><button class="button button1" name="ChampName" type="submit" value="63"><img src = "Brand.png" width = "120" height = "120" /><BR>Brand</button>
		<button class="button button1" name="ChampName" type="submit" value="201"><img src = "Braum.png" width = "120" height = "120" /><BR>Braum</button>
		<button class="button button1" name="ChampName" type="submit" value="51"><img src = "Caitlyn.png" width = "120" height = "120" /><BR>Caitlyn</button>
		<button class="button button1" name="ChampName" type="submit" value="164"><img src = "Camille.png" width = "120" height = "120" /><BR>Camille</button>
		<button class="button button1" name="ChampName" type="submit" value="69"><img src = "Cassiopeia.png" width = "120" height = "120" /><BR>Cassiopeia</button>
		<button class="button button1" name="ChampName" type="sumbit" value="31"><img src = "Cho'Gath.png" width = "120" height = "120" /><BR>Cho'Gath</button>
<br><br><button class="button button1" name="ChampName" type="submit" value="42"><img src = "Corki.png" width = "120" height = "120" /><BR>Corki</button>
		<button class="button button1" name="ChampName" type="submit" value="122"><img src = "Darius.png" width = "120" height = "120" /><BR>Darius</button>
		<button class="button button1" name="ChampName" type="submit" value="131"><img src = "Diana.png" width = "120" height = "120" /><BR>Diana</button>
		<button class="button button1" name="ChampName" type="submit" value="36"><img src = "Dr._Mundo.png" width = "120" height = "120" /><BR>Dr. Mundo</button>
		<button class="button button1" name="ChampName" type="submit" value="119"><img src = "Draven.png" width = "120" height = "120" /><BR>Draven</button>
		<button class="button button1" name="ChampName" type="submit" value="245"><img src = "Ekko.png" width = "120" height = "120" /><BR>Ekko</button>
<br><br><button class="button button1" name="ChampName" type="submit" value="60"><img src = "Elise.png" width = "120" height = "120" /><BR>Elise</button>
		<button class="button button1" name="ChampName" type="submit" value="28"><img src = "Evelynn.png" width = "120" height = "120" /><BR>Evelynn</button>
		<button class="button button1" name="ChampName" type="submit" value="81"><img src = "Ezreal.png" width = "120" height = "120" /><BR>Ezreal</button>
		<button class="button button1" name="ChampName" type="submit" value="9"><img src = "Fiddlesticks.png" width = "120" height = "120" /><BR>Fiddlesticks</button>
		<button class="button button1" name="ChampName" type="submit" value="114"><img src = "Fiora.png" width = "120" height = "120" /><BR>Fiora</button>
		<button class="button button1" name="ChampName" type="submit" value="105"><img src = "Fizz.png" width = "120" height = "120" /><BR>Fizz</button>
<br><br><button class="button button1" name="ChampName" type="submit" value="3"><img src = "Galio.png" width = "120" height = "120" /><BR>Galio</button>
		<button class="button button1" name="ChampName" type="sumbit" value="41"><img src = "Gangplank.png" width = "120" height = "120" /><BR>Gangplank</button>
		<button class="button button1" name="ChampName" type="submit" value="86"><img src = "Garen.png" width = "120" height = "120" /><BR>Garen</button>
		<button class="button button1" name="ChampName" type="sumbit" value="150"><img src = "Gnar.png" width = "120" height = "120" /><BR>Gnar</button>
		<button class="button button1" name="ChampName" type="submit" value="79"><img src = "Gragas.png" width = "120" height = "120" /><BR>Gragas</button>
		<button class="button button1" name="ChampName" type="submit" value="104"><img src = "Graves.png" width = "120" height = "120" /><BR>Graves</button>
<br><br><button class="button button1" name="ChampName" type="submit" value="120"><img src = "Hecarim.png" width = "120" height = "120" /><BR>Hecarim</button>
		<button class="button button1" name="ChampName" type="submit" value="74"><img src = "Heimerdinger.png" width = "120" height = "120" /><BR>Heimerdinger</button>
		<button class="button button1" name="ChampName" type="submit" value="420"><img src = "Illaoi.png" width = "120" height = "120" /><BR>Illaoi</button>
		<button class="button button1" name="ChampName" type="submit" value="39"><img src = "Irelia.png" width = "120" height = "120" /><BR>Irelia</button>
		<button class="button button1" name="ChampName" type="submit" value="427"><img src = "Ivern.png" width = "120" height = "120" /><BR>Ivern</button>
		<button class="button button1" name="ChampName" type="submit" value="40"><img src = "Janna.png" width = "120" height = "120" /><BR>Janna</button>
<br><br><button class="button button1" name="ChampName" type="submit" value="59"><img src = "Jarvan_IV.png" width = "120" height = "120" /><BR>Jarvan IV</button>
		<button class="button button1" name="ChampName" type="submit" value="24"><img src = "Jax.png" width = "120" height = "120" /><BR>Jax</button>
		<button class="button button1" name="ChampName" type="submit" value="126"><img src = "Jayce.png" width = "120" height = "120" /><BR>Jayce</button>
		<button class="button button1" name="ChampName" type="submit" value="202"><img src = "Jhin.png" width = "120" height = "120" /><BR>Jhin</button>
		<button class="button button1" name="ChampName" type="submit" value="222"><img src = "Jinx.png" width = "120" height = "120" /><BR>Jinx</button>
		<button class="button button1" name="ChampName" type="submit" value="429"><img src = "Kalista.png" width = "120" height = "120" /><BR>Kalista</button>
<br><br><button class="button button1" name="ChampName" type="submit" value="43"><img src = "Karma.png" width = "120" height = "120" /><BR>Karma</button>
		<button class="button button1" name="ChampName" type="submit" value="30"><img src = "Karthus.png" width = "120" height = "120" /><BR>Karthus</button>
		<button class="button button1" name="ChampName" type="submit" value="38"><img src = "Kassadin.png" width = "120" height = "120" /><BR>Kassadin</button>
		<button class="button button1" name="ChampName" type="sumbit" value="55"><img src = "Katarina.png" width = "120" height = "120" /><BR>Katarina</button>
		<button class="button button1" name="ChampName" type="submit" value="10"><img src = "Kayle.png" width = "120" height = "120" /><BR>Kayle</button>
		<button class="button button1" name="ChampName" type="submit" value="85"><img src = "Kennen.png" width = "120" height = "120" /><BR>Kennen</button>
<br><br><button class="button button1" name="ChampName" type="sumbit" value="121"><img src = "Kha'Zix.png" width = "120" height = "120" /><BR>Kha'Zix</button>
		<button class="button button1" name="ChampName" type="submit" value="203"><img src = "Kindred.png" width = "120" height = "120" /><BR>Kindred</button>
		<button class="button button1" name="ChampName" type="submit" value="240"><img src = "Kled.png" width = "120" height = "120" /><BR>Kled</button>
		<button class="button button1" name="ChampName" type="submit" value="96"><img src = "Kog'Maw.png" width = "120" height = "120" /><BR>Kog'Maw</button>
		<button class="button button1" name="ChampName" type="submit" value="7"><img src = "LeBlanc.png" width = "120" height = "120" /><BR>LeBlanc</button>
		<button class="button button1" name="ChampName" type="submit" value="64"><img src = "Lee_Sin.png" width = "120" height = "120" /><BR>Lee Sin</button>
<br><br><button class="button button1" name="ChampName" type="submit" value="89"><img src = "Leona.png" width = "120" height = "120" /><BR>Leona</button>
		<button class="button button1" name="ChampName" type="submit" value="127"><img src = "Lissandra.png" width = "120" height = "120" /><BR>Lissandra</button>
		<button class="button button1" name="ChampName" type="submit" value="236"><img src = "Lucian.png" width = "120" height = "120" /><BR>Lucian</button>
		<button class="button button1" name="ChampName" type="submit" value="117"><img src = "Lulu.png" width = "120" height = "120" /><BR>Lulu</button>
		<button class="button button1" name="ChampName" type="submit" value="99"><img src = "Lux.png" width = "120" height = "120" /><BR>Lux</button>
		<button class="button button1" name="ChampName" type="submit" value="54"><img src = "Malphite.png" width = "120" height = "120" /><BR>Malphite</button>
<br><br><button class="button button1" name="ChampName" type="submit" value="90"><img src = "Malzahar.png" width = "120" height = "120" /><BR>Malzahar</button>
		<button class="button button1" name="ChampName" type="submit" value="57"><img src = "Maokai.png" width = "120" height = "120" /><BR>Maokai</button>	
		<button class="button button1" name="ChampName" type="sumbit" value="11"><img src = "Master_Yi.png" width = "120" height = "120" /><BR>Master Yi</button>	
		<button class="button button1" name="ChampName" type="sumbit" value="21"><img src = "Miss_Fortune.png" width = "120" height = "120" /><BR>Miss Fortune</button>
		<button class="button button1" name="ChampName" type="submit" value="82"><img src = "Mordekaiser.png" width = "120" height = "120" /><BR>Mordekaiser</button>
		<button class="button button1" name="ChampName" type="submit" value="25"><img src = "Morgana.png" width = "120" height = "120" /><BR>Morgana</button>
<br><br><button class="button button1" name="ChampName" type="submit" value="267"><img src = "Nami.png" width = "120" height = "120" /><BR>Nami</button>
		<button class="button button1" name="ChampName" type="submit" value="75"><img src = "Nasus.png" width = "120" height = "120" /><BR>Nasus</button>
		<button class="button button1" name="ChampName" type="submit" value="111"><img src = "Nautilus.png" width = "120" height = "120" /><BR>Nautilus</button>
		<button class="button button1" name="ChampName" type="submit" value="76"><img src = "Nidalee.png" width = "120" height = "120" /><BR>Nidalee</button>
		<button class="button button1" name="ChampName" type="submit" value="56"><img src = "Nocturne.png" width = "120" height = "120" /><BR>Nocturne</button>
		<button class="button button1" name="ChampName" type="submit" value="20"><img src = "Nunu.png" width = "120" height = "120" /><BR>Nunu</button>
<br><br><button class="button button1" name="ChampName" type="submit" value="2"><img src = "Olaf.png" width = "120" height = "120" /><BR>Olaf</button>
		<button class="button button1" name="ChampName" type="submit" value="61"><img src = "Orianna.png" width = "120" height = "120" /><BR>Orianna</button>
		<button class="button button1" name="ChampName" type="sumbit" value="80"><img src = "Pantheon.png" width = "120" height = "120" /><BR>Pantheon</button>
		<button class="button button1" name="ChampName" type="submit" value="78"><img src = "Poppy.png" width = "120" height = "120" /><BR>Poppy</button>
		<button class="button button1" name="ChampName" type="submit" value="133"><img src = "Quinn.png" width = "120" height = "120" /><BR>Quinn</button>
		<button class="button button1" name="ChampName" type="submit" value="497"><img src = "Rakan.png" width = "120" height = "120" /><BR>Rakan</button>
<br><br><button class="button button1" name="ChampName" type="submit" value="33"><img src = "Rammus.png" width = "120" height = "120" /><BR>Rammus</button>
		<button class="button button1" name="ChampName" type="submit" value="421"><img src = "Rek_Sai.png" width = "120" height = "120" /><BR>Rek'Sai</button>
		<button class="button button1" name="ChampName" type="submit" value="58"><img src = "Renekton.png" width = "120" height = "120" /><BR>Renekton</button>
		<button class="button button1" name="ChampName" type="sumbit" value="107"><img src = "Rengar.png" width = "120" height = "120" /><BR>Rengar</button>
		<button class="button button1" name="ChampName" type="sumbit" value="92"><img src = "Riven.png" width = "120" height = "120" /><BR>Riven</button>
		<button class="button button1" name="ChampName" type="submit" value="68"><img src = "Rumble.png" width = "120" height = "120" /><BR>Rumble</button>
<br><br><button class="button button1" name="ChampName" type="submit" value="13"><img src = "Ryze.png" width = "120" height = "120" /><BR>Ryze</button>
		<button class="button button1" name="ChampName" type="submit" value="113"><img src = "Sejuani.png" width = "120" height = "120" /><BR>Sejuani</button>
		<button class="button button1" name="ChampName" type="submit" value="35"><img src = "Shaco.png" width = "120" height = "120" /><BR>Shaco</button>
		<button class="button button1" name="ChampName" type="submit" value="98"><img src = "Shen.png" width = "120" height = "120" /><BR>Shen</button>
		<button class="button button1" name="ChampName" type="submit" value="102"><img src = "Shyvana.png" width = "120" height = "120" /><BR>Shyvana</button>
		<button class="button button1" name="ChampName" type="submit" value="27"><img src = "Singed.png" width = "120" height = "120" /><BR>Singed</button>
<br><br><button class="button button1" name="ChampName" type="submit" value="14"><img src = "Sion.png" width = "120" height = "120" /><BR>Sion</button>
		<button class="button button1" name="ChampName" type="submit" value="15"><img src = "Sivir.png" width = "120" height = "120" /><BR>Sivir</button>
		<button class="button button1" name="ChampName" type="submit" value="72"><img src = "Skarner.png" width = "120" height = "120" /><BR>Skarner</button>
		<button class="button button1" name="ChampName" type="submit" value="37"><img src = "Sona.png" width = "120" height = "120" /><BR>Sona</button>
		<button class="button button1" name="ChampName" type="submit" value="16"><img src = "Soraka.png" width = "120" height = "120" /><BR>Soraka</button>
		<button class="button button1" name="ChampName" type="submit" value="50"><img src = "Swain.png" width = "120" height = "120" /><BR>Swain</button>	
<br><br><button class="button button1" name="ChampName" type="submit" value="134"><img src = "Syndra.png" width = "120" height = "120" /><BR>Syndra</button>
		<button class="button button1" name="ChampName" type="sumbit" value="223"><img src = "Tahm_Kench.png" width = "120" height = "120" /><BR>Tahm Kench</button>
		<button class="button button1" name="ChampName" type="submit" value="163"><img src = "Taliyah.png" width = "120" height = "120" /><BR>Taliyah</button>
		<button class="button button1" name="ChampName" type="submit" value="91"><img src = "Talon.png" width = "120" height = "120" /><BR>Talon</button>
		<button class="button button1" name="ChampName" type="submit" value="44"><img src = "Taric.png" width = "120" height = "120" /><BR>Taric</button>
		<button class="button button1" name="ChampName" type="submit" value="17"><img src = "Teemo.png" width = "120" height = "120" /><BR>Teemo</button>
<br><br><button class="button button1" name="ChampName" type="submit" value="412"><img src = "Thresh.png" width = "120" height = "120" /><BR>Thresh</button>
		<button class="button button1" name="ChampName" type="submit" value="18"><img src = "Tristana.png" width = "120" height = "120" /><BR>Tristana</button>
		<button class="button button1" name="ChampName" type="submit" value="48"><img src = "Trundle.png" width = "120" height = "120" /><BR>Trundle</button>
		<button class="button button1" name="ChampName" type="submit" value="23"><img src = "Tryndamere.png" width = "120" height = "120" /><BR>Tryndamere</button>
		<button class="button button1" name="ChampName" type="submit" value="4"><img src = "Twisted_Fate.png" width = "120" height = "120" /><BR>Twisted Fate</button>
		<button class="button button1" name="ChampName" type="submit" value="29"><img src = "Twitch.png" width = "120" height = "120" /><BR>Twitch</button>
<br><br><button class="button button1" name="ChampName" type="submit" value="77"><img src = "Udyr.png" width = "120" height = "120" /><BR>Udyr</button>
		<button class="button button1" name="ChampName" type="submit" value="6"><img src = "Urgot.png" width = "120" height = "120" /><BR>Urgot</button>
		<button class="button button1" name="ChampName" type="submit" value="110"><img src = "Varus.png" width = "120" height = "120" /><BR>Varus</button>
		<button class="button button1" name="ChampName" type="sumbit" value="67"><img src = "Vayne.png" width = "120" height = "120" /><BR>Vayne</button>
		<button class="button button1" name="ChampName" type="submit" value="45"><img src = "Veigar.png" width = "120" height = "120" /><BR>Veigar</button>
		<button class="button button1" name="ChampName" type="submit" value="161"><img src = "Vel'Koz.png" width = "120" height = "120" /><BR>Vel'Koz</button>
<br><br><button class="button button1" name="ChampName" type="submit" value="112"><img src = "Viktor.png" width = "120" height = "120" /><BR>Viktor</button>
		<button class="button button1" name="ChampName" type="submit" value="254"><img src = "Vi.png" width = "120" height = "120" /><BR>Vi</button>
		<button class="button button1" name="ChampName" type="submit" value="8"><img src = "Vladimir.png" width = "120" height = "120" /><BR>Vladimir</button>	
		<button class="button button1" name="ChampName" type="submit" value="106"><img src = "Volibear.png" width = "120" height = "120" /><BR>Volibear</button>
		<button class="button button1" name="ChampName" type="submit" value="19"><img src = "Warwick.png" width = "120" height = "120" /><BR>Warwick</button>
		<button class="button button1" name="ChampName" type="submit" value="62"><img src = "Wukong.png" width = "120" height = "120" /><BR>Wukong</button>
<br><br><button class="button button1" name="ChampName" type="submit" value="498"><img src = "Xayah.png" width = "120" height = "120" /><BR>Xayah</button> 
		<button class="button button1" name="ChampName" type="submit" value="101"><img src = "Xerath.png" width = "120" height = "120" /><BR>Xerath</button>
		<button class="button button1" name="ChampName" type="submit" value="5"><img src = "Xin_Zhao.png" width = "120" height = "120" /><BR>Xin Zhao</button>
		<button class="button button1" name="ChampName" type="submit" value="157"><img src = "Yasuo.png" width = "120" height = "120" /><BR>Yasuo</button>	
		<button class="button button1" name="ChampName" type="submit" value="83"><img src = "Yorick.png" width = "120" height = "120" /><BR>Yorick</button>
		<button class="button button1" name="ChampName" type="submit" value="154"><img src = "Zac.png" width = "120" height = "120" /><BR>Zac</button>
<br><br><button class="button button1" name="ChampName" type="submit" value="238"><img src = "Zed.png" width = "120" height = "120" /><BR>Zed</button>
		<button class="button button1" name="ChampName" type="submit" value="115"><img src = "Ziggs.png" width = "120" height = "120" /><BR>Ziggs</button>
		<button class="button button1" name="ChampName" type="submit" value="26"><img src = "Zilean.png" width = "120" height = "120" /><BR>Zilean</button>	
		<button class="button button1" name="ChampName" type="submit" value="143"><img src = "Zyra.png" width = "120" height = "120" /><BR>Zyra</button>		
</form><br><br>
</div>	

<footer> Jim Nguyen CSC521 CapStone </footer>	
	
	


</HTML>