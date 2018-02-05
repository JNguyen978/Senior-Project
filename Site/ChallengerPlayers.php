<?PHP
$server = "localhost";
$username = "S0245819";
$password = "Nguyen1992";
$database = "S0245819";

$db = new mysqli($server,$username,$password,$database);
if ($db -> connect_error) die ("Connection Failed");
	//echo "Connected ";
	
//mysqli_select_db($db, "NarakaPain");
	
$RiotAPI = file_get_contents("https://na.api.riotgames.com/api/lol/NA/v2.5/league/challenger?type=RANKED_SOLO_5x5&api_key=RGAPI-9f105d8f-e469-4e5e-bf31-1d2be6fd6763");	
	//echo $RiotAPI;

$data = json_decode($RiotAPI, true);
		
	//var_dump($data);
	
for ($i = 0; $i<=200;$i++){

$leaguePoints = $data["entries"][$i]['leaguePoints'];
	echo "leaguePoints = ($leaguePoints)";
$division = $data['entries'][$i]['division'];
	echo "division = ($division)";
$losses = $data['entries'][$i]['losses'];
	echo "losses = ($losses)";
$wins = $data['entries'][$i]['wins'];
	echo "wins = ($wins)";
$playerOrTeamName = $data['entries'][$i]['playerOrTeamName'];
	echo "playerOrTeamName = ($playerOrTeamName)";
$playerOrTeamId = $data['entries'][$i]['playerOrTeamId'];
	echo "playerOrTeamId = ($playerOrTeamId)";	

$sql = "INSERT INTO Challenger(leaguePoints,division,losses,wins,playerOrTeamName,playerOrTeamId) VALUES
('$leaguePoints', '$division', '$losses', '$wins', '$playerOrTeamName', '$playerOrTeamId')";

$result = $db->query($sql);
echo $db->error;


}

?>
