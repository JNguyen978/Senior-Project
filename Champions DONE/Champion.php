<?PHP
$server = "localhost";
$username = "S0245819";
$password = "Nguyen1992";
$database = "S0245819";

$db = new mysqli($server,$username,$password,$database);
if ($db -> connect_error) die ("Connection Failed");
	//echo "Connected ";
	
//mysqli_select_db($db, "NarakaPain");
	
$RiotAPI = file_get_contents("https://global.api.pvp.net/api/lol/static-data/na/v1.2/champion?api_key=RGAPI-9f105d8f-e469-4e5e-bf31-1d2be6fd6763");	
	//echo $RiotAPI; summoner-spell

$data = json_decode($RiotAPI, true);
		
	//var_dump($data);
	
$champ = array(
'Aatrox',
'Thresh',
'Tryndamere',
'Gragas',
'Cassiopeia',
'AurelionSol',
'Ryze',
'Poppy',
'Sion',
'Annie',
'Jhin',
'Karma',
'Nautilus',
'Kled',
'Lux',
'Ahri',
'Olaf',
'Camille',
'Viktor',
'Anivia',
'Singed',
'Garen',
'Lissandra',
'Maokai',
'Morgana',
'Evelynn',
'Heimerdinger',
'Fizz',
'Zed',
'Rumble',
'Mordekaiser',
'Sona',
'KogMaw',
'Katarina',
'Lulu',
'Ashe',
'Karthus',
'Alistar',
'Darius',
'Vayne',
'Varus',
'Udyr',
'Leona',
'Jayce',
'Syndra',
'Pantheon',
'Riven',
'Khazix',
'Corki',
'Azir',
'Caitlyn',
'Nidalee',
'Kennen',
'Galio',
'Veigar',
'Bard',
'Gnar',
'Malzahar',
'Graves',
'Vi',
'Kayle',
'Irelia',
'LeeSin',
'Illaoi',
'Elise',
'Volibear',
'Nunu',
'TwistedFate',
'Jax',
'Shyvana',
'Kalista',
'DrMundo',
'Ivern',
'Diana',
'TahmKench',
'Brand',
'Sejuani',
'Vladimir',
'Zac',
'RekSai',
'Quinn',
'Akali',
'Taliyah',
'Tristana',
'Hecarim',
'Sivir',
'Lucian',
'Rengar',
'Warwick',
'Skarner',
'Malphite',
'Yasuo',
'Xerath',
'Teemo',
'Nasus',
'Renekton',
'Draven',
'Shaco',
'Swain',
'Talon',
'Janna',
'Ziggs',
'Ekko',
'Orianna',
'Fiora',
'FiddleSticks',
'Chogath',
'Rammus',
'Leblanc',
'Soraka',
'Zilean',
'Nocturne',
'Jinx',
'Yorick',
'Urgot',
'Kindred',
'MissFortune',
'MonkeyKing',
'Blitzcrank',
'Shen',
'Braum',
'XinZhao',
'Twitch',
'MasterYi',
'Taric',
'Amumu',
'Gangplank',
'Trundle',
'Kassadin',
'Velkoz',
'Zyra',
'Nami',
'JarvanIV',
'Ezreal',
);

	//echo $spells[0]; 
	
for ($i = 0; $i<=135;$i++){
	
$id = $data["data"][$champ[$i]]['id'];	
	echo "id = ($id)";
$title = $data["data"][$champ[$i]]['title'];
$name = $data["data"][$champ[$i]]['name'];	
	
$stmt = $db->prepare("INSERT INTO Champion(id,title,name) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $id, $title, $name);

$stmt->execute();
	
echo $db->error;


}

?>
