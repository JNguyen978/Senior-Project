<?PHP
$server = "localhost";
$username = "S0245819";
$password = "Nguyen1992";
$database = "S0245819";

$db = new mysqli($server,$username,$password,$database);
if ($db -> connect_error) die ("Connection Failed");
	//echo "Connected ";
	
//mysqli_select_db($db, "NarakaPain");
	
$RiotAPI = file_get_contents("https://global.api.pvp.net/api/lol/static-data/na/v1.2/summoner-spell?api_key=RGAPI-9f105d8f-e469-4e5e-bf31-1d2be6fd6763");	
	//echo $RiotAPI; summoner-spell

$data = json_decode($RiotAPI, true);
		
	//var_dump($data);
	

$spells = array ('SummonerBoost' , 'SummonerTeleport' ,'SummonerPoroRecall' , 'SummonerHaste' , 'SummonerDot' , 'SummonerSnowball' , 'SummonerHeal' , 'SummonerPoroThrow' , 'SummonerSmite' , 'SummonerExhaust' , 'SummonerMana' , 'SummonerBarrier' , 'SummonerFlash');
	//echo $spells[0]; 
	
for ($i = 0; $i<=12;$i++){
	
$id = $data["data"][$spells[$i]]['id'];	
	echo "id = ($id)";
$description = $data["data"][$spells[$i]]['description'];
	echo "description =($description)";
$name = $data["data"][$spells[$i]]['name'];	
	echo "name = ($name)";
$summonerLevel = $data["data"][$spells[$i]]['summonerLevel'];	
	echo "summonerLevel =($summonerLevel)";

$stmt = $db->prepare("INSERT INTO SummonerSpells(id,description,name,summonerLevel) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $id, $description, $name, $summonerLevel);

$stmt->execute();
	
echo $db->error;

}

?>
